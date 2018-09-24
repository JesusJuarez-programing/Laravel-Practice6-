<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail\sendMail;
use Mail;

class EmailController extends Controller
{
    public function send()
    {
        Mail::send(new sendMail());
    }

    public function email()
    {
        return view('email');
    }
}
