<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Tournament;
use App\Models\Tournament_Avatar;
use App\Models\Game;
use App\Models\User;
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
