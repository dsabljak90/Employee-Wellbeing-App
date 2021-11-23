<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommendationsController extends Controller
{
       public function reactApp()
    {
        return view('recommendations.react-app');
    }
    public function answers(Request $request){
        return $request->input();
}
 
}