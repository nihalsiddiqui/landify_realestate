<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class contactAgentNotification extends Notification
{
    use Queueable;
    private $contactAgent;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contactAgent)
    {
        $this->contactAgent = $contactAgent;
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
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('I am Interested In:  ' . $this->contactAgent['category'])
            ->line('Full Name :' . ' ' . $this->contactAgent['firstname'])
//            ->line('Address :' . ' ' . $this->contactAgent['address'])
            ->line('City :' . ' ' . $this->contactAgent['city'])
            ->line('E-Mail :' . ' ' . $this->contactAgent['email'])
            ->line('Phone #:' . ' ' . $this->contactAgent['phone'])
//            ->line('Message :' . ' ' . $this->contactAgent['message'])
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
