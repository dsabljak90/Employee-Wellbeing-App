<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $questions = json_decode(file_get_contents(storage_path('questions.json')));
        return view('test/test', ["questions"=>$questions]);
    }
    public function store(Request $request)
{
 $answer = $request->input('answer');
}
}