<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = FacadesCart::instance('cart')->content();
        //dd($cartItems);
        //return view('client.cart')->with(compact('cartItems'));
        return view('client.cart',['cartItems'=>$cartItems]);
    }
}
