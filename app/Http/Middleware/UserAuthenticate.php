<?php

namespace App\Http\Middleware;

use App\Helper\Helper;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class UserAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            Helper::toastMsg(false, "Login required");
            return route('home');
        }
    }


    /**
     * Determine if the user is logged in to any of the given guards.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $guards
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function authenticate($request, array $guards)
    {

        if ($this->auth->guard('user')->check()) {
            return $this->auth->shouldUse('user');
        }

        $this->unauthenticated($request, ['user']);
    }
}
