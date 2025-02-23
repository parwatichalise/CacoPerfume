<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::all(); // Fetch all customers
        return view('Admin.Customer.index', compact('customers'));
    }

    public function show($id)
    {
        $customer = User::with('orders', 'addresses')->findOrFail($id);
        return view('Admin.Customer.show', compact('customer'));
    }
}
