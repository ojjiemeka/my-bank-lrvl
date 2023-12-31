<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // dd("here now");

        $user = Auth::user();

        // Check if the user is logged in and has the correct role
        if ($user && $user->is_admin == ($role === 'admin')) {
            return $next($request);
        }

        // If the user is not logged in or doesn't have the correct role, redirect them to the login page
        return redirect('/dashboard');
    }
        
        // if (Auth::check()) {
        //     $user = Auth::user();

        //     // Allow users to access these routes
        //     if ($user->status === 'user' && in_array($request->path(), ['dashboard', 'cards', 'payments', 'payment-exchange', 'payment-bill', 'payment-request', 'payment-transfer', 'activity', 'reports'])) {
        //         return $next($request);
        //     } 
        //     // Redirect admins to their home page
        //     elseif ($user->status === 'admin' && in_array($request->path(), ['home','accounts', 'balances', 'restrictions'])) {
        //         return $next($request);
        //     }

        //     // if (in_array($request->path(), ['home'])) {
        //     //     return $next($request);
        //     // }
        // }

        // User not logged in, redirect to login
        // return redirect('/login');
    
    
}
