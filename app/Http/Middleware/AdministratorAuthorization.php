<?php

namespace App\Http\Middleware;

use Closure;

class AdministratorAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = \JWT::parseToken()->authenticate();

        if ( ! $user->hasRole('Administrator')) {
            return 'You are not admin sorry!';
        }

        return $next($request);
    }
}
