<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')->get();

        return view('cart.index', compact('carts'));
    }

    public function store($id)
    {
        $product = Product::findOrFail($id);

        Cart::create([
            'product_id' => $product->id,
            'quantity' => 1,
        ]);

        return redirect()->route('cart.index')
            ->with('success', 'Product Added To Cart Successfully');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return redirect()->route('cart.index')
            ->with('success', 'Product Removed Successfully');
    }
}
