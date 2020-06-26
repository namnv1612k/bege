<?php

namespace App\Http\Middleware;

use Closure;

class PaymentCheckout
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
        $cart = session(CART);
        if ($cart != null) {
            return $next($request);
        }
        return redirect()->route('cart');
    }
}
