@extends('Frontend.includes.main')

@section('content')
    <div class="py-5 mb-5 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <h1 class="mb-4 display-2 text-dark animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="mb-0 breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="py-5 container-fluid">
        <div class="container">
            <div class="mx-auto text-center section-title wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Testimonial</p>
                <h1 class="display-6">What our clients say about our tea</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="p-4 testimonial-item p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="flex-shrink-0 img-fluid" src="{{ asset('Frontend/dist/img/testimonial-1.jpg') }}"
                            alt="">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 testimonial-item p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="flex-shrink-0 img-fluid" src="{{ asset('Frontend/dist/img/testimonial-2.jpg') }}"
                            alt="">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 testimonial-item p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="flex-shrink-0 img-fluid" src="{{ asset('Frontend/dist/img/testimonial-3.jpg') }}"
                            alt="">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
