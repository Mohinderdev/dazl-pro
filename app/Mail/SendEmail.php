<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    public $view;
    public $subject;

    public function __construct(array $data ,string $view ,string $subject)
    {
        $this->data = $data;
        $this->view = $view;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): SendEmail
    {
        $address = env("MAIL_FROM_ADDRESS");
        $subject = $this->subject;
        $name = env("MAIL_FROM_NAME");
        return $this->view($this->view)
            ->from($address, $name)
            ->subject($subject)
            ->with(['data' => $this->data]);
    }
}
