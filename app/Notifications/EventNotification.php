<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventNotification extends Notification
{
    use Queueable;
    protected $event;

    /**
     * Create a new notification instance.
     */
    public function __construct(array $event)
    {
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Nouvel Événement: ' . $this->event['name'])
            ->line('Vous êtes invité à un nouvel événement!')
            ->line('Nom: ' . $this->event['name'])
            ->line('Date: ' . $this->event['date'])
            ->line('Heure: ' . $this->event['time'])
            ->line('Emplacement: ' . $this->event['location'])
            ->line('Description: ' . $this->event['description'])
            ->line('Merci d\'utiliser notre application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'event_id' => $this->event['id'],
            'event_name' => $this->event['name'],
            'event_date' => $this->event['date'],
            'event_time' => $this->event['time'],
            'event_location' => $this->event['location'],
            'event_description' => $this->event['description'],
        ];
    }
}
