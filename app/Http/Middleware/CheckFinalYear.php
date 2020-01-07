<?php

namespace App\Http\Middleware;

use Closure;

class CheckFinalYear
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
        if ($request->current_semester >= 6) {
            dd('Final Dah');
            //return redirect('graduation');
        }

        return $next($request);
    }
}

