<?php

namespace App\Listeners;

use App\Events\UserRegister;
use App\Models\Log;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogUserRegister
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
    public function handle(UserRegister $event): void
    {
        Log::create([
            "level" => "info",
            "context" => "User Register",
            "message" => "User {$event->user->id} registered",
            "user_id" => $event->user->id
        ]);
    }
}
