@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://unsplash.com/photos/pt_Ciwikir8/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTJ8fGxhcHRvcCUyMHN0b3JlfGVufDB8fHx8MTczMDUzMzczNnwy&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 1">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 10%; bottom: 25%;">
                        <h5 class="text-white">907X Anniversary Edition Kit</h5>
                        <a href="#" class="btn btn-outline-light mt-2">Buy Now</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/NOfBhUOA79g/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8ODh8fG1vdG9yYmlrZSUyMHNob3dyb29tfGVufDB8fHx8MTczMDUzMDI5MXww&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 2">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 10%; bottom: 25%;">
                        <h5 class="text-white">Special Edition Camera</h5>
                        <a href="#" class="btn btn-outline-light mt-2">Buy Now</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/fZmhlIEWVdA/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTI4fHxjYXIlMjBzZWxsaW5nfGVufDB8fHx8MTczMDUzMDY5MXwy&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 3">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 10%; bottom: 25%;">
                        <h5 class="text-white">Limited Edition Accessories</h5>
                        <a href="#" class="btn btn-outline-light mt-2">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
