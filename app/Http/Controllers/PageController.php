<?php

namespace App\Http\Controllers;
use App\PerformanceHelper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Models\Contact;
use App\Models\User;
use App\Models\Tournament;
use App\Models\Tournament_Avatar;
use App\Models\Booking;
use App\Models\Profile;
use App\Models\Team;
use App\Models\Points;
use App\Models\Results;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        $tournaments = Tournament::orderBy('closing_time', 'asc')->simplePaginate(5);
        return view('pages.index', compact('games','tournaments'));
    }
    //contact us
    public function contact()
    {
        return view('pages.contact');
    }
    //add contact
    public function add_contact(Request $request)
    {
        $formField= $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        Contact::create($formField);
        return redirect('/')->with('message','Message sent successfully');
    }
    //show message
    public function show_contact()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->simplePaginate(5);
        return view('admin.contact.index',compact('contacts'));
    }
    //about us
    public function about()
    {
        return view('pages.about');
    }
    //display user profile page
    public function user_profile()
    {
        $user = Auth::user();
        if($user == null)
        {
            return redirect('/login');
        }
        else{
            $profiles = Profile::where('user_id',auth()->user()->id)->first();
            if($profiles == null)
            {
                return redirect('/editprofile');
            }
            else{
                $team= Team::where('user_id',auth()->user()->id)->first();
                $game = Game::findorFail($profiles->game_id);
                return view('users.userprofile',compact('profiles'),['teams'=> $team, 'games' => $game]);
            }
        }
    }
    public function searchByName(Request $request)
    {
        $name = $request->input('name');
        $search_tournaments = Tournament::where('name', 'like', "%$name%")->simplePaginate(3);
        $games = Game::all();
        return view('pages.searched',compact('search_tournaments','games'));
    }
    public function searchByType(Request $request)
    {
        $type = $request->input('type');
        $search_tournaments = Tournament::where('type',$type)->simplePaginate(3);
        $games = Game::all();
        return view('pages.searched',compact('search_tournaments','games'));
    }
    public function searchByGame(Request $request)
    {
        $game = $request->input('game_id');
        $search_tournaments = Tournament::where('game_id',$game)->simplePaginate(3);
        $games = Game::all();
        return view('pages.searched',compact('search_tournaments','games'));
    }
    //display all tournaments
    public function show_tournaments()
    {
        $tournaments = Tournament::orderBy('closing_time','asc')->with('bookings')->simplePaginate(5);
        $games = Game::all();
        $now = Carbon::now();
        foreach ($tournaments as $tournament) {
            $bookingCloseTime = new Carbon($tournament->closing_time);
            $secondsUntilBookingClose = $now->diffInSeconds($bookingCloseTime);
            $tournament->secondsUntilBookingClose = $secondsUntilBookingClose;
            $secondsSinceTournamentPosting = $now->diffInSeconds($tournament->created_at);
            $tournament->secondsSinceTournamentPosting = $secondsSinceTournamentPosting;
        }
        return view('pages.tournament',compact('tournaments','games'));
    }
    //show indvidual tournaments details
    public function tournament_details($id)
    {
        $tournaments = Tournament::findOrFail($id);
        $user_id = $tournaments->user_id;
        Session::put('id',$id);
        $ratings = Rating::where('comments_on', $user_id)->get();
        $average = $ratings->avg('ratings');
        $user = Profile::where('user_id',$tournaments->user_id)->first();
        return view('pages.tournaments-details',compact('tournaments','average'),['profile'=>$user]);
    }
    //show tournament host dashboard
    public function dashboard()
    {
        $user = Auth::user();
        $games = Game::all();
        if($user == null)
        {
            return redirect('/login');
        }
        $points = Points::where('user_id',$user->id)->get();
        $tournaments = Tournament::orderBy('closing_time','desc')->where('user_id', $user->id)->simplePaginate(3);
        return view('console.index',compact('games','tournaments','points'));
    }
    //show page to select game
    public function select_game()
    {
        $games = Game::all();
        return view('console.tournaments.select',compact('games'));
    }
    //show create tournament page inc game id in route
    public function create_tournament($id)
    {
        $game = Game::find($id);
        $user = Auth::user();
        $tournament_avatars = Tournament_Avatar::all();
        $points = Points::where('user_id',$user->id)->get();
        return view('console.tournaments.create',compact('tournament_avatars','points'),['game' => $game]);
    }
    //show booking page inc team members in textboxes
    public function bookings($id)
    {
        $user = auth()->user()->id;
        $profiles = Profile::where('user_id',$user)->first();
        $teams = Team::where('user_id',$user)->first();
        $tournaments = Tournament::find($id);
         if($profiles == null || $teams == null)
        {
            return redirect('/editprofile')->with('message','Please set your team information');;
        }
        else{
            return view('tournament.bookings',compact('teams','profiles'),['tournaments'=>$tournaments]);
        }
    }

    //show participants in dashboard
    public function participants($id)
    {
        $user = Auth::user();
        $games = Game::all();
        Session::put('tournament_id', $id);
        $participants = Booking::where('tournament_id', $id)->get();
        //to check the user is host or not
        $check = Tournament::where('user_id',$user->id)->where('id',$id)->first();
        if(!$check)
        {
            return redirect('/')->with('message','Access forbidden');
        }
        $points = Points::where('user_id',$user->id)->get();
        return view('console.participants',compact('games','points','participants'));
    }
    //show calculate page in dashboard
    public function show_calculate($id)
    {
        $user = Auth::user();
        $check_points = Points::where('user_id',$user)->first();
        $games = Game::all();
        Session::put('team_id',$id);
        //check the host is actual a logged user
        $tournament_id = Session::get('tournament_id');
        $check = Tournament::where('id',$tournament_id)->where('user_id',$user->id)->first();
        if(! $check)
        {
            return redirect('/')->with('message','Access forbidden');
        }
        $bookings = Booking::where('user_id', $user->id)->get();
        $points = Points::where('user_id',$user->id)->get();
        $team = Team::where('id',$id)->first();
        return view('console.calculate',compact('bookings','games','points'),['team'=>$team]);
    }
    //show result to organizer
    public function show_result($id)
    {
        $results = DB::table('results')
        ->select('teams.name as team_name', 'teams.logo as logo', 'results.team_id', 'results.tournament_id', DB::raw('SUM(total) as total_points'), DB::raw('SUM(kills) as total_kills'))
        ->join('teams', 'teams.id', '=', 'results.team_id')
        ->join('tournaments', 'tournaments.id', '=', 'results.tournament_id')
        ->groupBy('teams.name', 'results.team_id', 'results.tournament_id', 'teams.logo')
        ->where('results.tournament_id', '=', $id)
        ->orderByRaw('SUM(total) desc')
        ->get();
        $user = Auth::user();
        $points = Points::where('user_id',$user->id)->get();
        $games = Game::all();
        return view('console.result',compact('results','points','games'));
    }
     //show result to user
     public function user_result($id)
     {
        $user_id = Auth::user()->id;
        $userresults = DB::table('results')
        ->select('teams.name as team_name', 'teams.logo as logo', 'results.team_id', 'results.tournament_id', DB::raw('SUM(total) as total_points'), DB::raw('SUM(kills) as total_kills'))
        ->join('teams', 'teams.id', '=', 'results.team_id')
        ->join('tournaments', 'tournaments.id', '=', 'results.tournament_id')
        ->groupBy('teams.name', 'results.team_id', 'results.tournament_id', 'teams.logo')
        ->where('results.tournament_id', '=', $id)
        ->orderByRaw('SUM(total) desc')
        ->get();
         //to fetch weekly, monthly score and overall kills
         $command = 'python ' . base_path() . '/python/overall_manipulation.py '. $user_id;
         $output = shell_exec($command);
         $overall_data = json_decode($output, true);
        return view('users.result',compact('userresults'),['overall_data' => $overall_data]);
     }
     //show user dashboard
     public function user_dashboard()
     {
        $user_id = Auth::user()->id;
        $bookings = Booking::where('user_id',$user_id)->get();
        //to fetch weekly, monthly score and overall kills
        $command = 'python ' . base_path() . '/python/overall_manipulation.py '. $user_id;
        $output = shell_exec($command);
        $overall_data = json_decode($output, true);
        return view('users.dashboard',['overall_data' => $overall_data],compact('bookings'));
    }
     //show tournament performance individually
     public function tournament_performance($id)
     {
        $user_id = Auth::user()->id;
        $team = Team::where('user_id',$user_id)->first();
        //to fetch kills in relation to teammates from histories table
        $command = 'python ' . base_path() . '/python/overall_manipulation.py '. $user_id;
        $output = shell_exec($command);
        $overall_data = json_decode($output, true);
        //to fetch total score and kills in relation to match number from results table
        $team = Team::where('user_id',$user_id)->first();
        $command = 'python ' . base_path() . '/python/tournament_manipulation.py ' . $id . ' ' . $team->id;
        $output = shell_exec($command);
        $tournament_data= json_decode($output, true);
        return view('users.tournament_performance',['overall_data' => $overall_data],['tournament_data' => $tournament_data]);
    }
    //show reviews page
    public function ratings($id)
    {
        $user_id = auth()->user()->id;
        $comments_on = User::findOrFail($id);
        $user_rating = Rating::where('comments_by',$user_id)->get();
        $profiles = Profile::where('user_id',$user_id)->first();
        $ratings = Rating::where('comments_on',$id)->get();
        return view('pages.reviews',compact('comments_on','user_rating'),compact('profiles','ratings'));
    }
}



