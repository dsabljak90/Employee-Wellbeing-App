<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TestController extends Controller
{
    public function index()
    {
        // $questions = json_decode(file_get_contents(storage_path('questions.json')));
        $questions = Question::all();
        return view('test/test', ["questions"=>$questions]);
    }
    public function store(Request $request) {
        // do this as many times as you have questions
        // common for all questions/responses in one submit 
        foreach ($request->input('answers') as $question_id => $answer){
        $response = new Response();
        $response->testing_id = 3;
        $response->user_id = Auth::user()->id;
        
        // specific for each question/answer
        $response->question_id = $question_id;
        $response->answer = $answer;
         $response->save();
        

        }
                dd($request->input('answers'));
return $request->all();
    return redirect('/');
    }
 
        

 public function update(Request $request) {
    foreach ($request->input('answers') as $question_id => $answer){
        $response = new Response();
        $response->test_id = 3;
        $response->user_id = "??";
        
        // specific for each question/answer
        $response->question_id = $question_id;
        $response->answer = $answer;
        // $response->save()
        
        dd($request->input('answers'));
return $request->all();
        }
}
}