@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Keranjang Belanja</h2>
        @if (count($cartItems) > 0)
            <table class="table table-light table-hover">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('checkout') }}" class="btn btn-success">Checkout</a>
        @else
            <p>Keranjang Anda kosong.</p>
        @endif
    </div>
@endsection
