<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Response;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class RecommendationsController extends Controller
{
     public function show()
    {
        $user_id = Auth::id();

        $response = Response::where('user_id', $user_id)->where('testing_id', 2)->get();

        return ($response);
    }

}