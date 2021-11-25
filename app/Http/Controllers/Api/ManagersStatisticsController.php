<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Response;
use App\Models\Testing;
use App\Models\User;
class ManagersStatisticsController extends Controller
{
     public function show(Request $request)
    {
        // $user = Auth::user();
        $user_id = $request->get('user_id');
        // $testing = Testing::findOrfail($testing_id);
        $user_role = $request->get('user_role');
        // $manager_id = $user->manager_id;
        // dd($manager_id);

        $response = $user_id;
        return $response;
        $response = Response::where('$manager_id', $manager_id);
//
        return ($response);
    }
}