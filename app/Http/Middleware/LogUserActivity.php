<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (Auth::check()) {
            auth()->user()->logs()->create([
                'level'   => 'info',
                'message' => 'User action',
                'context' => [
                    'method'  => $request->method(),
                    'path'    => $request->path(),
                    'fullUrl' => $request->fullUrl(),
                    'ip'      => $request->ip(),
                ],
            ]);
        }
        return $response;
    }
}
