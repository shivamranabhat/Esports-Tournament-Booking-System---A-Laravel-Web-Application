<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Tournament;
use App\Models\Team;
use App\Models\Points;
use App\Models\Results;
use App\Models\History;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\PerformanceHelper;


class PerformanceController extends Controller
{
    public function performance()
    {
        $userId = Auth::id();
        $bookings = Booking::where('user_id',$userId)->get();
        $helper = new PerformanceHelper();
        $performance= $helper->performance();
        $kills = $performance[0];
        $week_data = $performance[1];
        $month_data = $performance[2];
        $results = $performance[3];
        return view('users.dashboard',compact('bookings','kills','week_data','month_data','results'));
    }
}
