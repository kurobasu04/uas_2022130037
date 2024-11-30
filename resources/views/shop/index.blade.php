@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="text-center mb-4">Pilih Produk</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm d-flex flex-column">
                        @if ($product->photo)
                            <img src="{{ $product->photo_url }}" alt="{{ $product->name }}" class="img-fluid">
                        @else
                            <img src="https://placehold.co/200" alt="No Image Available" class="img-fluid">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-muted mb-auto">{{ $product->description }}</p>
                            <p class="card-text font-weight-bold text-primary">
                                Rp{{ number_format($product->price, 0, ',', '.') }}</p>

                            @auth
                                <form action="{{ route('cart.add', $product) }}" method="POST" class="mt-2">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="quantity" value="1" class="form-control text-center"
                                            style="max-width: 50px;" hidden />
                                        <button type="submit" class="btn btn-outline-primary"
                                            onclick="showSuccessAlert(event)">Pilih Produk</button>
                                    </div>
                                </form>
                            @endauth

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
