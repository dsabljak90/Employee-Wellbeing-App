<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ReactAppController extends Controller
{
     public function renderApp()
    {
        $user=Auth::user();
        return view('main_page', compact('user'));
    }
}