<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            return $next($request);
        }

         // ✅ Log unauthenticated access
         Log::warning('Unauthenticated access attempt', [
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'user_agent' => $request->userAgent()
        ]);

        return redirect('/../../../../../login.php');
    }
}
