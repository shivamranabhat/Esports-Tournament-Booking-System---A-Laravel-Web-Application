<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Tournament;
use App\Models\Tournament_Avatar;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
            $user = auth()->user()->id;
            $profiles = Profile::where('user_id',$user)->first();
            $game = Game::find($profiles->game_id);
            return view('users.userprofile',compact('profiles'),['games' => $game]);
        }
    }
    public function show_tournaments()
    {
        $tournaments = Tournament::orderBy('closing_time','asc')->get();
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
        return view('pages.tournaments-details',compact('tournaments'));
    }
    public function dashboard()
    {
        $user = Auth::user();
        if($user == null)
        {
            return redirect('/login');
        }
        $tournaments = Tournament::where('user_id', $user->id)->get();
        // $openBookingTournaments = Tournament::where('closing_time', '>', Carbon::now())->get();
        $games = Game::all();
        return view('console.dashboard',compact('games'),compact('tournaments'));
    }
    public function create_tournament($id)
    {
        $game = Game::find($id);
        $tournament_avatars = Tournament_Avatar::all();
        return view('console.create_tournament',compact('tournament_avatars'),['game' => $game]);
    }
    

}



