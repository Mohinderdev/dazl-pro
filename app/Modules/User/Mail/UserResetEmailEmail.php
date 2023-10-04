<?php

namespace App\Modules\User\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Modules\User\Models\User;
use Illuminate\Queue\SerializesModels;

class UserResetEmailEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $code;

    /**
     * Create a new message instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->code = $user->resetPassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(config('mail.sender_emails.reset_password_email'), config('app.name'))
            ->subject('Reset Password')
            ->view('user::emails.reset_email');
    }
}
