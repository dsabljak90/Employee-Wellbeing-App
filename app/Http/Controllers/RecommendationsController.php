<?php

namespace App\Http\Controllers;
use App\Models\Response;
use App\Models\Testing;
use App\Models\EmployeeRecommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecommendationsController extends Controller
{
       public function reactApp()
    {
        return view('recommendations.react-app');
    }
    public function answers(Request $request){
        return $request->input();
}
 
   
public function index() {
        if(Auth::user()){
        
            $user_name = Auth::user()->fullname;
            $user_id = Auth::user()->id;
   
        $user = Auth::user()->id; // This reds user id from Responses table. User is possible ti authenticate with Auth::user()
        $testing = Response::max('testing_id');
        
        //Testing::  where('id', 'like', '%' . $searchString . '%')->get();
        //Testing::findOrFail($id)->id; // This reeds testing_id from Responses table.
        $response= Response::all();
        $sum =0;
   {
        foreach( $response as $response){
            if($response->user_id == $user && $response->testing_id == $testing){
            $sum +=$response->answer;}
        
        };
       
        $score = $sum/7; 
        $recommendation = EmployeeRecommendation::all();
   

        foreach($recommendation as $recomend){
          
          
          if($recomend->lower_limit <= $score && $recomend->upper_limit >= $score){
            $user_recommendation = $recomend->text;

           
          }
          
        

        }
     
        
       //The all questions mut be fulfill. It they are not, db will not receive the data.
       
        return view('/recommendations/recommendations', compact('user_name', 'user_id','testing','user_recommendation')); 

    }
}}


}