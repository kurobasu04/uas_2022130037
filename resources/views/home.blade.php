@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://unsplash.com/photos/49LJOEQL9_8/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8Mnx8Y2FtZXJhJTIwbGFuZHNjYXBlfGVufDB8fHx8MTczMDUyOTgxM3ww&force=true&w=640"
                            class="d-block w-100" alt="Elegant Design">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>NEW ARRIVALS</h5>
                            <p>Night Spring Dresses</p>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://unsplash.com/photos/NOfBhUOA79g/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8ODh8fG1vdG9yYmlrZSUyMHNob3dyb29tfGVufDB8fHx8MTczMDUzMDI5MXww&force=true&w=1920"
                            class="d-block w-100" alt="Spring Fashion">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>SEASONAL OFFERS</h5>
                            <p>Spring Fashion Collection</p>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://unsplash.com/photos/fZmhlIEWVdA/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTI4fHxjYXIlMjBzZWxsaW5nfGVufDB8fHx8MTczMDUzMDY5MXwy&force=true&w=1920"
                            class="d-block w-100" alt="Lifestyle">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>LIFESTYLE INSPIRATION</h5>
                            <p>Curated Collection</p>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Product Categories -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center">Shop by Category</h2>
                <div class="row">
                    <!-- Category Card -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('path_to_category_image') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Category Name</h5>
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for more categories -->
                </div>
            </div>
        </div>

        <!-- Featured Products -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center">Featured Products</h2>
                <div class="row">
                    <!-- Product Card -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('path_to_product_image') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">$ Product Price</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for more products -->
                </div>
            </div>
        </div>
    </div>
@endsection
