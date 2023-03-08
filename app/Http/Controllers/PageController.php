<?php

namespace App\Http\Controllers;
use App\PerformanceHelper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Models\Tournament;
use App\Models\Tournament_Avatar;
use App\Models\Booking;
use App\Models\Profile;
use App\Models\Team;
use App\Models\Points;
use App\Models\Results;
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
        $tournaments = Tournament::orderBy('closing_time', 'asc')->get();
        return view('pages.index', compact('games'),compact('tournaments'));
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
    //display all tournaments
    public function show_tournaments()
    {
        $tournaments = Tournament::orderBy('closing_time','asc')->with('bookings')->get();
        $now = Carbon::now();
        foreach ($tournaments as $tournament) {
            $bookingCloseTime = new Carbon($tournament->closing_time);
            $secondsUntilBookingClose = $now->diffInSeconds($bookingCloseTime);
            $tournament->secondsUntilBookingClose = $secondsUntilBookingClose;
            $secondsSinceTournamentPosting = $now->diffInSeconds($tournament->created_at);
            $tournament->secondsSinceTournamentPosting = $secondsSinceTournamentPosting;
        }
        return view('pages.tournament',compact('tournaments'));
    }
    //show indvidual tournaments details
    public function tournament_details($id)
    {
        $tournaments = Tournament::find($id);
        $user = Profile::where('user_id',$tournaments->user_id)->first();
        return view('pages.tournaments-details',compact('tournaments'),['profile'=>$user]);
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
        $tournaments = Tournament::orderBy('closing_time','desc')->where('user_id', $user->id)->get();
        return view('console.index',compact('games'),compact('tournaments','points'));
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

        if($user == null)
        {
            return redirect('/login');
        }
        else if($profiles == null || $teams == null)
        {
            return redirect('/editprofile')->with('message','Please set your team information');;
        }
        else{
            $tournaments = Tournament::find($id);

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
        $points = Points::where('user_id',$user->id)->get();
        return view('console.participants',compact('games','points'),compact('participants'));
    }
    //show calculate page in dashboard
    public function show_calculate($id)
    {
        $user = Auth::user();
        $check_points = Points::where('user_id',$user)->first();
        $games = Game::all();
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
        return view('console.result',compact('results','points'),compact('games'));
    }
     //show result to user
     public function user_result($id)
     {
        $userresults = DB::table('results')
        ->select('teams.name as team_name', 'teams.logo as logo', 'results.team_id', 'results.tournament_id', DB::raw('SUM(total) as total_points'), DB::raw('SUM(kills) as total_kills'))
        ->join('teams', 'teams.id', '=', 'results.team_id')
        ->join('tournaments', 'tournaments.id', '=', 'results.tournament_id')
        ->groupBy('teams.name', 'results.team_id', 'results.tournament_id', 'teams.logo')
        ->where('results.tournament_id', '=', $id)
        ->orderByRaw('SUM(total) desc')
        ->get();
         $performance = new PerformanceHelper();
         $overall_results = $performance->performance();

        // Access individual variables from the returned array
        $kills = $overall_results[0];
        $week_data = $overall_results[1];
        $month_data = $overall_results[2];
        $results = $overall_results[3];
        return view('users.result',compact('userresults','kills','week_data','month_data','results'));
     }


}



