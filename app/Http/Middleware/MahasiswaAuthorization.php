<?php

namespace App\Http\Middleware;

use Closure;

class MahasiswaAuthorization
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

        if ( ! $user->hasRole('Mahasiswa')) {
            return 'You are not mahasiswa sorry!';
        }

        return $next($request);
    }
}
