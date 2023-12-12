<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class hasRole
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        foreach ($role as $r) {
            if (Auth::user()->hasroles->contains('name', $r)) {
                return $next($request);
            }
        }
        return \response()->json([
            'message' => 'You are not allowed to access this page'
        ], 403);
    }
}
