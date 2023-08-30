<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(){
        $company = "Teqnogen";
        $name = "Rasel Mahmd";
        $subject = "This is subject";
        Mail::to('rasel.m.ratan@gmail.com')->send(new TestMail($name,$company,$subject));
        return 'Sent';
    }
}
