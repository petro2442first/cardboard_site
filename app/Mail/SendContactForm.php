<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name, $email, $phone, $message;
    public function __construct($params)
    {
        $this->name = $params['name'] ?? 'Не вказано';
        $this->email = $params['email'] ?? 'Не вказано';
        $this->phone = $params['phone'] ?? 'Не вказано';
        $this->message = $params['message'] ?? 'Не вказано';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->from('info@dream-and-build.com')
                ->subject('Нове повідомлення з сайту Мрій та будуй')
                ->view('mail.contacts')
                ->with([
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'message' => $this->message
                ]);
    }
}
