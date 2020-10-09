<?php

namespace App\Http\Middleware;

use Closure;

class RoleCliente
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
        $role=auth()->user()->role_id;
        if($role!=2){
            return redirect()->route('welcome');
        }
        return $next($request);
    }
}
