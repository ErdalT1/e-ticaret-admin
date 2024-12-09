<?php



namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): mixed
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            return redirect()->route('login')->with('error', 'Bu alana erişim yetkiniz yok.');
        }

        return $next($request);
    }
}

