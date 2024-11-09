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
                        <h5 class="text-white">907X Anniversary Edition Kit</h5>
                        <a href="#" class="btn btn-outline-light mt-2">Buy Now</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/NOfBhUOA79g/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8ODh8fG1vdG9yYmlrZSUyMHNob3dyb29tfGVufDB8fHx8MTczMDUzMDI5MXww&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 2">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 20%; bottom: 25%;">
                        <h5 class="text-white">Special Edition Camera</h5>
                        <a href="#" class="btn btn-outline-light mt-2">Buy Now</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://unsplash.com/photos/fZmhlIEWVdA/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTI4fHxjYXIlMjBzZWxsaW5nfGVufDB8fHx8MTczMDUzMDY5MXwy&force=true&w=1920"
                        class="d-block w-100" style="filter: brightness(0.6);" alt="Product Image 3">
                    <div class="carousel-caption text-end d-none d-md-block" style="right: 20%; bottom: 25%;">
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
    <div class="container my-5">
        <h3 class="mb-4">2ND PRODUCTS OF MOTORCYCLE</h3>
        <div class="row g-4">
            <!-- Large Product Button -->
            <div class="col-12">
                <button class="btn w-100 p-4 d-flex align-items-center justify-content-center"
                    style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); position: relative;">
                    <div class="me-3" style="position: absolute; bottom: 10px; left: 20px; font-size: medium;">
                        <h6 class="mb-1">X2D 100C Earth Explorer Limited Edition</h6>
                        <p class="text-danger mb-0">€14,999.00</p>
                    </div>
                    <img src="https://pngimg.com/uploads/harley_davidson/harley_davidson_PNG67.png"
                        alt="X2D 100C Earth Explorer" style="width: 500px; height: auto; object-fit: cover;">
                </button>
            </div>

            <!-- Small Product Buttons -->
            <div class="col-md-4 col-6">
                <button class="btn w-100 p-3 text-center"
                    style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                    <!-- Set a consistent height -->
                    <img src="https://th.bing.com/th/id/R.b45abbe65628faf5ce6d709526ececf5?rik=1%2fvCEPMuEnOdEg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fmotorbike-hd-png--1204.png&ehk=r39XPtcEQ%2b2cST2Ad2xJ1h2bnFlAcQiKFpuFdK1TnEo%3d&risl=&pid=ImgRaw&r=0"
                        alt="X2D 100C" class="img-fluid" style="width: 150px; height: auto;">
                    <h6 class="mt-2">X2D 100C</h6>
                    <p class="text-danger">€6,699.00</p>
                </button>
            </div>
            <div class="col-md-4 col-6">
                <button class="btn w-100 p-3 text-center"
                    style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                    <!-- Set a consistent height -->
                    <img src="https://th.bing.com/th/id/R.ee062001ff387ce17e1f09cb5507e519?rik=wDs%2fqUZZmUHP1A&riu=http%3a%2f%2fwww.pngall.com%2fwp-content%2fuploads%2f2016%2f05%2fMotorcycle-Free-PNG-Image.png&ehk=FRUgrk7ohxstX%2bsRT%2fF9ld3HfNUrYJZjfRHOrAznPQk%3d&risl=&pid=ImgRaw&r=0"
                        alt="907X & CFV 100C" class="img-fluid" style="width: 150px; height: auto;">
                    <h6 class="mt-2">907X & CFV 100C</h6>
                    <p class="text-danger">€7,799.00</p>
                </button>
            </div>
            <div class="col-md-4 col-6">
                <button class="btn w-100 p-3 text-center"
                    style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); height: 250px;">
                    <!-- Set a consistent height -->
                    <img src="https://pngimg.com/uploads/motorcycle/motorcycle_PNG3173.png"
                        alt="907X Anniversary Edition Kit" class="img-fluid" style="width: 150px; height: auto;">
                    <h6 class="mt-2">907X Anniversary Edition Kit</h6>
                    <p class="text-danger">€15,500.00</p>
                </button>
            </div>

        </div>
        <!-- More Button -->
        <div class="text-center mt-3">
            <a href="#" class="text-decoration-none" style="color: black">More ></a>
        </div>

    </div>
@endsection
