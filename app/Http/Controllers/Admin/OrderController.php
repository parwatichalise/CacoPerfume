<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();
        return view('Admin.Order.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('orderItems.product', 'payment', 'shipping')->findOrFail($id);
        return view('Admin.Order.show', compact('order'));
    }
}
