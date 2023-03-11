<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Points;
use App\Models\Results;
use App\Models\Tournament;
use App\Models\Team;
use App\Models\Game;
use App\Models\History;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Fascades\Session;

class PointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = Points::where('user_id',auth()->user()->id)->get();
        return view('console.tournaments.point',compact('points'));
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
        $exists = Points::where('user_id',auth()->user()->id)->first();
        if($exists)
        {
            return redirect('/dashboard');
        }
        $formFields= $request->validate([
            'kills_point'=>'required',
            'placement_point'=>'required',
        ]);
        Points::create($formFields+['user_id'=>auth()->user()->id]);
        return redirect('/dashboard');
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
        $games = Game::all();
        $tournaments = Tournament::orderBy('closing_time','desc')->where('user_id', $user->id)->get();
        $points = Points::findOrFail($id);
          // Make sure logged in user is owner
        if($points->user_id != $user->id )
        {
            return redirect('/login');
        }
        return view('console.points.edit',compact('games','tournaments','points'));
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
        $points = Points::findOrFail($id);
        // Make sure logged in user is owner
        if($points->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $formFields = $request->validate([
            'kills_point'=>'required',
            'placement_point'=>'required',
        ]);
        $points->update($formFields);
        return redirect('/dashboard')->with('message', 'Points has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $points = Points::findOrFail($id);
         // Make sure logged in user is owner
         if($points->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $points->delete();
        return redirect('/dashboard')->with('message','Points has been deleted');
    }
}
