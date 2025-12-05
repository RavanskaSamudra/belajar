<?php

namespace App\Http\Controllers;

use App\Mail\RavanskaEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {

        Mail::to("antoniussamudra2@gmail.com")->send(new RavanskaEmail());
        return "Email Telah Di kirim";
    }
}
