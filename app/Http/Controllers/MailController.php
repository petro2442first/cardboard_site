<?php

namespace App\Http\Controllers;

use App\Mail\SendContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendContactForm(Request $request) {
        Mail::to('info@dream-and-build.com')->send(new SendContactForm([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]));
    }
}
