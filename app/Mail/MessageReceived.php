<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param string $subject Email Subject
 *     @param mixed $data    Template data
 * 
     * @return void
     */
    public function __construct()
    {
        $this->subject = $subject;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
        ->markdown('email', [
            'data' => $this->data
        ]); //view('view.name') sau ->markdown('message_received_markdown_email')
    }
}
