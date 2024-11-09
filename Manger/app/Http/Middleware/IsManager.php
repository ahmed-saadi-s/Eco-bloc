<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // تحقق من ما إذا كان المستخدم مسجل دخوله
        if (Auth::check()) {
            // تحقق من دور المستخدم
            if (Auth::user()->role == 'manager') {
                // إذا كان دور المستخدم هو 'manager'، سيتم السماح بالوصول
                return $next($request);
            }
        }

        // إذا لم يكن الدور 'manager' أو لم يكن المستخدم مسجل دخوله، يتم إعادة التوجيه إلى المسار الرئيسي أو أي مسار آخر
        return redirect(abort(404));
    }
}
