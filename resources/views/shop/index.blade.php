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
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            onclick="decrementQty(this)">-</button>
                                        <input type="text" name="quantity" value="1" class="form-control text-center"
                                            style="max-width: 50px;" />
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            onclick="incrementQty(this)">+</button>
                                        <button type="submit" class="btn btn-outline-primary">Pilih Produk</button>
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

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {

            function decrementQty(button) {
                const input = button.nextElementSibling;
                console.log('Current Value (decrement):', input.value);
                if (parseInt(input.value) > 1) {
                    input.value = parseInt(input.value) - 1;
                }
                console.log('Updated Value (decrement):', input.value);
            }

            function incrementQty(button) {
                const input = button.previousElementSibling;
                console.log('Current Value (increment):', input.value);
                input.value = parseInt(input.value) + 1;
                console.log('Updated Value (increment):', input.value);
            }

            window.decrementQty = decrementQty;
            window.incrementQty = incrementQty;

            console.log('decrementQty and incrementQty functions are attached to the window object.');
        });
    </script>
@endsection
