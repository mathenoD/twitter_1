<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Mail\PostCreatedMail;
use App\Models\User;
use App\Notifications\PostCreatedNotification;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendPostNotification
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
    public function handle(PostCreated $event): void
    {
        $post = $event->post;

        // Send an email
        Mail::to('matheno.doulya@gmail.com')->send(new PostCreatedMail($post));

        // Send a notification
        $user = User::find(Auth::id());
        $user->notify(new PostCreatedNotification($post));
        // Notification::send();
    }
}
