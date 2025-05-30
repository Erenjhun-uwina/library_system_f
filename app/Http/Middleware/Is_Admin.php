<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Is_Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$uri = null)
    {   
        $is_admin = session('acc_type') == 'admin';
        
        if(!$is_admin){
            if($uri == null) return abort(403,'you need admin access');
            return redirect("/$uri");
        }
        
        return $next($request);
    }
}
