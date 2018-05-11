<?php

namespace App\Listeners;

use App\Events\PostPublished;
use App\Mail\Newsletter;
use App\Subscriber;

class NotifySuscribers
{

    public function __construct()
    {
        //
    }

    public function handle(PostPublished $event)
    {
        $subscribers = Subscriber::all();

        foreach ($subscribers as $subscriber) {
            \Mail::to($subscriber)->send(new Newsletter($event->post));
        }
    }
}
