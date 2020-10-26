<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    function index()
    {
        return inertia('Cart/Index');
    }


    function checkOut()
    {
        return inertia('Cart/CheckOut');
    }


    function addToCart(Request $request)
    {
        $product = Product::find($request->product);

        if (!$product || $request->quantity < 1) {
            return abort(404);
        }

        $price = $product->type_sale == 'price' ? $product->price - $product->sale : $product->price * ((100 - $product->sale) / 100);

        Cart::add($product->id,$product->name,$request->quantity, $price,['poster'=>$product->poster]);

        return back();
    }
}
