@extends('Admin.includes.main')
@section('content')
    <h1>Order Details</h1>

    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer:</strong> {{ $order->user->name }}</p>
    <p><strong>Total Amount:</strong> ${{ $order->total_amount }}</p>
    <p><strong>Status:</strong> {{ $order->status }}</p>

    <h3>Order Items</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
