<!-- Navbar Start -->
<div class="bg-white container-fluid sticky-top">
    <div class="container">
        <nav class="py-2 bg-white navbar navbar-expand-lg navbar-light py-lg-0">
            <a href="index.html" class="navbar-brand">
                <img class="img-fluid" src="{{ asset('Frontend/dist/img/caco.png') }}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('product') }}" class="nav-item nav-link">Products</a>
                    <a href="{{ route('store') }}" class="nav-item nav-link">Store</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="m-0 dropdown-menu bg-light rounded-0">
                            <a href="{{ route('feature') }}" class="dropdown-item">Features</a>
                            <a href="{{ route('blog') }}" class="dropdown-item">Blog Article</a>
                            <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ml-20 header-right-btn d-none d-lg-block">
                    @auth
                        <a class="px-4 py-2 text-center btn btn-primary w-100 w-lg-auto" href="{{ route('dashboard') }}"
                            style="transition: background-color 0.3s; border-radius: 30px; color: #fff;">
                            Dashboard
                        </a>
                    @else
                        <a class="px-4 py-2 text-center btn btn-primary w-100 w-lg-auto" href="{{ route('login') }}"
                            style="transition: background-color 0.3s; border-radius: 30px; color: #fff;">
                            Sign in
                        </a>
                    @endauth
                </div>
                <div class="border-start ps-4 d-none d-lg-block">
                    <button type="button" class="p-0 btn btn-sm"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </nav>
    </div>
</div>
