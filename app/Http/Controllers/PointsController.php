<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Points;
use App\Models\Results;
use App\Models\Tournament;
use App\Models\History;

class PointsController extends Controller
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
        $user_id = Points::find(auth()->user()->id);
        if($user_id->count() == 0){
            $formFields= $request->validate([
                'kills_point'=>'required',
                'placement_point'=>'required',
            ]);
            Points::create($formFields+['user_id'=>auth()->user()->id]);
            return redirect('/dashboard');
        }
        else{
            return redirect('/');
        }
    }
    public function calculate(Request $request)
    {
        $user = Points::where('user_id',auth()->user()->id)->first();
        $kills_pts = $user->kills_point;
        $points = $user->placement_point;
        $total_kills = $request->kills1 + $request->kills2 + $request->kills3 + $request->kills4;
        $points_array = explode(',', $points);
        $placement_points = 0;
        foreach($points_array as $point){
            $placement = explode('=', $point);
            if(strpos($placement[0],'-') !== false){
                $placement_range = explode('-', $placement[0]);
                if($request->placement >= $placement_range[0] && $request->placement <= $placement_range[1]){
                    $placement_points = $placement[1];
                    break;
                }
            }else{
                if($request->placement == $placement[0]){
                    $placement_points = $placement[1];
                    break;
                }
            }
        }
    // Calculate the total points
    $totalPoints = $placement_points + $total_kills * $kills_pts;
    // Insert the data into result table
    $result = new Results();
    $tournament = Tournament::where('name',$request->name)->first();
    $result->tournament_id = $tournament->id;
    $result->user_id = auth()->user()->id;
    $result->match_no = $request->match_no;
    $result->kills = $total_kills;
    $result->placement = $request->placement;
    $result->total = $totalPoints;
    $result->save();
    // inserting data for histories table
      $data = [
        ['tournament_id'=>$tournament->id,'player_name' => request('player_name1'), 'kills' => request('kills1')],
        ['tournament_id'=>$tournament->id,'player_name' => request('player_name2'), 'kills' => request('kills2')],
        ['tournament_id'=>$tournament->id,'player_name' => request('player_name3'), 'kills' => request('kills3')],
        ['tournament_id'=>$tournament->id,'player_name' => request('player_name4'), 'kills' => request('kills4')],
    ];
    foreach ($data as $row) {
        History::create($row);
    }

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
