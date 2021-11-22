<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainpageController extends Controller
{
    public function index()
    {

        


    if(Auth::user()){
        
        $user_name = Auth::user()->fullname;
        $user_id = Auth::user()->id;
        
        return view('main_page', compact('user_name', 'user_id'));

    }
    return view('main_page');
    }

    public function indexUser()
    {

    if(Auth::user()){
        
        $user_name = Auth::user()->fullname;
        $user_id = Auth::user()->id;
        
        return view('/test/test', compact('user_name', 'user_id'));

    }
    return view('layouts/user-main');
    }

}
