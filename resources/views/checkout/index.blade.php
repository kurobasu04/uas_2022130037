@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Checkout</h2>
        @if (count($cartItems) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td>
                                @if (isset($item['photo']) && $item['photo'])
                                    <img src="{{ asset('storage/' . $item['photo']) }}" alt="{{ $item['name'] }}"
                                        style="width: 100px; height: auto;">
                                @else
                                    <img src="https://placehold.co/100x100" alt="No Image Available"
                                        style="width: 100px; height: auto;">
                                @endif
                            </td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ isset($item['description']) ? $item['description'] : 'No description available' }}</td>
                            <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h4>Total: Rp {{ number_format($total, 0, ',', '.') }}</h4>
            <div class="d-flex justify-content-between">
                <a href="{{ route('cart.index') }}" class="btn btn-secondary">Batal</a>
                <a href="{{ route('payment.process') }}" class="btn btn-primary">Proses Pembayaran</a>
            </div>
        @else
            <p>Keranjang Anda kosong.</p>
        @endif
    </div>
@endsection
