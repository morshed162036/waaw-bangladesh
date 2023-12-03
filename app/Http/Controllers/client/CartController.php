<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        //dd($cartItems);
        //return view('client.cart')->with(compact('cartItems'));
        return view('client.cart',['cartItems'=>$cartItems]);
    }
    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $price = $product->mrp;
        Cart::instance('cart')->add($product->id,$product->title,$request->quantity,$price)->associate('App\Models\Product');
        return redirect()->back()->with('message','Success! Item has been added successfully!');
    }
    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId,$request->quantity);
        return redirect()->route('cart.index');
    }
    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('cart.index');
    }
    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('cart.index');
    }

}
