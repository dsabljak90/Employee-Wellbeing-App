<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Enrollment extends Notification
{
    use Queueable;
    //new private property
    private $enrollmentData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($enrollmentData)
    {
        $this->enrollmentData = $enrollmentData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /** set up of the email notifications
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->from('radcer2@seznam.cz', 'Manatu')
                ->replyTo('radcer@seznam.cz', 'Most Beloved User')
                ->subject('Notification Subject')
                ->greeting('Hello!')
                ->line($this->enrollmentData['body'])
                ->action($this->enrollmentData['enrollmentText'], $this->enrollmentData['url'])
                ->line($this->enrollmentData['thankyou'])
                ->salutation('from Manatu with love');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return $this->enrollmentData;
    }
}
