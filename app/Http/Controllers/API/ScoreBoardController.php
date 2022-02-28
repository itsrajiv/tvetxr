<?php

namespace App\Http\Controllers\API;

use App\Models\ScoreBoard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ScoreBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scoreboard = ScoreBoard::orderby('time_completion')->get();

        return json_encode($scoreboard);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' 	=> 'required',
            'score' 		=> 'required',
        ]);

        if($validator->fails()){
            $data = [
                'status' => 'error', 
                'type' => 'Validation Error',
                'message' => 'Validation error, please check back your input.' ,
                'error_list' => $validator->messages() ,
            ];
            return json_encode($data);
        }

        $add = New ScoreBoard;
        $add->name = $request->name;
        $add->score = $request->score;
        $add->box = $request->box;
        $add->time_completion = $request->time_completion;
        $add->created_by = "System";
        $add->save();

        $data = [
            'status' => 'success', 
            'message' => 'Successfully store score',
            'data' => $add,
        ];
        return json_encode($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScoreBoard  $scoreBoard
     * @return \Illuminate\Http\Response
     */
    public function show(ScoreBoard $scoreBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScoreBoard  $scoreBoard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScoreBoard $scoreBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScoreBoard  $scoreBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScoreBoard $scoreBoard)
    {
        //
    }
}
