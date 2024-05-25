<?php

namespace App\Jobs;

use App\Models\Auteur;
use App\Notifications\EventNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class SendEventNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $eventDetails;
    /**
     * Create a new job instance.
     */
    public function __construct(array $eventDetails)
    {
        $this->eventDetails = $eventDetails;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $auteurs = Auteur::all();
        foreach ($auteurs as $auteur) {
            Notification::send($auteur, new EventNotification($this->eventDetails));
        }
    }
}
