 <!-- Carousel Start -->
 <div class="px-0 mb-5 container-fluid">
     <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img class="w-100" src="{{ asset('Frontend/dist/img/video-item.jpg') }}" alt="Image">
                 <div class="carousel-caption">
                     <div class="container">
                         <div class="row justify-content-center">
                             <div class="text-center col-lg-7">
                                 <p class="text-white fs-4 animated zoomIn">Welcome to <strong
                                         class="text-dark">CACO</strong></p>
                                 <h1 class="mb-4 display-1 text-dark animated zoomIn">Perfumes</h1>
                                 <a href="" class="px-5 py-3 btn btn-light rounded-pill animated zoomIn">Explore
                                     More</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <img class="w-100" src="{{ asset('Frontend/dist/img/video-item.jpg') }}" alt="Image">
                 <div class="carousel-caption">
                     <div class="container">
                         <div class="row justify-content-center">
                             <div class="text-center col-lg-7">
                                 <p class="text-white fs-4 animated zoomIn">Welcome to <strong
                                         class="text-dark">CACO</strong></p>
                                 <h1 class="mb-4 display-1 text-dark animated zoomIn">Perfumes</h1>
                                 <a href="" class="px-5 py-3 btn btn-light rounded-pill animated zoomIn">Explore
                                     More</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
 </div>
 <!-- Carousel End -->


 <!-- About Start -->
 <div class="py-5 container-xxl">
     <div class="container">
         <div class="row g-5">
             <div class="col-lg-6">
                 <div class="row g-3">
                     <div class="col-6 text-end">
                         <img class="mb-3 bg-white img-fluid w-100 wow fadeIn" data-wow-delay="0.1s"
                             src="{{ asset('Frontend/dist/img/banner-image1.png') }}" alt="">
                         <img class="bg-white img-fluid w-50 wow fadeIn" data-wow-delay="0.2s"
                             src="{{ asset('Frontend/dist/img/product-item2.jpg') }}" alt="">
                     </div>
                     <div class="col-6">
                         <img class="mb-3 bg-white img-fluid w-50 wow fadeIn" data-wow-delay="0.3s"
                             src="{{ asset('Frontend/dist/img/product-item1.jpg') }}" alt="">
                         <img class="bg-white img-fluid w-100 wow fadeIn" data-wow-delay="0.4s"
                             src="{{ asset('Frontend/dist/img/product-item3.jpg') }}" alt="">
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                 <div class="section-title">
                     <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                     <h1 class="display-6">The success history of CACO perfumes</h1>
                 </div>
                 <div class="mb-4 row g-3">
                     <div class="col-sm-4">
                         <img class="bg-white img-fluid w-100" src="{{ asset('Frontend/dist/img/banner-image1.png') }}"
                             alt="">
                     </div>
                     <div class="col-sm-8">
                         <h5>Our perfume is one of the most popular perfumes in the world</h5>
                         <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                             diam et eos. Clita erat ipsum et lorem et sit</p>
                     </div>
                 </div>
                 <div class="mb-4 border-top"></div>
                 <div class="row g-3">
                     <div class="col-sm-8">
                         <h5>Daily use of a bit of perfume spray is good for your health</h5>
                         <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                             diam et eos. Clita erat ipsum et lorem et sit</p>
                     </div>
                     <div class="col-sm-4">
                         <img class="bg-white img-fluid w-100" src="{{ asset('Frontend/dist/img/product-item1.jpg') }}"
                             alt="">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- About End -->


 <!-- Products Start -->
 <div class="py-5 my-5 container-fluid product">
     <div class="container py-5">
         <div class="mx-auto text-center section-title wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
             <h1 class="display-6">Perfume has a complex positive effect on the body</h1>
         </div>
         <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
             <a href="" class="rounded d-block product-item">
                 <img src="{{ asset('Frontend/dist/img/product-item1.jpg') }}" alt="">
                 <div class="p-4 mx-4 text-center bg-white shadow-sm position-relative mt-n5">
                     <h4 class="text-primary">Velour Essence</h4>
                     <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                 </div>
             </a>
             <a href="" class="rounded d-block product-item">
                 <img src="{{ asset('Frontend/dist/img/product-item2.jpg') }}" alt="">
                 <div class="p-4 mx-4 text-center bg-white shadow-sm position-relative mt-n5">
                     <h4 class="text-primary">Royal Aura</h4>
                     <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                 </div>
             </a>
             <a href="" class="rounded d-block product-item">
                 <img src="{{ asset('Frontend/dist/img/product-item3.jpg') }}" alt="">
                 <div class="p-4 mx-4 text-center bg-white shadow-sm position-relative mt-n5">
                     <h4 class="text-primary">Ethereal Bloom</h4>
                     <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                 </div>
             </a>
             <a href="" class="rounded d-block product-item">
                 <img src="{{ asset('Frontend/dist/img/product-item2.jpg') }}" alt="">
                 <div class="p-4 mx-4 text-center bg-white shadow-sm position-relative mt-n5">
                     <h4 class="text-primary">Majestic Noir</h4>
                     <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                 </div>
             </a>
         </div>
     </div>
 </div>
 <!-- Products End -->


 <!-- Article Start -->
 <div class="py-5 container-xxl">
     <div class="container">
         <div class="row g-5">
             <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                 <img class="img-fluid" src="{{ asset('Frontend/dist/img/banner-image1.png') }}" alt="">
             </div>
             <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                 <div class="section-title">
                     <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                     <h1 class="display-6">The history of perfume in the world</h1>
                 </div>
                 <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                     eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                 </p>
                 <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                     sit, sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
                 <a href="" class="px-5 py-3 btn btn-primary rounded-pill">Read More</a>
             </div>
         </div>
     </div>
 </div>
 <!-- Article End -->


 <!-- Video Start -->
 <div class="my-5 container-fluid video">
     <div class="container">
         <div class="row g-0">
             <div class="py-5 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                 <div class="py-5">
                     <h1 class="mb-4 display-6">Perfume is for<span class="text-white"><span
                                 class="text-white">beauty</span></h1>
                     <h5 class="mb-5 text-white fw-normal lh-base fst-italic">Tempor erat elitr rebum at clita. Diam
                         dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</h5>
                     <div class="mb-5 row g-4">
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center">
                                 <div class="flex-shrink-0 bg-white btn-lg-square text-primary rounded-circle me-3">
                                     <i class="fa fa-check"></i>
                                 </div>
                                 <span class="text-dark">Great perfume</span>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center">
                                 <div class="flex-shrink-0 bg-white btn-lg-square text-primary rounded-circle me-3">
                                     <i class="fa fa-check"></i>
                                 </div>
                                 <span class="text-dark">Spices & additives</span>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center">
                                 <div class="flex-shrink-0 bg-white btn-lg-square text-primary rounded-circle me-3">
                                     <i class="fa fa-check"></i>
                                 </div>
                                 <span class="text-dark">Unique accessories</span>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center">
                                 <div class="flex-shrink-0 bg-white btn-lg-square text-primary rounded-circle me-3">
                                     <i class="fa fa-check"></i>
                                 </div>
                                 <span class="text-dark"> beauty</span>
                             </div>
                         </div>
                     </div>
                     <a class="px-5 py-3 btn btn-light rounded-pill" href="">Explore More</a>
                 </div>
             </div>
             <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                 <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                     <button type="button" class="btn-play" data-bs-toggle="modal"
                         data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                         <span></span>
                     </button>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Video End -->


 <!-- Video Modal Start -->
 <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content rounded-0">
             <div class="modal-header">
                 <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- 16:9 aspect ratio -->
                 <div class="ratio ratio-16x9">
                     <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                         allowscriptaccess="always" allow="autoplay"></iframe>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Video Modal End -->


 <!-- Store Start -->
 <div class="py-5 container-xxl">
     <div class="container">
         <div class="mx-auto text-center section-title wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
             <h1 class="display-6">Want to stay fragrant? Choose your perfume</h1>
         </div>
         <div class="row g-4">
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="text-center store-item position-relative">
                     <img class="img-fluid" src="{{ asset('Frontend/dist/img/product-item1.jpg') }}" alt="">
                     <div class="p-4">
                         <div class="mb-3 text-center">
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                         </div>
                         <h4 class="mb-3">Floral & Feminine Perfumes</h4>
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
                     <img class="img-fluid" src="{{ asset('Frontend/dist/img/product-item2.jpg') }}" alt="">
                     <div class="p-4">
                         <div class="mb-3 text-center">
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                         </div>
                         <h4 class="mb-3">Luxury & Elegant Perfumes</h4>
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
                     <img class="img-fluid" src="{{ asset('Frontend/dist/img/product-item3.jpg') }}" alt="">
                     <div class="p-4">
                         <div class="mb-3 text-center">
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                         </div>
                         <h4 class="mb-3">Woody & Masculine Perfumes</h4>
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
 <!-- Store End -->


 <!-- Testimonial Start -->
 <div class="py-5 my-5 container-fluid testimonial">
     <div class="container py-5">
         <div class="mx-auto text-center section-title wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             <p class="text-white fs-5 fw-medium fst-italic">Testimonial</p>
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
 <!-- Testimonial End -->


 <!-- Contact Start -->
 <div class="py-5 container-xxl contact">
     <div class="container">
         <div class="mx-auto text-center section-title wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
             <h1 class="display-6">Contact us right now</h1>
         </div>
         <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
             <div class="col-lg-8">
                 <p class="mb-5 text-center">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum
                     et lorem et sit, sed stet lorem sit clita duo justo Diam dolor diam ipsum sit. Aliqu diam amet diam
                     et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                 <div class="row g-5">
                     <div class="text-center col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                         <div class="mx-auto mb-3 btn-square">
                             <i class="text-white fa fa-envelope fa-2x"></i>
                         </div>
                         <p class="mb-2">info@example.com</p>
                         <p class="mb-0">support@example.com</p>
                     </div>
                     <div class="text-center col-md-4 wow fadeInUp" data-wow-delay="0.4s">
                         <div class="mx-auto mb-3 btn-square">
                             <i class="text-white fa fa-phone fa-2x"></i>
                         </div>
                         <p class="mb-2">+012 345 67890</p>
                         <p class="mb-0">+012 345 67890</p>
                     </div>
                     <div class="text-center col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                         <div class="mx-auto mb-3 btn-square">
                             <i class="text-white fa fa-map-marker-alt fa-2x"></i>
                         </div>
                         <p class="mb-2">123 Street</p>
                         <p class="mb-0">New York, USA</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Contact Start -->
