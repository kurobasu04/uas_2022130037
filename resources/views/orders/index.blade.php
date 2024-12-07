@extends('layouts.template')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center">ORDERS LIST</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded table-responsive">
                    <div class="card-body">
                        <!-- Wrapper -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Search -->
                            <input type="text" id="search" class="form-control me-2" placeholder="Search by User"
                                style="width: 40%;">
                            <!-- Add Order (if necessary) -->
                            <!-- <a href="{{ route('orders.create') }}" class="btn btn-md btn-success">ADD ORDER</a> -->
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success mt-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="text-dark"><b>ID</b></th>
                                    <th scope="col" class="text-dark"><b>User</b></th>
                                    <th scope="col" class="text-dark"><b>Total Price</b></th>
                                    <th scope="col" class="text-dark"><b>Status</b></th>
                                    <th scope="col" class="text-dark"><b>Date</b></th>
                                    <th scope="col" class="text-dark"><b>ACTIONS</b></th>
                                </tr>
                            </thead>
                            <tbody id="order-list">
                                @forelse ($orders as $order)
                                    <tr>
                                        <th scope="row" class="text-dark">
                                            {{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</th>
                                        <td class="text-dark">{{ $order->user->name }}</td>
                                        <td class="text-dark">Rp. {{ number_format($order->total_price) }}</td>
                                        <td class="text-dark">{{ ucfirst($order->status) }}</td>
                                        <td class="text-dark">{{ $order->created_at->format('d M Y') }}</td>
                                        <td class="text-center d-flex justify-content-center gap-2">
                                            <!-- Show/Detail -->
                                            <a href="{{ route('orders.show', $order->id) }}"
                                                class="btn btn-sm btn-info">SHOW</a>
                                            <!-- Delete -->
                                            {{-- <form action="{{ route('orders.destroy', $order->id) }}" method="POST"
                                                class="d-inline-block">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">DELETE</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-dark">No Orders found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $orders->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- jQuery search --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                var found = false;

                $('#order-list tr').filter(function() {
                    var userName = $(this).find('td:nth-child(2)').text().toLowerCase();
                    var isVisible = userName.indexOf(value) > -1;
                    $(this).toggle(isVisible);
                    if (isVisible) {
                        found = true;
                    }
                });

                if (found) {
                    $('#no-results').addClass('d-none'); // hide message
                } else {
                    $('#no-results').removeClass('d-none'); // show message
                }
            });
        });
    </script>
@endsection
