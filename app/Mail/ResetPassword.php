<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $pin, $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pin, $user)
    {
        $this->pin=$pin;
        $this->user=$user;
    }

    public function build()
    {
        return $this->subject("Reset Password")->markdown('emails.password');
    }
}
