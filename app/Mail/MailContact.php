<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
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
        return $this->view('mails.contact')
            ->from('namnvph08169@fpt.edu.vn', 'Nam Nguyễn')
            ->replyTo('namnv@egdgroup.com', 'Nam NV')
            ->with([
                'title' => 'Cảm ơn bạn đã liên lạc với chúng tôi',
                'content' => 'Thank you'
            ]);
    }
}
