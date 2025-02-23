@extends('Admin.includes.main')
@section('content')
    <h1>Shipping & Delivery Management</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Courier Service</th>
                <th>Tracking Number</th>
                <th>Estimated Delivery</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shippings as $shipping)
                <tr>
                    <td>{{ $shipping->order_id }}</td>
                    <td>{{ $shipping->courier_service }}</td>
                    <td>{{ $shipping->tracking_number }}</td>
                    <td>{{ $shipping->estimated_delivery }}</td>
                    <td>{{ $shipping->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
