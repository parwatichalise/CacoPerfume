@extends('Frontend.includes.main')

@section('content')
    <!-- Page Header Start -->
    <div class="py-5 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <h1 class="mb-4 display-2 text-dark animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="mb-0 breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="py-5 container-fluid product">
        <div class="container py-5">
            <div class="mx-auto text-center section-title wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
                <h1 class="display-6">Tea has a complex positive effect on the body</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <a href="" class="rounded d-block product-item">
                    <img src="{{ asset('Frontend/dist/img/product-1.jpg') }}" alt="">
                    <div class="p-4 mx-4 text-center bg-white shadow-sm position-relative mt-n5">
                        <h4 class="text-primary">Green Tea</h4>
                        <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                    </div>
                </a>
                <a href="" class="rounded d-block product-item">
                    <img src="{{ asset('Frontend/dist/img/product-2.jpg') }}" alt="">
                    <div class="p-4 mx-4 text-center bg-white shadow-sm position-relative mt-n5">
                        <h4 class="text-primary">Black Tea</h4>
                        <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                    </div>
                </a>
                <a href="" class="rounded d-block product-item">
                    <img src="{{ asset('Frontend/dist/img/product-3.jpg') }}" alt="">
                    <div class="p-4 mx-4 text-center bg-white shadow-sm position-relative mt-n5">
                        <h4 class="text-primary">Spiced Tea</h4>
                        <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                    </div>
                </a>
                <a href="" class="rounded d-block product-item">
                    <img src="{{ asset('Frontend/dist/img/product-4.jpg') }}" alt="">
                    <div class="p-4 mx-4 text-center bg-white shadow-sm position-relative mt-n5">
                        <h4 class="text-primary">Organic Tea</h4>
                        <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection
