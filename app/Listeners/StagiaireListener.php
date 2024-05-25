<?php

namespace App\Listeners;

use App\Events\StagiaireCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\alert;

class StagiaireListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StagiaireCreated $event): void
    {
        Session::flash('success', 'Stagiaire ajouté avec succès');
    }
}
