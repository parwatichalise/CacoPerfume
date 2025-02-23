@extends('Admin.includes.main')

@section('content')
    <div style="margin-bottom: 1.5rem;">
        <h3><b>Edit Product</b></h3>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form enctype="multipart/form-data" action="{{ route('admin.product.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Name<span style="color:red;">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $product->name) }}" />
                @error('name')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Category<span style="color:red;">*</span></label>
                <select class="form-control select2" name="category_id">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Brand</label>
                <select class="form-control select2" name="brand_id">
                    <option value="">Select Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}"
                            {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
                @error('brand_id')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Price<span style="color:red;">*</span></label>
                <input class="form-control" type="number" step="0.01" name="price"
                    value="{{ old('price', $product->price) }}" />
                @error('price')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Stock<span style="color:red;">*</span></label>
                <input class="form-control" type="number" name="stock" value="{{ old('stock', $product->stock) }}" />
                @error('stock')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Volume</label>
                <input class="form-control" type="number" name="volume" value="{{ old('volume', $product->volume) }}" />
                @error('volume')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Current Image</label>
                @if ($product->image)
                    <div>
                        <img src="{{ asset('uploads/products/' . $product->image) }}" alt="Product Image" width="80">
                    </div>
                @endif
                <input class="form-control" type="file" name="image" />
                @error('image')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Gallery (Multiple Images)</label>
                @if ($product->gallery)
                    <div>
                        @foreach (json_decode($product->gallery) as $galleryImage)
                            <img src="{{ asset('uploads/products/' . $galleryImage) }}" alt="Gallery Image" width="50">
                        @endforeach
                    </div>
                @endif
                <input class="form-control" type="file" name="gallery[]" multiple />
                @error('gallery')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-6 form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <span class="error-message text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 form-group">
                <label>Status<span style="color:red;">*</span></label>
                <select class="form-control select2" name="status">
                    <option value="1" {{ old('status', $product->status) == 1 ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ old('status', $product->status) == 0 ? 'selected' : '' }}>Unavailable
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </div>
    </form>
@endsection
