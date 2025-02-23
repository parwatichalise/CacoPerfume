@extends('Admin.includes.main')
@section('content')
    <div class="container">
        <h2 class="mb-4">Category List</h2>

        <a href="{{ route('admin.category.create') }}" class="mb-3 btn btn-primary">Add Category</a>

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
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td><img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" width="100"></td>
                        <td>
                            <span class="badge {{ $category->status ? 'bg-success' : 'bg-danger' }}">
                                {{ $category->status ? 'Available' : 'Unavailable' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.category.edit', $category->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No categories found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
