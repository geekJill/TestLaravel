<?php

namespace App\Handlers\Events;

use App\Events\AuthRegisterEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IdontKnowEvent
{
    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AuthRegisterEvent  $event
     * @return void
     */
    public function handle(AuthRegisterEvent $event)
    {
        //
    }
}
