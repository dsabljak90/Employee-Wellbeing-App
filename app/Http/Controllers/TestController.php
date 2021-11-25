<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use App\Models\Testing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TestController extends Controller
{
    public function index($testing_id = null)
    {
        if($testing_id === null){
            $testing = Testing::first();

            return redirect('/test/' . $testing->id);
        }

        $testing = Testing::findOrfail($testing_id);

        // $questions = json_decode(file_get_contents(storage_path('questions.json')));
        if(Auth::user()){
        
            $user_name = Auth::user()->fullname;
            $user_id = Auth::user()->id;

            $questions = Question::all();

            $responses = Response::where('user_id', Auth::user()->id)->where('testing_id', $testing->id)->get();
        
        return view('test/test', compact('testing', 'responses', 'questions', 'user_name', 'user_id'));
    }

    
}
    public function store(Request $request, $testing_id) {
        $questionCount = Question::count();

        $this->validate($request, [
            'answers' => 'required|array|size:' . $questionCount
        ]);
        // do this as many times as you have questions
        // common for all questions/responses in one submit 
        foreach ($request->input('answers') as $question_id => $answer){
        $response = new Response();
        $response->testing_id = $testing_id;
        $response->user_id = Auth::user()->id;
        
        // specific for each question/answer
        $response->question_id = $question_id;
        $response->answer = $answer;
         $response->save();
        

        }
                // dd($request->input('answers'));
// return $request->all();
    return redirect(action('RecommendationsController@index'));
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
    public function assignTest($testing_id) {
        $testing = Testing::findOrFail($testing_id);

        $testing->opened = true;
        $testing->save();

        
        return redirect('/test/' . $testing->id);
    }
}