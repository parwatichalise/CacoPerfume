@extends('Admin.includes.main')

@section('content')
    <div style="margin-bottom: 1.5rem;">
        <h3><b>Edit a Category</b></h3>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form enctype="" action="{{ route('admin.category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Name<span style="color:red;">*</span></label>
                <input class="form-control" placeholder="Name" type="text" name="name"
                    value="{{ old('name', $category->name) }}" />
                @error('name')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Description<span style="color:red;">*</span></label>
                <textarea class="form-control" name="description" rows="4">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Image<span style="color:red;">*</span></label>
                <input class="form-control" type="file" name="image" />
                @error('image')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Status<span style="color:red;">*</span></label>
                <select class="form-control select2" name="status">
                    <option value="1" {{ old('status', $category->status) == 1 ? 'selected' : '' }}>Available
                    </option>
                    <option value="0" {{ old('status', $category->status) == 0 ? 'selected' : '' }}>Unavailable
                    </option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection
