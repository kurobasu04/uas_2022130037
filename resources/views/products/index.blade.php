@extends('layouts.template')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center">PRODUCTS LIST</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded table-responsive">
                    <div class="card-body">
                        <!-- Wrapper -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Search -->
                            <input type="text" id="search" class="form-control me-2" placeholder="Search by Name"
                                style="width: 40%;">
                            <!-- Add Product -->
                            <a href="{{ route('products.create') }}" class="btn btn-md btn-success">ADD PRODUCT</a>
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
                                    <th scope="col" class="text-dark"><b>Name</b></th>
                                    <th scope="col" class="text-dark"><b>Description</b></th>
                                    <th scope="col" class="text-dark"><b>Price</b></th>
                                    <th scope="col" class="text-dark"><b>ACTIONS</b></th>
                                </tr>
                            </thead>
                            <tbody id="product-list">
                                @forelse ($products as $product)
                                    <tr>
                                        <th scope="row" class="text-dark">
                                            {{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</th>
                                        <td class="text-dark">{{ $product->name }}</td>
                                        <td class="text-dark">{{ $product->description }}</td>
                                        <td class="text-dark">Rp. {{ number_format($product->price) }}</td>
                                        <td class="text-center d-flex justify-content-center gap-2">
                                            <!-- Show/Detail -->
                                            <a href="{{ route('products.show', $product->id) }}"
                                                class="btn btn-sm btn-info">SHOW</a>
                                            <!-- Edit -->
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-sm btn-warning">EDIT</a>
                                            <!-- Delete -->
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                class="d-inline-block">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-dark">No Products found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $products->links('pagination::bootstrap-5') }}
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

                $('#product-list tr').filter(function() {
                    var productName = $(this).find('td:nth-child(2)').text().toLowerCase();
                    var isVisible = productName.indexOf(value) > -1;
                    $(this).toggle(isVisible);
                    if (isVisible) {
                        found = true;
                    }
                });

                if (found) {
                    $('#no-results').addClass('d-none');
                } else {
                    $('#no-results').removeClass('d-none');
                }
            });
        });
    </script>
@endsection
