<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\Enrollment;

class EnrollmentController extends Controller
{
    public function sendEnrollmentNotification()
    {
        $user = User::first();
//email text
        $enrollmentData = [
           'body' => 'You received an new questionaire notification.',
           'enrollmentText' => 'You are now allowed to enroll.',
           'url' => url('/login'), //landing url for button
           'thankyou' => 'You have 3 days to enroll.',
        ];

        $user->notify(new Enrollment($enrollmentData));
    }
}
