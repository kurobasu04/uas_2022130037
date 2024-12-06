@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="card text-light">
            <div class="card-header">
                <h1>Detail Produk</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        @if ($product->photo)
                            <img src="{{ $product->photo_url }}" alt="{{ $product->name }}" class="img-fluid">
                        @else
                            <img src="https://placehold.co/200" alt="No Image Available" class="img-fluid">
                        @endif
                    </div>
                    <div class="col-md-8 text-start">
                        <h3>#{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }} {{ $product->name }}</h3>
                        <p><strong>Description:</strong> {{ $product->description }}</p>
                        <p><strong>Price:</strong> Rp.{{ number_format($product->price, 2) }}</p>
                        <p><strong>Category ID:</strong> {{ $product->category_id }}</p>
                        <p><strong>Created At:</strong>
                            {{ $product->created_at ? $product->created_at->format('d-m-Y H:i') : 'N/A' }}</p>
                        <p><strong>Updated At:</strong>
                            {{ $product->updated_at ? $product->updated_at->format('d-m-Y H:i') : 'N/A' }}</p>
                    </div>
                </div>

                <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4">Back to List</a>
            </div>
        </div>
    </div>
@endsection
