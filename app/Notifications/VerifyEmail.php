<?php
namespace App\Notifications;

use App\User;

use Illuminate\Bus\Queueable;

use Illuminate\Notifications\Notification;

use Illuminate\Contracts\Queue\ShouldQueue;

Use Illuminate\Notifications\Messages\MailMessage;


class VerifyEmail extends Notification

{
    use Queueable;

    public $user;





    public function _construct(User $user)

    {

        $this->user = $user;

    }


    public function via($notifiable)

    {

        return ['_mail_'];

    }

    public function toMail($notifiable)

    {

        return (new MailMessage)

                ->line('Please verify your account email to continue.')

                ->action('Verify account', route('_verify_', $this->user->token ))

                ->line('Thank you for using our application!');
    }
}


