@extends('Admin.includes.main')

@section('content')
    <div style="margin-bottom: 1.5rem;">
        <h3><b>Add a New Category</b></h3>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form enctype="multipart/form-data" action="{{ route('admin.category.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Name<span style="color:red;">*</span></label>
                <input class="form-control" placeholder="Name" type="name" name="name" value="{{ old('name') }}" />
                @error('name')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Description<span style="color:red;">*</span></label>
                <textarea class="form-control" name="description" rows="4">{{ old('description') }}</textarea>
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
                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Unavailable</option>
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
