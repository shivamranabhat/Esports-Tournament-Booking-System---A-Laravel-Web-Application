<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Models\User;
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

class AdminPageController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = Tournament::orderBy('closing_time','asc')->simplePaginate(5);
        $now = Carbon::now();
        foreach ($tournaments as $tournament) {
            $bookingCloseTime = new Carbon($tournament->closing_time);
            $secondsUntilBookingClose = $now->diffInSeconds($bookingCloseTime);
            $tournament->secondsUntilBookingClose = $secondsUntilBookingClose;
            $secondsSinceTournamentPosting = $now->diffInSeconds($tournament->created_at);
            $tournament->secondsSinceTournamentPosting = $secondsSinceTournamentPosting;
        }
        $overall_tournaments = Tournament::all();
        $bookings= Booking::all();
        $users = User::all();
        return view('admin.index',compact('tournaments','overall_tournaments','bookings','users'));
    }



}



