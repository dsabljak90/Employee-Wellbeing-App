<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MainpageController extends Controller
{
    public function index()
    {
        $user_name = Auth::user()->fullname;
        return view('main_page', compact('user_name'));
    }
}