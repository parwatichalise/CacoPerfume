@extends('Admin.includes.main')
@section('content')
    <h1>Blog Management</h1>
    <a href="{{ route('admin.blogs.create') }}" class="mb-3 btn btn-primary">Add Blog</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Published</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->published ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
