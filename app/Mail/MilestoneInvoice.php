<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MilestoneInvoice extends Mailable
{
    use Queueable, SerializesModels;

    public $payment_details, $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payment_details, $user)
    {
        $this->payment_details = $payment_details;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Milestone Payment Invoice')
                    ->view('emails.milestone_invoice');
    }
}
