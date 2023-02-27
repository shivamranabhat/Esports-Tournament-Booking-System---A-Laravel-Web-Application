<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Tournament;
use App\Models\Tournament_Avatar;
use App\Models\Booking;
use App\Models\Profile;
use App\Models\Team;
use App\Models\Points;
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
    public function tournament_details($id)
    {
        $tournaments = Tournament::find($id);
        $user = Profile::where('user_id',$tournaments->user_id)->first();
        return view('pages.tournaments-details',compact('tournaments'),['profile'=>$user]);
    }
    public function dashboard()
    {
        $user = Auth::user();
        $games = Game::all();
        if($user == null)
        {
            return redirect('/login');
        }
        $tournaments = Tournament::orderBy('closing_time','desc')->where('user_id', $user->id)->get();
        $games = Game::all();
        return view('console.tournaments.index',compact('games'),compact('tournaments'));
    }
    public function select_game()
    {
        $games = Game::all();
        return view('console.tournaments.select',compact('games'));
    }
    public function create_tournament($id)
    {
        $game = Game::find($id);
        $tournament_avatars = Tournament_Avatar::all();
        return view('console.tournaments.create',compact('tournament_avatars'),['game' => $game]);
    }

    public function bookings($id)
    {
        $user = auth()->user()->id;
        $profiles = Profile::find($user);

        if($user == null)
        {
            return redirect('/login');
        }
        else if($profiles == null)
        {
            return redirect('/editprofile');
        }
        else{
            $tournaments = Tournament::find($id);
            $teams = Team::where('user_id',$user)->first();
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
        $games = Game::all();
        return view('console.tournaments.participants',compact('games'),compact('participants'));
    }
    //show calculate page in dashboard
    public function show_calculate($id)
    {
        $user = Auth::user();
        $check_points = Points::where('user_id',$user)->first();
        $games = Game::all();
        $bookings = Booking::where('user_id', $user->id)->get();
        $team = Team::where('id',$id)->first();
        return view('console.tournaments.calculate',compact('bookings','games'),['team'=>$team]);
    }
    public function show_points()
    {
        return view('console.tournaments.set_points');
    }

}



