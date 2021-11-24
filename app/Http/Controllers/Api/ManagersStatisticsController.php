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
     public function show()
    {
        $user = Auth::user();

        // $testing = Testing::findOrfail($testing_id);
        $manager_id = $user->manager_id;
        // dd($manager_id);
        $response = Response::where('$manager_id', $manager_id);

        return ($response);
    }
}