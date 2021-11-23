<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
  public function send()
  {
            
       // If you're using Composer (recommended)
        // Comment out the above line if not using Composer
        // require("<PATH TO>/sendgrid-php.php");
        // If not using Composer, uncomment the above line and
        // download sendgrid-php.zip from the latest release here,
        // replacing <PATH TO> with the path to the sendgrid-php.php file,
        // which is included in the download:
        // https://github.com/sendgrid/sendgrid-php/releases

        $email = new \SendGrid\Mail\Mail(); 
        $email->setTemplateId("d-7112ff9ed94748fb8d7e8743c495510c");//SendGrid email template ID
        $email->setFrom("radcer2@seznam.cz", "Manatu Wellbeing App"); //from - to be connected with user database
        $email->setSubject("testing email from wellbeing app"); //subject
        $email->addTo("cerny.rada@gmail.com", "Wellbeing User"); //to
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
  }

}
