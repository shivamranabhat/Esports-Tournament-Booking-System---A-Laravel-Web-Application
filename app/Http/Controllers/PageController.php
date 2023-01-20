<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Tournament;
use App\Models\Tournament_Avatar;
use Carbon\Carbon;

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
        return view('users.userprofile');
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
        $tournaments = Tournament::findOrFail($id);
        return view('pages.tournaments-details',compact('tournaments'));
    }
    public function dashboard()
    {
        $games = Game::all();
        return view('console.dashboard',compact('games'));
    }
    public function create_tournament($id)
    {
        $game = Game::find($id);
        $tournament_avatars = Tournament_Avatar::all();
        return view('console.create_tournament',compact('tournament_avatars'),['game' => $game]);
    }

}



