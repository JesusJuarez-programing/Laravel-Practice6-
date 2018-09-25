<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail\newMail;
use Mail;

class EmailController extends Controller
{
    public function send()
    {
        Mail::send(new newMail());
    }

    public function email()
    {
        return view('email');
    }
}
