<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Catalogue;
use Cart;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogues = Catalogue::where('status','Active')->get()->all();
        $new_arrivals = Product::with('stock','catalogue')->where('view_section','New_Arrival')->get()->all();
        return view('client.index')->with(compact('new_arrivals','catalogues'));
    }

    public function about()
    {
        return view('client.about');
    }

    public function login_website()
    {
        return view('client.login');
    }
    public function account()
    {
        return view('client.account');
    }

    public function shop()
    {
        return view('client.shop');
    }

    public function product_details(string $id)
    {
        $product = Product::with('category')->findorFail($id);
        return view('client.product_details')->with(compact('product'));
    }

    public function wishlist()
    {
        // return view('client.wishlist');
        return redirect()->route("wishlist.list");
    }

    public function cart()
    {
        return view('client.cart');
    }

    public function checkout()
    {
        return view('client.checkout');
    }

    public function contuct()
    {
        return view('client.contuct');
    }
    public function getCartAndWishlistCount()
    {
        $cartCount = Cart::instance("cart")->content()->count();
        $wishlistCount = Cart::instance("wishlist")->content()->count();
        return response()->json(['status'=>200,'cartCount'=>$cartCount,'wishlistCount'=>$wishlistCount]);
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
