<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index() {
        $mailData = [
            'subject' => "Forgot Password",
            'title' => "Mail from Sansan",
            'body' => "This is for testing email using smtp",
        ];
        Mail::to('wsi.svillagonza@gmail.com')->send(new DemoMail($mailData));
        dd("Email send successfully.");
    }
}
