<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tournament = Tournament::find($id);
        $participants= Booking::where('tournament_id',$tournament)->get();
        return view('console.tournaments.participants',compact('participants'),compact('tournament'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $team_name = $request->team_name;
        $team = Team::where('name',$team_name)->first();
        $team_id = $team->id;
        $check = Booking::where('tournament_id',$request->tournament_id)->where('user_id',$user_id)->count();
        if($check >0){
            return redirect('/')->with('message','This tournament has been already booked');
        }
        $formFields = $request->validate([
            'tournament_id'=>'required',
        ]);
        $tournament_id = Session::get('id');
        $tournament = Tournament::find($tournament_id);
        if($tournament->closing_time < now()) {
            return redirect('/')->with('message','This tournament has already closed for booking');
        }
        Booking::create($formFields+['team_id'=>$team_id] + ['user_id'=>$user_id]);
        return redirect('/')->with('message','Tournament booked successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participants= Booking::where('tournament_id',$id)->first();
        return view('console.participant',compact('participants'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
