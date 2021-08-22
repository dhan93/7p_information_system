<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsManagement
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      // return Auth::user()->role;
      if (Auth::user()->role_id == 2) {
        return $next($request);
      }
      return abort(401);
      // return redirect(route('dashboard'))->with('warning', 'Halaman hanya dapat diakses oleh management.');
    }
}
