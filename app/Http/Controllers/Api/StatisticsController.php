<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Response;
use Illuminate\Http\Request;
use App\Http\Resources\ResponseResource;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function show(Request $request)
    {


        $user_id = Auth::id();
        

        $user_id = $request->get('user_id');
        // dd($user_id);

        $response = Response::where('user_id', $user_id)->get();

// ->where('testing_id', 2)
        return ($response);
    }

}