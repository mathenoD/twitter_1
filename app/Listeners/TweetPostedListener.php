<?php

namespace App\Listeners;

use App\Events\Tweetposted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TweetPostedListener
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
    public function handle(Tweetposted $event): void
    {

        // add event to google calendar via api

        // Send email to participants

        // Add event to participants (Google / Microsoft) via api

        // Send notifications to participants

        // Add event in log
    }
}
