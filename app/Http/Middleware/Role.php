<?php

namespace App\Http\Middleware;

use Closure;

class Role
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
        if ($request->user() === null) {
            return response("Insufficient Permission", 401);
        }
        
        $action = $request->route()->getAction();

        $roles = isset($action['roles'])? $action['roles']: null;
        if ($request->user()->hasAnyRole($roles) || !$roles){
            return $next($request);
        }
        return response("Insufficient Permission", 401);

    }
}
