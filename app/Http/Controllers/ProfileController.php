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
        $exists = Profile::where('user_id',auth()->user()->id)->first();
        if($exists){
            return redirect('/editprofile')->with('message','Your profile has been already exists');
        }
        else{
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
        $teams = Team::where('user_id',$user->id)->first();
        $games = Game::all();
        $profile = Profile::findOrFail($id);
        return view('users.updateprofile',compact('profile','games'),compact('teams'));
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
        $profile = Profile::findOrFail($id);
        $user_id = auth()->id();
        // Make sure logged in user is owner
        if($profile->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        //if user select new image
        if($request->hasFile('image')){
            $formFields = $request->validate([
                'full_name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'image'=>'required',
                'level'=>'required',
                'uid'=>'required',
                'game_id'=>'required'
            ]);
            $formFields['image']= $request->file('image')->store('users','public');
            $profile->update($formFields);
        }
        //if user didn't select new image
        $fields = $request->validate([
            'full_name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'level'=>'required',
            'uid'=>'required',
            'game_id'=>'required'
        ]);
        $profile->update($fields);
        return redirect('/myprofile')->with('message','Your profile has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        // Make sure logged in user is owner
        if($profile->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $profile->delete();
        return redirect('/dashboard')->with('message','Profile deleted succesfully');
    }
}
