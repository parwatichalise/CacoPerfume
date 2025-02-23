@extends('Admin.includes.main')

@section('content')
    <div class="container">
        <h2 class="mb-4">Product List</h2>

        <a href="{{ route('admin.product.create') }}" class="mb-3 btn btn-primary">Add Product</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name ?? 'N/A' }}</td>
                        <td>{{ $product->brand->name ?? 'N/A' }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="80">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <span class="badge {{ $product->status ? 'bg-success' : 'bg-danger' }}">
                                {{ $product->status ? 'Available' : 'Unavailable' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.product.edit', $product->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No products found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
