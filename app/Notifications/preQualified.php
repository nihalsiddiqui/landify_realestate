<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class preQualified extends Notification
{
    use Queueable;
    private $preQualified;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($preQualified)
    {
        $this->preQualified = $preQualified;

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
//        dd($this->preQualified);
        return (new MailMessage)
                    ->line('Are You First Time Home Buyer :'.' '.$this->preQualified['first'])
                    ->line('Where are you in your home-buying journey? :'.' '.$this->preQualified['second'])
                    ->line('What type of a home are you looking for? :'.' '.$this->preQualified['third'])
                    ->line('What will you use this house as? :'.' '.$this->preQualified['fourth'])
                    ->line('How much of a down payment are you willing to make? :'.' '.$this->preQualified['fifth'])
                    ->line('What is your annual household income? :'.' '.$this->preQualified['sixth'])
                    ->line('What’s your credit score? (A rough estimate) :'.' '.$this->preQualified['seven'])
                    ->line('What is your source of income? :'.' '.$this->preQualified['eight'])
                    ->line('First Name :'.' '.$this->preQualified['firstname'])
                    ->line('Last Name :'.' '.$this->preQualified['lastname'])
                    ->line('Email :'.' '.$this->preQualified['email'])
                    ->line('Contact Number :'.' '.$this->preQualified['contact'])
                    ->line('your postal code/ zip code :'.' '.$this->preQualified['postal_code'])
                    ->action('Notification Action', url('/'))
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
