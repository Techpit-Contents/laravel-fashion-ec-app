<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart_id = Session::get('cart');
        $cart = Cart::find($cart_id);

        $total_price = 0;
        foreach ($cart->products as $product) {
            $total_price += $product->price * $product->pivot->quantity;
        }

        return view('cart.index')
            ->with('line_items', $cart->products)
            ->with('total_price', $total_price);
    }
}
