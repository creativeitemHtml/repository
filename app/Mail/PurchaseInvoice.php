<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PurchaseInvoice extends Mailable
{
    use Queueable, SerializesModels;

    public $purchase_details, $user, $payment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($purchase_details, $user, $payment)
    {
        $this->purchase_details = $purchase_details;
        $this->user = $user;
        $this->payment = $payment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Purchase Invoice')
                    ->view('emails.purchase_invoice');
    }
}
