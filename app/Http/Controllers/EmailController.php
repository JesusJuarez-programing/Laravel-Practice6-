<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'GatomanJuarez'], function($message){
            $message->to('gatoman195@gmail.com', 'Gatoman')->subject('Test Email');
            $message->from('ajuarez@ventus-tech.com', 'Marco');
        });
    }
}
