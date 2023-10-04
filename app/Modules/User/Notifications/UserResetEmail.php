<?php

namespace App\Modules\User\Notifications;

use Illuminate\Bus\Queueable;
use App\Modules\User\Models\User;
use Illuminate\Notifications\Notification;
use App\Modules\User\Mail\UserResetEmailEmail;

class UserResetEmail extends Notification
{

    use Queueable;

    protected $user;

    /**
     * Create a new notification instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @return UserResetEmailEmail
     */
    public function toMail()
    {
        return (new UserResetEmailEmail($this->user))->to($this->user->email);
    }

}
