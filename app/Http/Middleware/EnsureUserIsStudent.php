<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsStudent
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
      if (Auth::user()->role_id == 1) {
        return $next($request);
      }
      return abort(401);
      // return redirect(route('admin.dashboard'))->with('warning', 'Halaman hanya dapat diakses oleh management.');
    }
}
