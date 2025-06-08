<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use App\Models\User;

class UpdateLastLogin
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
    public function handle(Login $event): void
    {
        // Only update last_login for User model instances
        if ($event->user instanceof User) {
            $event->user->last_login = now()->setTimezone('Asia/Manila');
            $event->user->save();
        }
    }
}
