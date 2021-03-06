<?php

namespace App\Listeners;

use App\Events\QuoteStarted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendQuoteEmail
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
     * @param  QuoteStarted  $event
     * @return void
     */
    public function handle(QuoteStarted $event)
    {
        dump('Received event quote started for ' . $event->ref);

        if ($event->getEventRecord()) return;

        dump('Sending quote started email for ' . $event->ref);
    }
}
