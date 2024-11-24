<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProjectReport extends Mailable
{
    use Queueable, SerializesModels;

    public $project_details, $user, $route;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($project_details, $user, $route)
    {
        $this->project_details = $project_details;
        $this->user = $user;
        $this->route = $route;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email_title = '[ Creativeitem - New project created #' . $this->project_details->id . ' ]';
        return $this->subject($email_title)
                    ->view('emails.project_report');
    }
}
