@extends('Admin.includes.main')
@section('content')
    <div class="container">
        <h2 class="mb-4">Brand List</h2>

        <a href="{{ route('admin.brand.create') }}" class="mb-3 btn btn-primary">Add Brand</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($brands as $brand)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $brand->name }}</td>
                        <td><img src="{{ asset('storage/' . $brand->logo) }}" alt="Brand Logo" width="100"></td>
                        <td>
                            <span class="badge {{ $brand->status ? 'bg-success' : 'bg-danger' }}">
                                {{ $brand->status ? 'Available' : 'Unavailable' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.brand.edit', $brand->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.brand.destroy', $brand->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No brands found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
