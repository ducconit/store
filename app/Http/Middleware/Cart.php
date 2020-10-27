<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Gloudemans\Shoppingcart\Facades\Cart as Shopping;

class Cart
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
        Inertia::share('carts',Shopping::content()->values());
        Inertia::share('priceTotal',Shopping::priceTotal());
        Inertia::share('cartCount',Shopping::count());
        return $next($request);
    }
}
