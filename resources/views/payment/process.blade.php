@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Proses Pembayaran</h2>
        <div class="row">
            <div class="col-md-8">
                <h4>Ringkasan Pesanan</h4>
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
                                <td>{{ $item['description'] }}</td>
                                <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4>Total: Rp {{ number_format($total, 0, ',', '.') }}</h4>
            </div>

            <div class="col-md-4">
                <h4>Metode Pembayaran</h4>
                <form action="{{ route('payment.complete') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="card-name">Nama di Kartu</label>
                        <input type="text" name="card-name" id="card-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="card-number">Nomor Kartu</label>
                        <input type="text" name="card-number" id="card-number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="card-expiry">Tanggal Kadaluarsa</label>
                        <input type="text" name="card-expiry" id="card-expiry" class="form-control" placeholder="MM/YY"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="card-cvc">CVC</label>
                        <input type="text" name="card-cvc" id="card-cvc" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Proses Pembayaran</button>
                    <a href="{{ route('cart.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
