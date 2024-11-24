<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerifyEmailWithPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $pin, $user, $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pin, $user, $password)
    {
        $this->pin = $pin;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Email Verification')
                    ->view('emails.verify_email_with_password');
    }
}
