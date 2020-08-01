<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['name'] = $this->message->name;
        $data['department'] = $this->message->department;
        $data['login_id'] = $this->message->login_id;
        $data['password'] = $this->message->password;

        return $this->view('Emails.welcome', ['data' => $data
        ])->subject('welcome To Comsats University.')
            ->from('support@comsats.edu.pk');
    }
}
