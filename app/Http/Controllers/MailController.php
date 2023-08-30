<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ppend',
            'body' => 'This for testing email using smtp'
        ];

        Mail::to('rustamefends@gmail.com')->send(new DemoMail($mailData));

        dd('Email send successfully.');
    }
}