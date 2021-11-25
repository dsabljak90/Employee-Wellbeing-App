<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ManagersStatisticsController extends Controller
{
     public function reactApp()
    {
        // Auth::id()
        $user=User::findOrFail(Auth::id());
        // $user=User::where('id', Auth::id())->first();
        $user_role=$user->role;
        return view('managersstatistics.react-app', compact('user_role'));
        
    }
    public function answers(Request $request){
        return $request->input();
}

}