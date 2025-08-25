<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsSelf
{
    public function handle(Request $request, Closure $next)
    {
        $routeUserId = $request->route('id') ?? $request->route('user_id') ?? $request->route('user');
        if (Auth::check() && Auth::id() == $routeUserId) {
            return $next($request);
        }
        abort(403, 'Acesso não autorizado.');
    }
}
