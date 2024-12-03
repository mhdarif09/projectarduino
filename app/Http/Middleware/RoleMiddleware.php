<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): mixed
    {
        // Pastikan pengguna login dan memiliki role yang sesuai
        if (!$request->user() || $request->user()->role !== $role) {
            abort(403, 'Unauthorized'); // Kembalikan respons 403 jika tidak memiliki role yang sesuai
        }

        return $next($request);
    }
}
