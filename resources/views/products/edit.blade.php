@extends('layouts.template')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <h3 class="text-center">EDIT PRODUCT</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label text-light">Product Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name', $product->name) }}" placeholder="Enter product name" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label text-light">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3"
                                    placeholder="Enter product description" required>{{ old('description', $product->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label text-light">Price</label>
                                <input type="number" name="price" id="price" class="form-control"
                                    value="{{ old('price', $product->price) }}" placeholder="Enter product price" required>
                            </div>

                            <div class="mb-3">
                                <label for="category_id" class="form-label text-light">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="" disabled>Select a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-md-12 col-sm-12">
                                <label for="avatar" class="text-light">Image</label>
                                @if ($product->avatarUrl)
                                    <div class="mb-2">
                                        <img src="{{ $product->avatarUrl }}" alt="{{ $product->name }}" class="img-fluid"
                                            style="max-width: 150px;">
                                    </div>
                                @endif
                                <input type="file" class="form-control" id="avatar" name="avatar">
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('products.index') }}" class="btn btn-secondary">BACK</a>
                                <button type="submit" class="btn btn-warning">UPDATE PRODUCT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
