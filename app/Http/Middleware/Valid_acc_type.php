<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Valid_acc_type
{
    private $allowed_acc_types = ['admin','borrower'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $req, Closure $next)
    {   
        $acc_type = trim($req->acc_type) ?: 'borrower';
        if (!$this->is_valid_acc_type($acc_type)) return abort(403, "invalid account type!given:({$acc_type}).Valid:['borrower','admin']");
        return $next($req);
    }

    protected function is_valid_acc_type(string $acc_type)
    {
        return in_array($acc_type,$this->allowed_acc_types);
    }
}
