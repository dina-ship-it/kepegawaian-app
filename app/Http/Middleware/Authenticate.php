<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Redirect user when not authenticated.
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Ubah dari route('login') → route('login.pilih')
            return route('login.pilih');
        }
    }
}
