<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
class OrderController extends Controller
{
    public function placeOrder(Request $req)
    {
        //dd($req->all());
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        // $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->status= 'ordered';
        if(isset($req->is_shipping_different))
        {
            $order->is_shipping_different = true;
        }
        else{
            $order->is_shipping_different = false;
        }
        $order->save();

        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }
        if(isset($req->is_shipping_different))
        {
            $shipping = new Shipping();
            $shipping->order_id = $order->id;
            $shipping->mobile = $req->mobile;
            $shipping->line1 = $req->line1;
            $shipping->line2 = $req->line2;
            $shipping->city = $req->city;
            $shipping->save();
        }
        if($req->paymentMethod == 'cod')
        {
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->order_id = $order->id;
            $transaction->mode = 'cod';
            $transaction->status = 'pending';
            $transaction->save();
        }

        Cart::instance('cart')->destroy();
        session()->forget('checkout');
        return redirect()->route('client.home');

    }
    public function orderTable()
    {
        $orderlist = Order::where('user_id',Auth::user()->id)->get()->all();
        return view('server.order.index')->with(compact('orderlist'));
    }
}
