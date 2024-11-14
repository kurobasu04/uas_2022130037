@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="text-center mb-4">Pilih Produk</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ Storage::url($product->avatar) }}" class="card-img-top" alt="{{ $product->name }}"
                            style="height: 180px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-muted">{{ $product->description }}</p>
                            <p class="card-text font-weight-bold text-primary">
                                Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-outline-primary mt-auto">Pilih
                                Produk</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection
