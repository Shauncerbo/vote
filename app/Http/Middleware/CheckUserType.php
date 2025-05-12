<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$types)
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login'); // Or abort(401)
        }
        
        if (!$user || !in_array($user->userType_id, $types)) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}