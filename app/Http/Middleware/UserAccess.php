<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    //public function handle(Request $request, Closure $next): Response
    // {
    //    return $next($request);
    // }

    public function yourMethod(Request $request)
    {
        // Define the expected user type (boolean)
        $expectedUserType = true; // or false depending on your requirement

        // Check if the user is authenticated
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }

        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the user type matches
        if ($user->type !== $expectedUserType) {
            return response()->json(['error' => 'You do not have permission to access this page.'], 403);
        }

        // Continue with your logic for authorized users
        return response()->json(['message' => 'Access granted.']);
    }
}
