<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
// use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\Order;
use Cart;
use Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogues = Catalogue::where('status','Active')->get()->all();

        $new_arrivals = Product::with('stock','catalogue')->where('view_section','New_Arrival')->get()->all();
        $trendingProducts = Product::with(['unit', 'catalogue', 'category', 'brand'])->where('view_section', 'Trending_Products')->where('status', 'Active')->orderBy('created_at', 'desc')->limit(10)->get();
        $featureProducts = Product::where('view_section', 'Feature_Products')->where('status', 'Active')->orderBy('created_at', 'desc') ->take(10) ->get();

        return view('client.index')->with(compact('new_arrivals','catalogues','trendingProducts', 'featureProducts'));

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
        $orderlist = Order::where('user_id',Auth::user()->id)->get()->all();
        return view('client.account')->with(compact('orderlist'));
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

    public function checkout(Request $req)
    {
        if(Auth::check())
        {
            $this->setAmountForCheckout();
            return view('client.checkout');
        }
        else
        {
            $req->session()->put('cart','attach');
            return redirect()->route('login.website');
        }

    }

    public function setAmountForCheckout()
    {
        if(!Cart::instance('cart')->count() > 0)
        {
            session()->forget('checkout');
            return;
        }
        else{
            session()->put('checkout',[
            'discount' => 0,
            'subtotal' => Cart::instance('cart')->subtotal(),
            'total' => Cart::instance('cart')->total(),
        ]);
        }

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
