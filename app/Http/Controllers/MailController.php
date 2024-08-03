<?php

namespace App\Http\Controllers;

use App\Mail\MailTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function testMail(){
        Mail::to('mojtabaarab239@gmail.com')->send(new MailTest('nikola' , '355'));
        return redirect('/');
    }
}
