@extends('Admin.includes.main')
@section('content')
    <h1>Customer Details</h1>

    <p><strong>Name:</strong> {{ $customer->name }}</p>
    <p><strong>Email:</strong> {{ $customer->email }}</p>

    <h3>Customer Addresses</h3>
    <ul>
        @foreach ($customer->addresses as $address)
            <li>{{ $address->address_line1 }}, {{ $address->city }}, {{ $address->state }} - {{ $address->zip_code }}</li>
        @endforeach
    </ul>
@endsection
