@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="card text-light">
            <div class="card-header">
                <h1>Detail Pesanan</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-start">
                        <h3>#{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }} {{ $order->user->name }}</h3>
                        <p><strong>Total Harga:</strong> Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
                        <p><strong>Tanggal Pesanan:</strong>
                            {{ $order->created_at ? $order->created_at->format('d-m-Y H:i') : 'N/A' }}</p>
                        <p><strong>Terakhir Diperbarui:</strong>
                            {{ $order->updated_at ? $order->updated_at->format('d-m-Y H:i') : 'N/A' }}</p>
                    </div>
                </div>

                <hr>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h4>Detail Item</h4>
                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="text-dark"><b>ID</b></th>
                                    <th scope="col" class="text-dark"><b>Nama Produk</b></th>
                                    <th scope="col" class="text-dark"><b>Quantity</b></th>
                                    <th scope="col" class="text-dark"><b>Harga</b></th>
                                    <th scope="col" class="text-dark"><b>Subtotal</b></th>
                                </tr>
                            </thead>
                            <tbody id="order-item-list">
                                @foreach ($order->items as $item)
                                    <tr>
                                        <th scope="row" class="text-dark">
                                            {{ str_pad($item->id, 4, '0', STR_PAD_LEFT) }}</th>
                                        <td class="text-dark">{{ $item->product->name }}</td>
                                        <td class="text-dark">{{ $item->quantity }}</td>
                                        <td class="text-dark">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                        <td class="text-dark">Rp
                                            {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="{{ route('orders.index') }}" class="btn btn-secondary mt-4">Back to List</a>
            </div>
        </div>
    </div>
@endsection
