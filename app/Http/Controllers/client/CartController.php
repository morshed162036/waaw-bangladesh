<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        //dd($cartItems);
        //return view('client.cart')->with(compact('cartItems'));
        return view('client.cart',['cartItems'=>$cartItems]);
    }
}
