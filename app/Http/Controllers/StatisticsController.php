<?php

namespace App\Http\Controllers;

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
}