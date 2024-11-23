@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://unsplash.com/photos/pt_Ciwikir8/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTJ8fGxhcHRvcCUyMHN0b3JlfGVufDB8fHx8MTczMDUzMzczNnwy&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 1">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 20%; bottom: 25%;">
                        <h5 class="text-white">PRODUK SECOND TERBAIK </h5>
                        <a href="#" class="btn btn-outline-light mt-2">Beli Sekarang</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/NOfBhUOA79g/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8ODh8fG1vdG9yYmlrZSUyMHNob3dyb29tfGVufDB8fHx8MTczMDUzMDI5MXww&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 2">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 20%; bottom: 25%;">
                        <h5 class="text-white">PILIHAN PRODUK TERLENGKAP</h5>
                        <a href="#" class="btn btn-outline-light mt-2">Beli Sekarang</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/fZmhlIEWVdA/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTI4fHxjYXIlMjBzZWxsaW5nfGVufDB8fHx8MTczMDUzMDY5MXwy&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 3">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 20%; bottom: 25%;">
                        <h5 class="text-white">BARANG ANTIK INCARAN</h5>
                        <a href="#" class="btn btn-outline-light mt-2">Beli Sekarang</a>
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
    <div class="container my-5">
        <h3 class="mb-5">REKOMENDASI PRODUK MOTOR BEKAS</h3>
        <div class="row g-4">

            {{-- Produk Motor --}}
            <!-- Large Product Button -->
            <div class="row">
                <div class="col-12 mb-4">
                    <button class="btn w-100 p-4 d-flex align-items-center justify-content-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); position: relative;">
                        <div class="me-3" style="position: absolute; bottom: 10px; left: 20px; font-size: medium;">
                            <h6 class="mb-1">Harley Davidson</h6>
                            <p class="text-danger mb-0">Mulai Dari Rp. 100JT-an</p>
                        </div>
                        <img src="{{ asset('storage/images/harley-davidson-1200.png') }}"
                            alt="Harley Davidson" style="max-width: 50%; height: auto; object-fit: contain;">
                    </button>
                </div>
            </div>

            <!-- Small Product Buttons -->
            <div class="row">
                <div class="col-md-4 col-6 mb-4">
                    <button class="btn w-100 p-3 text-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                        <img src="{{ asset('storage/images/20.png') }}"
                            style="max-width: 50%; height: auto; object-fit: contain;">
                        <h6 class="mt-2">HONDA CB400SF (Super Four) 2003</h6>
                        <p class="text-danger">Mulai dari Rp80JT-an</p>
                    </button>
                </div>

                <div class="col-md-4 col-6 mb-4">
                    <button class="btn w-100 p-3 text-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                        <img src="{{ asset('storage/images/vulcan.png') }}"
                            alt="907X & CFV 100C" class="img-fluid" style="width: 50%; height: auto;">
                        <h6 class="mt-2">Kawasaki Cruiser Vulcan 650</h6>
                        <p class="text-danger">Mulai dari Rp100JT-an</p>
                    </button>
                </div>
                <div class="col-md-4 col-6 mb-4">
                    <button class="btn w-100 p-3 text-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                        <img src="{{ asset('storage/images/er6.png') }}"
                            alt="907X Anniversary Edition Kit" class="img-fluid" style="width: 50%; height: auto;">
                        <h6 class="mt-2">kawasaki ninja 650/er6N</h6>
                        <p class="text-danger">Mulai dari Rp70JT-an</p>
                    </button>
                </div>
            </div>

            <div class="text-center mt-3">
                <a href="#" class="text-decoration-none" style="color: black">More ></a>
            </div>


        </div>
    @endsection
