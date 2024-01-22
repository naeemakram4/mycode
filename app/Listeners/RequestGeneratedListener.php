<?php

namespace App\Listeners;

use App\Events\RequestGeneratedEvent;
use App\Notifications\RequestGeneratedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class RequestGeneratedListener
{
    public function handle(RequestGeneratedEvent $event): void
    {
        Notification::route('mail', 'admin@houmanity.com')->notify(new RequestGeneratedNotification());
    }
}
