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
        $user = Auth::user();
        
        // $testing = Testing::findOrfail($testing_id);
        $manager_id = $user->manager_id;
        // dd($manager_id);
        $responses = Response::query()
            ->select('responses.*')
            ->join('users', 'responses.user_id', 'users.id')
            ->where('users.manager_id', $manager_id)
            ->get();
//
        return $responses;
    }
}