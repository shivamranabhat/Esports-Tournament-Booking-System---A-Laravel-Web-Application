<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class AdminGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::orderBy('created_at','desc')->simplePaginate(5);
        return view('admin.games.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
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
            'name'=>'required',
            'image'=>'required|image'
        ]);
        if($request->hasFile('image')){
            $formFields['image']= $request->file('image')->store('images','public');
        }
        Game::create($formFields);
        return redirect()->route('games')->with('message','Game added successfully');
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
        $game = Game::findOrFail($id);
        return view('admin.games.edit',compact('game'));
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
        $game = Game::findOrFail($id);
        //if user select new image
        if($request->hasFile('image')){
            $formFields = $request->validate([
                'name'=>'required',
                'image'=>'required|image'
            ]);
            $formFields['image']= $request->file('image')->store('users','public');
            Storage::delete($avatar->image);
            $game->update($formFields);
        }
        //if user didn't select new image
        $fields = $request->validate([
            'name'=>'required',
        ]);
        $game->update($fields);
        return redirect()->route('games')->with('message','Game updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        Storage::delete($game->image);
        $game->delete();
        return redirect()->route('games')->with('message','Game deleted succesfully');
    }
}

?>
