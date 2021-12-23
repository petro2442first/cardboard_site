<?php

namespace App\Http\Controllers;

use App\Mail\SendCheckout;
use App\Mail\SendOneClickCheckout;
use Illuminate\Http\Client\Events\RequestSending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function checkout(Request $request) {
        Mail::to('info@dream-and-build.com')->send(new SendCheckout(
            $request->phone,
            $request->name,
            $request->payment,
            $request->shipping,
            $request->area,
            $request->city,
            $request->warehouse,
            $request->items,
            $request->email ?? null));
        return 1;
    }
    public function oneClickCheckout(Request $request) {
        Mail::to('info@dream-and-build.com')->send(new SendOneClickCheckout([
            'phone' => $request->phone
        ]));
    }
}

