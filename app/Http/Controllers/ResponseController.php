<?php

namespace App\Http\Controllers;
use App\Models\Response;
use App\Models\Testing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{




    public function  total_response( $id){
   
        $user = 2; // This reds user id from Responses table. User is posible ti auticatre with Auth::user()
        $testing = Testing::findOrFail($id)->id;
        //Testing::  where('id', 'like', '%' . $searchString . '%')->get();
        //Testing::findOrFail($id)->id; // This reeds testing_id from Responses table.
        $response= Response::all();
        //Manegent to select particular user witg {$id}. see how to get an imput for that with foorm.
        
        $sum =0;
    if($user=== 2 && $testing ===2){
        foreach( $response as $response){
            if($response->user_id == $user && $response->testing_id == $testing){
            $sum +=$response->answer;}
            echo $response->testing_id;
        }};
        echo $sum/7;
        $score = $sum /6; 
        echo 'user';
       //The all questions mut be fulfill. It they are not, that data dont go in db.
        echo 'testing';
        echo  $testing;
        return view('/response', compact('user', 'testing', 'score' )); 

    }
}
