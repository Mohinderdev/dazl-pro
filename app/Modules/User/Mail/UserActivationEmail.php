<?php

namespace App\Modules\User\Mail;

use App\Modules\User\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserActivationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(config('mail.sender_emails.welcome_email'), config('app.name'))
            ->subject('Welcome to ALAQAR platform')
            ->view('user::emails.welcome_email');
    }
}
