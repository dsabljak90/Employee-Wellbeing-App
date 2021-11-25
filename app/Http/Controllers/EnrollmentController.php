<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\Enrollment;

class EnrollmentController extends Controller
{
    public function sendEnrollmentNotification()
    {
        $user = User::first(); //??how to call all users from database?? how to call only if manager_id=1? how to call on change state?
//email text
        $enrollmentData = [
           'body' => 'You received an new questionaire notification.',
           'enrollmentText' => 'You are now allowed to enroll.',
           'url' => url('/login'), //landing url for button
           'thankyou' => 'You have 3 days to enroll.',
        ];

        $user->notify(new Enrollment($enrollmentData));
    }

    //send notification to all user
    public function sendEnrollmentNotificationToAll()
    {
        $users = User::all(); //to all users from database - how to call only if manager_id=1? how to call on change state?
//email text
        $enrollmentData = [
           'body' => 'You received an new questionaire notification.',
           'enrollmentText' => 'You are now allowed to enroll.',
           'url' => url('/login'), //landing url for button
           'thankyou' => 'You have 3 days to enroll.',
        ];
        foreach($users as $user) {
            $user->notify(new Enrollment($enrollmentData));
        }
        
    }
}
