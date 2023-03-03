<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\tournament_avatar;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        $teams = Team::where('user_id',auth()->user()->id)->get();
        $tournament_avatars = tournament_avatar::all();
        return view('users.editprofile',compact('tournament_avatars'),compact('games','teams'));
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
        $formFields = $request->validate([
            'full_name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'image'=>'required',
            'level'=>'required',
            'uid'=>'required',
            'game_id'=>'required'
        ]);
        if($request->hasFile('image')){
            $formFields['image']= $request->file('image')->store('users','public');
        }
        Profile::create($formFields + ['user_id'=> auth()->user()->id]);
        return redirect('/myprofile')->with('message','Your profile has been updated');
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
        return view('users.updateprofile');
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
