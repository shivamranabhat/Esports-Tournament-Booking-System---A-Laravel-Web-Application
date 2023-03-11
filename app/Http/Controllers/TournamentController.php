<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Tournament;
use App\Models\tournament_avatar;
use App\Models\Game;
use App\Models\User;
use App\Models\Points;
use Illuminate\Support\Facades\Auth;



class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $formFields=$request->validate([
            'name'=>'required',
            'type'=>'required',
            'fees'=>'required',
            'closing_time'=>'required',
            'team_size'=>'required',
            'prize_pool'=>'required',
            'first_prize'=>'required',
            'second_prize'=>'required',
            'third_prize'=>'required',
            'rules'=>'required',
            'image_id'=>'required',
            'game_id'=>'required'
        ]);
        Tournament::create($formFields + ['user_id'=>auth()->user()->id]);
        return redirect('/dashboard')->with('message','Tournament created succesfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $tournament = Tournament::findOrFail($id);
        // Make sure logged in user is owner
        if($tournament->user_id != auth()->id())
        {
            return redirect('/login');
        }
        $tournament_avatars = tournament_avatar::all();
        $points = Points::where('user_id',$user->id)->get();
        return view('console.tournaments.edit',compact('tournament','tournament_avatars'),compact('points'));
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
        $tournament = Tournament::findOrFail($id);
        $formFields=$request->validate([
            'name'=>'required',
            'type'=>'required',
            'fees'=>'required',
            'closing_time'=>'required',
            'team_size'=>'required',
            'prize_pool'=>'required',
            'first_prize'=>'required',
            'second_prize'=>'required',
            'third_prize'=>'required',
            'rules'=>'required',
            'image_id'=>'required',
        ]);
        $tournament->update($formFields + ['user_id'=>auth()->user()->id]);
        return redirect('/dashboard')->with('message','Tournament has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tournament = Tournament::findOrFail($id);
        // Make sure logged in user is owner
        if($tournament->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $tournament->delete();
        return redirect('/dashboard')->with('message','Tournament deleted succesfully');
    }
}

?>
