<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagersStatisticsController extends Controller
{
     public function reactApp()
    {
        return view('managersstatistics.react-app');
    }
    public function answers(Request $request){
        return $request->input();
}
}