<?php

namespace App\Mail;

use App\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Bienvenue extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(ContactMessage $message)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact', compact('message'));
    }
}
