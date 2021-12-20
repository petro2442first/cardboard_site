<?php

namespace App\Http\Controllers;

use App\Mail\SendCheckout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function checkout(Request $request) {
        Mail::to('mrb13022001@gmail.com')->send(new SendCheckout(
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
}
