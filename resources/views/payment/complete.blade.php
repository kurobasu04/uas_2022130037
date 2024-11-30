@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Pembelian Berhasil</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4>Rincian Pembelian</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
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
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['description'] ?? 'No description available' }}</td>
                                <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4>Total: Rp {{ number_format($total, 0, ',', '.') }}</h4>
                <div class="alert alert-success mt-4">
                    Terima kasih telah melakukan pembelian! Pesanan Anda sedang diproses dan akan segera dikirim.
                </div>
                <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
@endsection
