<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
class WishlistController extends Controller
{
    public function getWishlistedProducts()
    {
        $items = Cart::instance("wishlist")->content();
        return view('client.wishlist')->with(compact('items'));
    }
    public function addProductToWishlist(Request $request)
    {
        Cart::instance("wishlist")->add($request->id,$request->name,1,$request->price)->associate('App\Models\Product');
        return response()->json(['status' => 200,'message'=>'Success ! item successfully added to your wishlist']);
    }
    public function removeProductFromWishlist(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance("wishlist")->remove($rowId);
        return redirect()->route('wishlist.list');
    }
    public function clearWishlist()
    {
        Cart::instance("wishlist")->destroy();
        return redirect()->route("wishlist.list");
    }
    public function moveToCart(Request $request)
    {
        $item = Cart::instance('wishlist')->get($request->rowId);
        Cart::instance('wishlist')->remove($request->rowId);
        Cart::instance('cart')->add($item->model->id, $item->model->title, 1, $item->model->mrp)->associate('App\Models\Product');
        return redirect()->route('wishlist.list');
    }
}
