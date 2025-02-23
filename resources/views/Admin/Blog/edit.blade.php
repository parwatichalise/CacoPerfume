@extends('Admin.includes.main')
@section('content')
    <div class="container">
        <h2>Edit Blog Post</h2>

        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', $blog->title) }}" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control"
                    value="{{ old('slug', $blog->slug) }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="5" required>{{ old('content', $blog->content) }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                @if ($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100" class="mt-2">
                @endif
            </div>

            <div class="form-group">
                <label for="published">Published</label>
                <select id="published" name="published" class="form-control">
                    <option value="1" {{ $blog->published == 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ $blog->published == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Blog Post</button>
        </form>
    </div>
@endsection
