<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
     public function reactApp()
    {
        return view('statistics.react-app');
    }
    public function answers(Request $request){
        return $request->input();
}
public function seeManagersStatistics($answer){
    $answers = Response::findOrFail($answer);
    $answers->save();
return redirect(action('ManagersStatisticsController@reactApp'));
}
}