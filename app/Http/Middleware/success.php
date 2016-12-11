<?php

namespace App\Http\Middleware;

use Closure;

class success
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
        if ($request, success $next)
        {
            return redirect('posts.show');
        }
        return $next($request);
    }
}
