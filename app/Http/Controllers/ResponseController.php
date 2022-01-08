<?php

namespace App\Http\Controllers;
use App\Models\Response;
use App\Models\Testing;
use App\Models\EmployeeRecommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{




    public function total_response(Request $response){

        if(Auth::user()){
        
            $user_name = Auth::user()->fullname;
            $user_id = Auth::user()->id;
          
        

        $user = Auth::user()->id; // This reds user id from Responses table. 
       
    
        $testing = request('testing');
        
        //Testing::  where('id', 'like', '%' . $searchString . '%')->get();
        //Testing::findOrFail($id)->id; // This reeds testing_id from Responses table.
        $response= Response::all();
        
        $sum =0;
   {
        foreach( $response as $response){
            if($response->user_id == $user && $response->testing_id == $testing){
            $sum +=$response->answer;}
        
        };
       
        $score = $sum /7; 
        
        $recommendation = EmployeeRecommendation::all();
   
if($score){
        foreach($recommendation as $recomend){
          
          
          if($recomend->lower_limit <= $score && $recomend->upper_limit >= $score){
            $user_recommendation = $recomend->text;

           
          }
          echo $user_name;
        

        }
        return view('/statistics/statistics', compact('user_name', 'user_id','testing', 'user_recommendation' )); 
    
    }
     


       //The all questions mut be fulfill. It they are not, that data don't go in db.
       
        return view('/statistics/statistics', compact('user_name', 'user_id','testing' )); 

    }
}}}
