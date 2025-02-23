@extends('Frontend.includes.main')

@section('content')
    <div class="py-5 mb-5 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <h1 class="mb-4 display-2 text-dark animated slideInDown">Tea Store</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="mb-0 breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Store</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="py-5 container-xxl">
        <div class="container">
            <div class="mx-auto text-center section-title wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center store-item position-relative">
                        <img class="img-fluid" src="{{ asset('Frontend/dist/img/store-product-1.jpg') }}" alt="">
                        <div class="p-4">
                            <div class="mb-3 text-center">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Nature close tea</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="px-4 py-2 m-2 btn btn-primary rounded-pill">More Detail <i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="px-4 py-2 m-2 btn btn-dark rounded-pill">Add to Cart <i
                                    class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center store-item position-relative">
                        <img class="img-fluid" src="{{ asset('Frontend/dist/img/store-product-2.jpg') }}" alt="">
                        <div class="p-4">
                            <div class="mb-3 text-center">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Green tea tulsi</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="px-4 py-2 m-2 btn btn-primary rounded-pill">More Detail <i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="px-4 py-2 m-2 btn btn-dark rounded-pill">Add to Cart <i
                                    class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center store-item position-relative">
                        <img class="img-fluid" src="{{ asset('Frontend/dist/img/store-product-3.jpg') }}" alt="">
                        <div class="p-4">
                            <div class="mb-3 text-center">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Instant tea premix</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="px-4 py-2 m-2 btn btn-primary rounded-pill">More Detail <i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="px-4 py-2 m-2 btn btn-dark rounded-pill">Add to Cart <i
                                    class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="px-5 py-3 btn btn-primary rounded-pill">View More Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
