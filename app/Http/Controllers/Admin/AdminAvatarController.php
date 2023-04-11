<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Tournament_Avatar;
use Illuminate\Support\Facades\Storage;



class AdminAvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Tournament_Avatar::orderBy('created_at','desc')->simplePaginate(5);
        return view('admin.avatars.index',compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.avatars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields= $request->validate([
            'image'=>'required|image'
        ]);
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('tournament_avatar','public');
        }
        Tournament_Avatar::create($formFields);
        return redirect()->route('avatars')->with('message','Avatar added successfully');
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
        $avatar = Tournament_Avatar::findOrFail($id);
        return view('admin.avatars.edit',compact('avatar'));
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
        $avatar = Tournament_Avatar::findOrFail($id);
        $formFields = $request->validate([
            'image'=>'required|image'
        ]);
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('tournament_avatar','public');
        }
        $avatar->update($formFields);
        Storage::delete($avatar->image);
        return redirect()->route('avatars')->with('message','Avatar has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avatar = Tournament_Avatar::findOrFail($id);
        Storage::delete($avatar->image);
        $avatar->delete();
        return redirect()->route('avatars')->with('message','Avatar has been deleted');
    }
}
