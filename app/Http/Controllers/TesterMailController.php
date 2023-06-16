<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailVerification;

class TesterMailController extends Controller
{
    public function TesterMail(){
        Mail::to('mohamedoubida11@gmail.com')->send(new MailVerification());
        return "Send with success";
    }
}
