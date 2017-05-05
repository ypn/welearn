<?php

namespace Modules\Livestream\Events\Handlers;

use Modules\Livestream\Events\ChatEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChatListener
{
    /**
     * Create the event listener.
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
     * @param \Modules\Livestream\Events\ChatEvent $event
     * @return void
     */
    public function handle(\Modules\Livestream\Events\ChatEvent $event)
    {
        echo 'Handlerrr';
        //
    }
}
