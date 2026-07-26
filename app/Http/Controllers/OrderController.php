<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // My Orders
    public function index()
    {
        $orders = Order::latest()->get();

        return view('orders.index', compact('orders'));
    }

    // Checkout Page
    public function checkout()
    {
        $carts = Cart::with('product')->get();

        return view('orders.checkout', compact('carts'));
    }

    // Place Order
    public function placeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);

        $total = 0;

        $carts = Cart::with('product')->get();

        foreach ($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }

        Order::create([
            'customer_name' => $request->customer_name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'total_amount' => $total,
            'status' => 'Pending',
        ]);

        Cart::truncate();

        return redirect()->route('my.orders')
            ->with('success', 'Order Placed Successfully');
    }
}