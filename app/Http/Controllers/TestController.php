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
    public function assignTest($testing_id) {
        $testing = Testing::findOrFail($testing_id);

        $testing->opened = true;
        $testing->save();
        //sends emails with instructions to users after admin click on assign test button
        $email = new \SendGrid\Mail\Mail(); 
        $email->setTemplateId("d-7112ff9ed94748fb8d7e8743c495510c");//SendGrid email template ID
        $email->setFrom("radcer2@seznam.cz", "Manatu Wellbeing App"); //from - to be connected with user database
        $email->setSubject("testing email from wellbeing app"); //subject
        $email->addTo("cerny.rada@gmail.com", "Wellbeing User"); //email to
        //$email->addContent("text/plain", "Welcome to our famous wellbeing app!"); //not needed when using email template id 
        //$email->addContent(
            //"text/html", "Dear Wellbeing App User,</br></br> welcome to our wellbeing app!</br></br> Are you ready to know more? </br></br> Just click on the button below!" //email body
        //); //not needed
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }

        
        return redirect('/test/' . $testing->id);
    }
}