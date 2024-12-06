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
                        <a href="/shop" class="btn btn-outline-light mt-2">Beli Sekarang</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/NOfBhUOA79g/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8ODh8fG1vdG9yYmlrZSUyMHNob3dyb29tfGVufDB8fHx8MTczMDUzMDI5MXww&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 2">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 20%; bottom: 25%;">
                        <h5 class="text-white">PILIHAN PRODUK TERLENGKAP</h5>
                        <a href="/shop" class="btn btn-outline-light mt-2">Beli Sekarang</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/fZmhlIEWVdA/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTI4fHxjYXIlMjBzZWxsaW5nfGVufDB8fHx8MTczMDUzMDY5MXwy&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 3">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 20%; bottom: 25%;">
                        <h5 class="text-white">BARANG ANTIK INCARAN</h5>
                        <a href="/shop" class="btn btn-outline-light mt-2">Beli Sekarang</a>
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
                        <img src="{{ asset('storage/images/harley-davidson-1200.png') }}" alt="Harley Davidson"
                            style="max-width: 50%; height: auto; object-fit: contain;">
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
                        <img src="https://content2.kawasaki.com/ContentStorage/KMC/Products/8807/fcdcc356-3234-4a80-bfc2-c6edf0647c70.png?w=767"
                            alt="907X & CFV 100C" class="img-fluid" style="width: 50%; height: auto;">
                        <h6 class="mt-2">Kawasaki Cruiser Vulcan 650</h6>
                        <p class="text-danger">Mulai dari Rp100JT-an</p>
                    </button>
                </div>
                <div class="col-md-4 col-6 mb-4">
                    <button class="btn w-100 p-3 text-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                        <img src="https://storage.kawasaki.eu/public/kawasaki.eu/en-EU/model/12ER650F_44SYELDRF2CG_C_001.png"
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

        <h3 class="mb-5 my-5">REKOMENDASI PRODUK LAPTOP BEKAS</h3>
        <div class="row g-4">

            {{-- Produk Laptop --}}
            <!-- Large Product Button -->
            <div class="row">
                <div class="col-12 mb-4">
                    <button class="btn w-100 p-4 d-flex align-items-center justify-content-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); position: relative;">
                        <div class="me-3" style="position: absolute; bottom: 10px; left: 20px; font-size: medium;">
                            <h6 class="mb-1">Lenovo ThinkPad X270</h6>
                            <p class="text-danger mb-0">Mulai Dari Rp 1.750.000</p>
                        </div>
                        <img src="https://www.lenovo.com/medias/lenovo-laptop-thinkpad-x270-front.png?context=bWFzdGVyfHJvb3R8MTc2NTR8aW1hZ2UvcG5nfGhhZi9oMzEvOTM5NjQ5NTU4MTIxNC5wbmd8NDVhOGY2ODcyNzQ0MGM0MjY1ZWNhZDM2MTJiYTc5ZGU2MmVjMDA2M2JkMmEwOGU5YTA1YmE1YzhiZWU3OTQzZQ"
                            alt="Harley Davidson" style="max-width: 50%; height: auto; object-fit: contain;">
                    </button>
                </div>
            </div>

            <!-- Small Product Buttons -->
            <div class="row">
                <div class="col-md-4 col-6 mb-4">
                    <button class="btn w-100 p-3 text-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                        <img src="https://www.lenovo.com/medias/lenovo-thinkpad-v15-amd-gallery.png?context=bWFzdGVyfHJvb3R8MzQ3NjE0fGltYWdlL3BuZ3xoODYvaGFiLzE0MzI1NjM0NDY1ODIyLnBuZ3xhYmU4ODI3ODEzODE1OTFkMTQ1Y2U1M2EyOGQwZTM3NTQ2OWIzOGZlZjU4OTMwNmUyNWE0ZmE4NDQ3ZjRhODIz"
                            style="max-width: 50%; height: auto; object-fit: contain;">
                        <h6 class="mt-2">Lenovo V15</h6>
                        <p class="text-danger">Mulai dari Rp 4.700.000</p>
                    </button>
                </div>

                <div class="col-md-4 col-6 mb-4">
                    <button class="btn w-100 p-3 text-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                        <img src="https://cdn.alza.sk/Foto/LegendFoto/photos/NA536u4_2.png"
                            alt="907X & CFV 100C" class="img-fluid" style="width: 50%; height: auto;">
                        <h6 class="mt-2">ASUS M415</h6>
                        <p class="text-danger">Mulai dari Rp 6.107.000</p>
                    </button>
                </div>
                <div class="col-md-4 col-6 mb-4">
                    <button class="btn w-100 p-3 text-center"
                        style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                        <img src="https://www.01net.it/wp-content/uploads/sites/14/2024/01/Aspire-Go-15-AG15-31P-03.png" alt="907X Anniversary Edition Kit"
                            class="img-fluid" style="width: 50%; height: auto;">
                        <h6 class="mt-2">kawasaki ninja 650/er6N</h6>
                        <p class="text-danger">Mulai dari Rp70JT-an</p>
                    </button>
                </div>
            </div>

            <div class="text-center mt-3">
                <a href="#" class="text-decoration-none" style="color: black">More ></a>
            </div>


        </div>
    </div>
@endsection
