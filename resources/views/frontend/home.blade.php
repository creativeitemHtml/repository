@extends('global.index')
@section('content')
    <section class="overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="ci-banner-details2">
                        <h1 class="mb-20px man-title-60px mb-20px">{{ get_phrase('Train, Sell, Succeed with') }} <span class="ci2-title-gradient fw-extrabold">{{ get_phrase('GrowUp Lms') }}</span><span class="beta">BETA</span></h1>
                        <p class="man-subtitle-2 mb-38px">{{ get_phrase('GrowUp LMS helps you train students, sell courses, and achieve success effortlessly. Empower learners, expand your reach, and grow your business with a user-friendly platform designed for results.') }}</p>
                        <div class="d-flex align-items-center gap-4 flex-wrap">
                            <a href="#" class="btn btn-primary-ci1">{{ get_phrase('Coming Soon') }}</a>
                            {{-- <a href="javascript:void(0)" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#video-modal">
                                <span class="play-icon">
                                    <img src="{{ asset('assets/img/icon/video-play-icon2.svg') }}">
                                </span>
                                <span>{{ get_phrase('Watch demo') }}</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ci-home-banner-wrap2">
                        <div class="ci-home-banner2">
                            <img class="banner" src="{{ asset('assets/img/home-2/home3-banner.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ci2-counter-section mb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="man-title-48px mb-32px text-center">{{ get_phrase('Trusted by') }} <span class="ci2-title2-gradient">{{ get_phrase('29,000') }}</span> {{ get_phrase('Customers') }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ci2-counter-wrap">
                        <div class="ci2-single-counter text-center">
                            <h1 class="man-title-60px mb-12px"><span class="counter">{{ get_phrase('65') }}</span>+</h1>
                            <p class="man-subtitle-2 lh-normal fw-semibold">{{ get_phrase('Awesome Products') }}</p>
                        </div>
                        <div class="ci2-single-counter text-center">
                            <h1 class="man-title-60px mb-12px"><span class="counter">{{ get_phrase('29') }}</span>{{ get_phrase('k+') }}</h1>
                            <p class="man-subtitle-2 lh-normal fw-semibold">{{ get_phrase('Happy Customers') }}</p>
                        </div>
                        <div class="ci2-single-counter text-center">
                            <h1 class="man-title-60px mb-12px"><span class="counter">{{ get_phrase('14') }}</span>+</h1>
                            <p class="man-subtitle-2 lh-normal fw-semibold">{{ get_phrase('Years of Experience') }}</p>
                        </div>
                        <div class="ci2-single-counter text-center">
                            <h1 class="man-title-60px mb-12px"><span class="counter">{{ get_phrase('1500') }}</span>+</h1>
                            <p class="man-subtitle-2 lh-normal fw-semibold">{{ get_phrase('5 Star Reviews') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="ci2-product-short-details">
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-3">
                            <div class="product-logo-sm">
                                <img src="{{ asset('assets/img/home-2/ci-product-logo1.svg') }}" alt="logo">
                            </div>
                            <p class="product-logo-sm-name">{{ get_phrase('Academy LMS') }}</p>
                        </div>
                        <h2 class="man-title-40px mb-20px">{{ get_phrase('Explore Limitless Learning with') }} <span class="ci2-title3-gradient fw-bold">{{ get_phrase('Academy LMS') }}</span></h2>
                        <p class="man-subtitle-2 mb-40px">{{ get_phrase('Academy LMS are all-in-one place platform no doubt. Effortlessly Create, sell, manage, and offer courses that are comfortable for students. So that students can find courses easily and connect them.') }}</p>
                        <div class="d-flex align-items-center g-30px flex-wrap">
                            <a href="https://1.envato.market/jGqOZ" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                                <span>{{ get_phrase('Buy Now') }}</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-underline-ci1">{{ get_phrase('Learn More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow animate__fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/img/home-2/product-illustration-5.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="ci2-product-short-details">
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-3">
                            <div class="product-logo-sm">
                                <img src="{{ asset('assets/img/home-2/ci-product-logo2.svg') }}" alt="logo">
                            </div>
                            <p class="product-logo-sm-name">{{ get_phrase('Locus') }}</p>
                        </div>
                        <h2 class="man-title-40px mb-20px">{{ get_phrase('Explore Property and Connect Seamlessly with') }} <span class="ci2-text-primary fw-bold">{{ get_phrase('Locus') }}</span></h2>
                        <p class="man-subtitle-2 mb-40px">{{ get_phrase('Locus is a real estate directory. Create subscription packages for agents to list properties, connect with buyers, and close sales or rentals easily.') }}</p>
                        <div class="d-flex align-items-center g-30px flex-wrap">
                            <a href="https://1.envato.market/locus_creativeitem" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                                <span>{{ get_phrase('Buy Now') }}</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-underline-ci1">{{ get_phrase('Learn More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow animate__fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/img/home-2/product-illustration-6.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="ci2-product-short-details">
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-3">
                            <div class="product-logo-sm">
                                <img src="{{ asset('assets/img/home-2/ci-product-logo3.svg') }}" alt="logo">
                            </div>
                            <p class="product-logo-sm-name">{{ get_phrase('Sociopro') }}</p>
                        </div>
                        <h2 class="man-title-40px mb-20px">{{ get_phrase('Connect, Protect, and Monetize Securely with') }} <span class="ci2-title4-gradient fw-bold">{{ get_phrase('Sociopro') }}</span></h2>
                        <p class="man-subtitle-2 mb-40px">{{ get_phrase('Sociopro is a private social platform that helps to connect, create groups, run business pages, share blogs, organize events, sell products, and earn through ads and many other ways.') }}</p>
                        <div class="d-flex align-items-center g-30px flex-wrap">
                            <a href="https://1.envato.market/15n2Px" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                                <span>{{ get_phrase('Buy Now') }}</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-underline-ci1">{{ get_phrase('Learn More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow animate__fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/img/home-2/product-illustration-7.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="ci2-product-short-details">
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-3">
                            <div class="product-logo-sm">
                                <img src="{{ asset('assets/img/home-2/ci-product-logo4.svg') }}" alt="logo">
                            </div>
                            <p class="product-logo-sm-name">{{ get_phrase('Ekattor') }} 8</p>
                        </div>
                        <h2 class="man-title-40px mb-20px">{{ get_phrase('Manage Your School with Ease Using') }} <span class="ci2-title5-gradient fw-bold">{{ get_phrase('Ekattor 8') }}</span></h2>
                        <p class="man-subtitle-2 mb-40px">{{ get_phrase('Ekattor 8 is an advanced school management system offering modern features for students, teachers, parents, and admins, simplifying daily school operations efficiently.') }}</p>
                        <div class="d-flex align-items-center g-30px flex-wrap">
                            <a href="https://1.envato.market/gb0BLv" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                                <span>{{ get_phrase('Buy Now') }}</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-underline-ci1">{{ get_phrase('Learn More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow animate__fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/img/home-2/product-illustration-8.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="why-best-products">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="best-products">
                        <h1 class="es-title-1 mb-20px text-center text-white mx-auto">{{ get_phrase('Why Our Products are the best') }}</h1>
                        <p class="info">{{ get_phrase("We work on products that matter & make the product keeping in mind customers' needs. What you actually want, what's going to reduce your workload, and make your life easier is our first priority.") }}</p>
                    </div>
                </div>
            </div>
            <div class="why-best-items">
                <div class="why-best-item">
                    <div class="title">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/search-alt.svg') }}" alt="">
                        </div>
                        <h4>{{ get_phrase('Research') }}</h4>
                    </div>
                    <p class="info">{{ get_phrase("A depth market study is our heart of production. We focus on the solution to people's problems.") }}</p>
                </div>
                <div class="why-best-item">
                    <div class="title">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/file.svg') }}" alt="">
                        </div>
                        <h4>{{ get_phrase('Documentation') }}</h4>
                    </div>
                    <p class="info">{{ get_phrase("We properly described every single module of our products which makes our customer's life easy") }}</p>
                </div>
                <div class="why-best-item">
                    <div class="title">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/life-ring.svg') }}" alt="">
                        </div>
                        <h4>{{ get_phrase('Customer Support') }}</h4>
                    </div>
                    <p class="info">{{ get_phrase('Customers can ask us questions anytime, and we are committed to answering them on time.') }}</p>
                </div>
                <div class="why-best-item">
                    <div class="title">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/refresh.svg') }}" alt="">
                        </div>
                        <h4>{{ get_phrase('Continuous Update') }}</h4>
                    </div>
                    <p class="info">{{ get_phrase('Our products are updated with new features and bug fixes regularly.') }}</p>
                </div>
                <div class="why-best-item">
                    <div class="title">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/shield.svg') }}" alt="">
                        </div>
                        <h4>{{ get_phrase('Data Security') }}</h4>
                    </div>
                    <p class="info">{{ get_phrase("There is no compromise with our customer's data security, even a single bit.") }}</p>
                </div>
                <div class="why-best-item">
                    <div class="title">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/ruler-triangle.svg') }}" alt="">
                        </div>
                        <h4>{{ get_phrase('Testing') }}</h4>
                    </div>
                    <p class="info">{{ get_phrase('Every release of our products is adequately examined with multiple levels concerning bugs and user experience.') }}</p>
                </div>
                <div class="why-best-item">
                    <div class="title">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/head-vr.svg') }}" alt="">
                        </div>
                        <h4>{{ get_phrase('Technology') }}</h4>
                    </div>
                    <p class="info">{{ get_phrase('Most advanced technologies are used in our products and has always been updated with the latest trends.') }}</p>
                </div>
                <div class="why-best-item">
                    <div class="title">
                        <div class="icon">
                            <img src="{{ get_phrase('assets/img/home/user.svg') }}" alt="">
                        </div>
                        <h4>{{ get_phrase('Customer first') }}</h4>
                    </div>
                    <p class="info">{{ get_phrase('Customer satisfaction is the heart of our hard work. We do whatever it takes to make them happy.') }}</p>
                </div>
            </div>
        </div>
    </section>


    <section class="ci-bg-body-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="pt-lg-0 pt-5">
                        <h2 class="man-title-40px mb-4 me-lg-4">{{ get_phrase('Happy Customers, Proven') }} <span class="ci2-title6-gradient ">{{ get_phrase('Results') }}</span></h2>
                        <p class="man-subtitle-2 mb-40px">{{ get_phrase('Happy customers are proof of success. Their positive experiences and proven results showcase trust, quality, and satisfaction, inspiring others to choose services confidently.') }}</p>
                        <a href="#" class="btn btn-primary-ci1">{{ get_phrase('View All Reviews') }}</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="pb-3 pb-lg-0">
                        <!-- for desktop  -->
                        <div class="d-none d-md-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="swiper swiper-vertical-reverse">
                                        <div class="swiper-wrapper">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <div class="swiper-slide">
                                                    <div class="ci-testimonial-card mb-30px">
                                                        <p class="man-subtitle-2 mb-32px">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor.') }}</p>
                                                        <div class="d-flex align-items-center gap-2 justify-content-between">
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="sm-image-wrap">
                                                                    <img src="{{ asset('assets/img/home-2/testi-user-1.png') }}" alt="user">
                                                                </div>
                                                                <div>
                                                                    <h4 class="man-title-5 mb-1 text-break">Lara William</h4>
                                                                    <p class="man-subtitle-2">William</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <img src="{{ asset('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="swiper swiper-vertical">
                                        <div class="swiper-wrapper">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <div class="swiper-slide">
                                                    <div class="ci-testimonial-card mb-30px">
                                                        <p class="man-subtitle-2 mb-32px">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor.</p>
                                                        <div class="d-flex align-items-center gap-2 justify-content-between">
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="sm-image-wrap">
                                                                    <img src="{{ asset('assets/img/home-2/testi-user-4.png') }}" alt="user">
                                                                </div>
                                                                <div>
                                                                    <h4 class="man-title-5 mb-1 text-break">Jacob John</h4>
                                                                    <p class="man-subtitle-2">@Jacob</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <img src="{{ asset('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- for mobile  -->
                        <div class="d-block d-md-none">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="swiper swiper-vertical2">
                                        <div class="swiper-wrapper">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <div class="swiper-slide">
                                                    <div class="ci-testimonial-card mb-30px">
                                                        <p class="man-subtitle-2 mb-32px">{{ get_phrase('this is three') }}</p>
                                                        <div class="d-flex align-items-center gap-2 justify-content-between">
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="sm-image-wrap">
                                                                    <img src="{{ asset('assets/img/home-2/testi-user-4.png') }}" alt="user">
                                                                </div>
                                                                <div>
                                                                    <h4 class="man-title-5 mb-1 text-break">Jacob John</h4>
                                                                    <p class="man-subtitle-2">@Jacob</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <img src="{{ get_phrase('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade ci-video-modal" id="video-modal" tabindex="-1" aria-labelledby="video-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="man-title-28px" id="video-modalLabel">{{ get_phrase('assets/img/icon/quote-gray-60.svg') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ci-video-wrap">
                        <div class="plyr__video-embe" id="player">
                            <iframe src="https://www.youtube.com/embed/5YHAVhEJ9TM?si=GrmhAZyUahBciHUm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
