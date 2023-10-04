<?php

namespace App\Modules\User\Notifications;

use App\Modules\User\Models\User;
use App\Modules\User\Mail\UserActivationEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class UserActivation extends Notification
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
     * @return UserActivationEmail
     */
    public function toMail()
    {
        return (new UserActivationEmail($this->user))->to($this->user->email);
    }
}
