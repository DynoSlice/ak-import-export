<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class sendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param array $contact
     */
    public function __construct(Array $contact)
    {
        $this->contact = $contact;
        $this->message = (object) array('image' => '/img/logoAK.png');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('service-clientele@ak-import-export.com', 'AK Import-Export')
            ->subject('Confirmation réception de votre demande')
            ->view('mail.mail');
    }
}
