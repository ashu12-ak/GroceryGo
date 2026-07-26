<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::count();
        $categories = Category::count();
        $orders = Order::count();
        $revenue = Order::sum('total_amount');

        $recentOrders = Order::latest()->take(5)->get();

        return view('dashboard', compact(
            'products',
            'categories',
            'orders',
            'revenue',
            'recentOrders'
        ));
    }
}