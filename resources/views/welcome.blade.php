@extends('layouts.app')


<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        @section('content')
        <!-- ========= Header ========= -->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">tiptap.</div>
                <div class="masthead-heading">
                    <p>for all your </p>
                    </p>storage needs.</p>
                </div>
                <button class="btn btn-primary btn-xl text-uppercase">
                
                    <a href="{{route('storage')}}" style="color:white; padding:0;">Book Now</a>
                </button>
            </div>
        </header>
        <!-- ========= End Header ========= -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="column">
                    <div class="section-title">
                        <h2>Our Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos -delay="100">
                            <div class="card ms-auto me-auto" style="width: 18rem">
                                <img class="card-img-top" src="{{ url('img/book.png') }}" alt="Booking card" />
                                <div class="card-body">
                                    <p class="card-title">
                                        Booking
                                    </p>
                                    <p class="card-text">
                                        Book and rent a storage room to store your goods.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card ms-auto me-auto" style="width: 18rem">
                                <img class="card-img-top" src="{{ url('img/pickup.png') }}" alt="Booking card" />
                                <div class="card-body">
                                    <p class="card-title">
                                        Pick Up
                                    </p>
                                    <p class="card-text">
                                        Need help bringing your goods to your rented storage? We'll do it for you.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card ms-auto me-auto" style="width: 18rem">
                            <img class="card-img-top" src="{{ url('img/service.png') }}" alt="Care card" />
                            <div class="card-body">
                                <p class="card-title">
                                    Special Care
                                </p>
                                <p class="card-text">
                                    We ensure you that your goods will be given exclusive care.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End Services Section ======= -->

        <!-- ======= Book Now Section ======= -->
        <section class="book-section" id="services">
            <div class="container">
                <div class="text-center">
                    <div class="section-title">
                        <h2>Here’s how the self-storage process works</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-3x">
                            <!-- <i class="fas fa-circle fa-stack-2x"></i> -->
                            <i class="fas fa-shopping-cart fa-stack-1x"></i>
                        </span>
                        <h4 class="my-3">Schedule</h4>
                        <p class="text-muted">Pick a date & duration of storage</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-3x">
                            <!-- <i class="fas fa-circle fa-stack-2x"></i> -->
                            <i class="fas fa-laptop fa-stack-1x"></i>
                        </span>
                        <h4 class="my-3">Size</h4>
                        <p class="text-muted">Choose your room size</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-3x">
                            <!-- <i class="fas fa-circle fa-stack-2x"></i> -->
                            <i class="fas fa-lock fa-stack-1x"></i>
                        </span>
                        <h4 class="my-3">Store</h4>
                        <p class="text-muted">Pack your goods and prepare to move in</p>
                    </div>
                </div>
                <button class="btn btn-primary btn-xl text-uppercase btn-book">Book Now</button>
            </div>
        </section>
        <!-- ======= End Book Now Section ======= -->

        @endsection