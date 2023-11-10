<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

     public $post ; 
     
    public function __construct($post)
    {
        $this->post = $post;
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
        ->subject('New Post!')
     ->line($this->post->title)
     ->action('Read Post', url($this->post->slug))
     ->line('Nous venons de publier une nouvelle offre d\emploi qui pourrait vous interesser');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'Nous venons de publier une nouvelle offre d\emploi qui pourrait vous interesser.',
            'action' => url($this->post->slug)
        ];
    }
}
