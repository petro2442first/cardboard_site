<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCheckout extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $phone, $name, $payment, $shipping, $area, $city, $warehouse, $email, $items;
    public function __construct($phone, $name, $payment, $shipping, $area, $city, $warehouse, $items, $email = "Не вказано")
    {
        $this->phone = $phone;
        $this->name = $name;
        $this->payment = $payment;
        $this->shipping = $shipping;
        $this->area = $area;
        $this->city = $city;
        $this->warehouse = $warehouse;
        $this->email = $email;
        $this->items = $items;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('info@tossa-group.com')
        ->subject('Нове замовлення')
        ->view('mail.checkout')
        ->with([
            'phone' => $this->phone,
            'name' => $this->name,
            'payment' => $this->payment,
            'shipping' => $this->shipping,
            'area' => $this->area,
            'city' => $this->city,
            'warehouse' => $this->warehouse,
            'email' => $this->email,
            'items' => $this->items,
        ]);
    }
}
