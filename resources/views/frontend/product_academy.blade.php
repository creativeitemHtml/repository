@extends('global.index')
@section('content')

<!-- Start Top Title Area -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="text-center mt-5 mb-40px">
                    <h1 class="es-title-1 mb-3">{{ get_phrase('The Best Way To Build Your Online Education System with ') }}<span class="text-red-gradient3">{{ get_phrase('Academy LMS') }}</span></h1>
                    <p class="man-subtitle-1 mb-40px">{{ get_phrase('Lorem Ipsum available, but the majority have  suffered alteration in some form.') }}</p>
                    <div class="d-flex align-items-center g-30px flex-wrap justify-content-center">
                        <a href="#" class="btn btn-primary-ci1 d-flex align-items-center gap-1">
                            <span>{{ get_phrase('Get Started Now') }}</span>
                            <img src="{{ asset('assets/img/home-2/arrow-right-white-24.svg') }}" alt="icon">
                        </a>
                        <a href="#" class="btn btn-underline-ci1">{{ get_phrase('Watch Video') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Top Title Area -->

<!-- Start Banner Area -->
<section>
    <div class="container">
        <div class="row mb-50px">
            <div class="col-lg-10 offset-lg-1">
                <div class="d-flex flex-column align-items-center wow bounceInUp" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/product-details/ci-application-banner1.webp') }}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Service Area -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="es-title-1 text-center max-w-575px mx-auto mb-32px">{{ get_phrase('Deliver Great e-learning ') }}<span class="text-red-gradient3">{{ get_phrase('Experiences') }}</span></h1>
            </div>
        </div>
        <div class="row mb-100px justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="max-w-255px mx-auto">
                    <div class="ci-sm-iconbox1" style="--bg-color: #00adb8;">
                        <img src="{{ asset('assets/img/product-details/sm-product-icon1.svg') }}" alt="icon">
                    </div>
                    <h4 class="man-title-3 mb-4 text-center">{{ get_phrase('Online Coaching Platform') }}</h4>
                    <p class="man-subtitle-2 text-center">{{ get_phrase('Build the best WordPress platform for your online coaching business.') }}</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="max-w-255px mx-auto">
                    <div class="ci-sm-iconbox1" style="--bg-color: #7747fe;">
                        <img src="{{ asset('assets/img/product-details/sm-product-icon2.svg') }}" alt="icon">
                    </div>
                    <h4 class="man-title-3 mb-4 text-center">{{ get_phrase('School Learning Management System') }}</h4>
                    <p class="man-subtitle-2 text-center">{{ get_phrase('Build the best WordPress platform for your online coaching business.') }}</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="max-w-255px mx-auto">
                    <div class="ci-sm-iconbox1" style="--bg-color: #ff6737;">
                        <img src="{{ asset('assets/img/product-details/sm-product-icon3.svg') }}" alt="icon">
                    </div>
                    <h4 class="man-title-3 mb-4 text-center">{{ get_phrase('Corporate Training LMS') }}</h4>
                    <p class="man-subtitle-2 text-center">{{ get_phrase('Build the best WordPress platform for your online coaching business.') }}</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="max-w-255px mx-auto">
                    <div class="ci-sm-iconbox1" style="--bg-color: #13aaff;">
                        <img src="{{ asset('assets/img/product-details/sm-product-icon4.svg') }}" alt="icon">
                    </div>
                    <h4 class="man-title-3 mb-4 text-center">{{ get_phrase('eLearning  Marketplace') }}</h4>
                    <p class="man-subtitle-2 text-center">{{ get_phrase('Build the best WordPress platform for your online coaching business.') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Area -->

<!-- Start Grid Area -->
<section>
    <div class="container">
        <div class="row mb-100px">
            <div class="col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="number-info-card max-md-w-450px mx-auto" style="--bg-color: linear-gradient(226deg, #fc37ec 7.61%, #3530ff 50.44%, #ffe590 87.9%);">
                            <h1 class="wh-esans-title-2 mb-12px">{{ get_phrase('50,000+') }}</h1>
                            <p class="wh-man-subtitle-1">{{ get_phrase('Active Online Users') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="number-info-card max-md-w-450px mx-auto" style="--bg-color: linear-gradient(221deg, #ff0100 22.03%, #ff9300 51.02%, #e3bfdb 69.3%);">
                            <h1 class="wh-esans-title-2 mb-12px">{{ get_phrase('60%') }}</h1>
                            <p class="wh-man-subtitle-1">{{ get_phrase('ess Cost From Other LMS Software') }}L</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="number-info-card number-info-card2  max-md-w-450px mx-auto h-100" style="--bg-color: linear-gradient(134deg, #6e3bff 19.23%, #ef15a8 69.26%, #ffc0c6 100%);">
                    <h1 class="wh-esans-title-1 mb-4">{{ get_phrase('100%') }}</h1>
                    <ul class="mb-12px d-flex align-items-center justify-content-center">
                        <li class="profile-list1-item"><img src="{{ asset('assets/img/product-details/profile-sm-1.png') }}" alt="profile"></li>
                        <li class="profile-list1-item"><img src="{{ asset('assets/img/product-details/profile-sm-2.png') }}" alt="profile"></li>
                        <li class="profile-list1-item"><img src="{{ asset('assets/img/product-details/profile-sm-3.png') }}" alt="profile"></li>
                        <li class="profile-list1-item"><img src="{{ asset('assets/img/product-details/profile-sm-4.png') }}" alt="profile"></li>
                    </ul>
                    <p class="wh-man-subtitle-2 mb-3">{{ get_phrase('Customer Satisfaction') }}</p>
                    <p class="wh-man-subtitle-3">{{ get_phrase('Delivering exceptional results with over 100% customer satisfaction') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="number-info-card max-md-w-450px mx-auto" style="--bg-color: linear-gradient(135deg, #ffe920 2.28%, #22cdfd 60.34%, #8d41c7 100%);">
                            <h1 class="wh-esans-title-2 mb-12px">{{ get_phrase('30,000+') }}</h1>
                            <p class="wh-man-subtitle-1">{{ get_phrase('Total Downloads') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="number-info-card max-md-w-450px mx-auto" style="--bg-color: linear-gradient(136deg, #60f2ff 0%, #b733fb 46.04%, #6b38ff 96.77%);">
                            <h1 class="wh-esans-title-2 mb-12px">{{ get_phrase('24/7') }}</h1>
                            <p class="wh-man-subtitle-1">{{ get_phrase('Customer Support') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Grid Area -->

<!-- Start Course Accordion Area -->
<section class="online-course-section mb-100px">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left -->
            <div class="col-md-6">
                <div>
                    <h1 class="es-title-1 es-title-1-black mb-30px">{{ get_phrase('Unleash Your Self Learning') }}</h1>
                    <!-- Accordion -->
                    <div class="ci-accordion-1 image-change-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{ get_phrase('Course Website') }}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered.') }}</p>
                                        <img src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-2.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   {{ get_phrase(' Course Player') }}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered.') }}</p>
                                        <img src="{{ asset('assets/img/new-icons-images/accordion-banner-2.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ get_phrase('Course Wishlist, Compare') }}
                                    
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered.') }}</p>
                                        <img src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-2.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    {{ get_phrase('Personalized self placed learning') }}
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered.') }}</p>
                                        <img src="{{ asset('assets/img/new-icons-images/accordion-banner-2.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    {{ get_phrase('Access from anywhere, anytime') }}
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered.') }}</p>
                                        <img src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right -->
            <div class="col-md-6 d-none d-md-block">
                <div class="justify-content-end d-flex">
                    <div class="online-course-banner wow bounceInRight" data-wow-duration="2s">
                        <img id="accordion-changeable-banner" src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Course Accordion Area -->

<!-- Start Service Help Area -->
<section>
    <div class="container">
        <div class="row align-items-center mb-100px">
            <!-- right -->
            <div class="col-lg-4 col-md-12">
                <h1 class="es-title-1 es-title-1-black mb-4">{{ get_phrase('Service we will can help you with') }}</h1>
                <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered.') }}</p>
            </div>
            <!-- grid -->
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="lg-mt-80px">
                            <div class="gradient-card-1 mb-30px max-md-w-450px mx-auto" style="--bg-color: linear-gradient(221deg, #ff0100 18.99%, #ff9300 43.32%, #e3bfdb 66.8%);">
                                <div class="ci-sm-iconbox2 mb-32px">
                                    <img src="{{ asset('assets/img/product-details/sm-service-icon1.svg') }}" alt="icon">
                                </div>
                                <h4 class="mb-20px man-title-4 text-white">{{ get_phrase('Website Design') }}</h4>
                                <p class="wh-man-subtitle-1">{{ get_phrase('Delivering exceptional results with over 100% customer satisfaction. Delivering  customer satisfaction.') }}</p>
                            </div>
                            <div class="gradient-card-1 max-md-w-450px mx-auto" style="--bg-color: linear-gradient(216deg, #fc37ec 18.36%, #3531ff 54.67%, #ffe590 90.83%);">
                                <div class="ci-sm-iconbox2 mb-32px">
                                    <img src="{{ asset('assets/img/product-details/sm-service-icon2.svg') }}" alt="icon">
                                </div>
                                <h4 class="mb-20px man-title-4 text-white">{{ get_phrase('Web Development') }}</h4>
                                <p class="wh-man-subtitle-1">{{ get_phrase('Delivering exceptional results with over 100% customer satisfaction. Delivering  customer satisfaction.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="gradient-card-1 mb-30px max-md-w-450px mx-auto" style="--bg-color: linear-gradient(135deg, #6e3bff 19.23%, #ef15a8 69.26%, #ffc0c6 92.65%);">
                            <div class="ci-sm-iconbox2 mb-32px">
                                <img src="{{ asset('assets/img/product-details/sm-service-icon3.svg') }}" alt="icon">
                            </div>
                            <h4 class="mb-20px man-title-4 text-white">{{ get_phrase('Web Applications') }}</h4>
                            <p class="wh-man-subtitle-1">{{ get_phrase('Delivering exceptional results with over 100% customer satisfaction. Delivering  customer satisfaction.') }}</p>
                        </div>
                        <div class="gradient-card-1 max-md-w-450px mx-auto" style="--bg-color: linear-gradient(140deg, #ffe920 9.82%, #22cdfd 40.55%, #8d41c7 100%);">
                            <div class="ci-sm-iconbox2 mb-32px">
                                <img src="{{ asset('assets/img/product-details/sm-service-icon4.svg') }}" alt="icon">
                            </div>
                            <h4 class="mb-20px man-title-4 text-white">{{ get_phrase('Content Writing') }}</h4>
                            <p class="wh-man-subtitle-1">{{ get_phrase('Delivering exceptional results with over 100% customer satisfaction. Delivering  customer satisfaction.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Help Area -->

<!-- Start Course builder Area -->
<section>
    <div class="container">
        <div class="row mb-100px align-items-center">
            <div class="col-md-5">
                <div class="d-flex justify-content-center wow bounceInLeft" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/home-2/ci-product-banner1.svg') }}" alt="banner">
                </div>
            </div>
            <div class="col-md-7">
                <h1 class="es-title-1 es-title-1-black mb-32px">{{ get_phrase('The Leading Online Course Builder') }}</h1>
                <div class="mb-32px">
                    <ul class="nav nav-pills nav-pills-underline mb-20px" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-item1-tab" data-bs-toggle="pill" data-bs-target="#pills-item1" type="button" role="tab" aria-controls="pills-item1" aria-selected="true">{{ get_phrase('Course Website') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-item2-tab" data-bs-toggle="pill" data-bs-target="#pills-item2" type="button" role="tab" aria-controls="pills-item2" aria-selected="false">{{ get_phrase('Lessons') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-item3-tab" data-bs-toggle="pill" data-bs-target="#pills-item3" type="button" role="tab" aria-controls="pills-item3" aria-selected="false">{{ get_phrase('Quizzes') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-item4-tab" data-bs-toggle="pill" data-bs-target="#pills-item4" type="button" role="tab" aria-controls="pills-item4" aria-selected="false">{{ get_phrase('Quizzes') }}</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-item1" role="tabpanel" aria-labelledby="pills-item1-tab">
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered. We’ve made it easier than ever to create, manage, and grow a profitable coaching business.') }}</p>
                        </div>
                        <div class="tab-pane fade" id="pills-item2" role="tabpanel" aria-labelledby="pills-item2-tab">
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered. We’ve made it easier than ever to create, manage, and grow a profitable coaching business.') }}</p>
                        </div>
                        <div class="tab-pane fade" id="pills-item3" role="tabpanel" aria-labelledby="pills-item3-tab">
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered. We’ve made it easier than ever to create, manage, and grow a profitable coaching business.') }}</p>
                        </div>
                        <div class="tab-pane fade" id="pills-item4" role="tabpanel" aria-labelledby="pills-item4-tab">
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available, but the majority have suffered. We’ve made it easier than ever to create, manage, and grow a profitable coaching business.') }}</p>
                        </div>
                    </div>              
                </div>
                <a href="#" class="btn btn-primary-ci1">{{ get_phrase('Watch Demo') }}</a>
            </div>
        </div>
    </div>
</section>
<!-- End Course builder Area -->

<!-- Start Online Player Area -->
<section>
    <div class="container">
        <div class="row mb-100px align-items-center overflow-hidden">
            <div class="col-md-6">
                <div class="d-flex flex-column align-items-center align-items-md-start me-md-4 wow bounceInLeft" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/home-2/ci-product-banner1.svg') }}" alt="banner">
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="es-title-1 es-title-1-black mb-4">{{ get_phrase('The  Online Player Integration') }}</h1>
                <p class="man-subtitle-2 man-subtitle-2-black mb-32px">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that client results.') }}</p>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-2 row-cols-lg-3 row-30px">
                    <div class="col">
                        <div class="ci-sm-iconbox3 mb-12px">
                            <img src="{{ asset('assets/img/product-details/sm-player-icon1.svg') }}" alt="icon">
                        </div>
                        <p class="man-subtitle-3">{{ get_phrase('Multiple Video Sources') }}</p>
                    </div>
                    <div class="col">
                        <div class="ci-sm-iconbox3 mb-12px">
                            <img src="{{ asset('assets/img/product-details/sm-player-icon2.svg') }}" alt="icon">
                        </div>
                        <p class="man-subtitle-3">{{ get_phrase('Sleek Audio System Player') }}</p>
                    </div>
                    <div class="col">
                        <div class="ci-sm-iconbox3 mb-12px">
                            <img src="{{ asset('assets/img/product-details/sm-player-icon3.svg') }}" alt="icon">
                        </div>
                        <p class="man-subtitle-3">{{ get_phrase('Sticky Video System Player') }}</p>
                    </div>
                    <div class="col">
                        <div class="ci-sm-iconbox3 mb-12px">
                            <img src="{{ asset('assets/img/product-details/sm-player-icon4.svg') }}" alt="icon">
                        </div>
                        <p class="man-subtitle-3">{{ get_phrase('Video Chapter Support') }}</p>
                    </div>
                    <div class="col">
                        <div class="ci-sm-iconbox3 mb-12px">
                            <img src="{{ asset('assets/img/product-details/sm-player-icon5.svg') }}" alt="icon">
                        </div>
                        <p class="man-subtitle-3">{{ get_phrase('Analytics & Reports System') }}</p>
                    </div>
                    <div class="col">
                        <div class="ci-sm-iconbox3 mb-12px">
                            <img src="{{ asset('assets/img/product-details/sm-player-icon6.svg') }}" alt="icon">
                        </div>
                        <p class="man-subtitle-3">{{ get_phrase('Email Option Gate System') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Online Player Area -->

<!-- Start Communicate Area -->
<section>
    <div class="container">
        <div class="row align-items-center mb-100px">
            <div class="col-md-6">
                <h1 class="es-title-1 es-title-1-black mb-4">{{ get_phrase('Communicate with students') }}</h1>
                <p class="man-subtitle-2 man-subtitle-2-black mb-32px">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that client results') }}.</p>
                <ul class="d-flex flex-column g-30px">
                    <li class="d-flex gap-3">
                        <div class="ci-sm-iconbox3" style="--bg-color: #ffefef;">
                            <img src="{{ asset('assets/img/product-details/teacher.svg') }}" alt="icon">
                        </div>
                        <div>
                            <h4 class="man-subtitle-3 mb-12px">{{ get_phrase('Questions and Answers') }}</h4>
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that client results.') }}</p>
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <div class="ci-sm-iconbox3" style="--bg-color: #fff5e6;">
                            <img src="{{ asset('assets/img/product-details/info-circle.svg') }}" alt="icon">
                        </div>
                        <div>
                            <h4 class="man-subtitle-3 mb-12px">{{ get_phrase('Course FAQ') }}</h4>
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that client results.') }}</p>
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <div class="ci-sm-iconbox3" style="--bg-color: #ebf6e2;">
                            <img src="{{ asset('assets/img/product-details/document-text.svg') }}" alt="icon">
                        </div>
                        <div>
                            <h4 class="man-subtitle-3 mb-12px">{{ get_phrase('Notice & Assignment') }}</h4>
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that client results.') }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/home-2/ci-product-banner1.svg') }}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Communicate Area -->

<!-- Start Why Academy LMS Area -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="es-title-1 text-center mb-4">{{ get_phrase('Why Use ') }}<span class="text-red-gradient4">{{ get_phrase('Academy LMS') }}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center mb-100px">
            <div class="col-md-4 col-sm-6">
                <div class="wh-simple-hover-card max-sm-w-450px mx-auto">
                    <div class="ci-icon-radiobox mb-20px mx-auto" style="--bg-color: #eff9fe;">
                        <img src="{{ asset('assets/img/product-details/sm-lms-icon1.svg') }}" alt="icon">
                    </div>
                    <p class="man-subtitle-2 man-subtitle-2-black pt-4 text-center">{{ get_phrase('Properly organize and truck all tasks and projects.') }}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="wh-simple-hover-card max-sm-w-450px mx-auto">
                    <div class="ci-icon-radiobox mb-20px mx-auto" style="--bg-color: #e8fcf2;">
                        <img src="{{ asset('assets/img/product-details/sm-lms-icon2.svg') }}" alt="icon">
                    </div>
                    <p class="man-subtitle-2 man-subtitle-2-black pt-4 text-center">{{ get_phrase('Properly organize and truck all tasks and projects.') }}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="wh-simple-hover-card max-sm-w-450px mx-auto">
                    <div class="ci-icon-radiobox mb-20px mx-auto" style="--bg-color: #f4f3ff;">
                        <img src="{{ asset('assets/img/product-details/sm-lms-icon3.svg') }}" alt="icon">
                    </div>
                    <p class="man-subtitle-2 man-subtitle-2-black pt-4 text-center">{{ get_phrase('Properly organize and truck all tasks and projects') }}.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="wh-simple-hover-card max-sm-w-450px mx-auto">
                    <div class="ci-icon-radiobox mb-20px mx-auto" style="--bg-color: #fff2f0;">
                        <img src="{{ asset('assets/img/product-details/sm-lms-icon4.svg') }}" alt="icon">
                    </div>
                    <p class="man-subtitle-2 man-subtitle-2-black pt-4 text-center">{{ get_phrase('Properly organize and truck all tasks and projects.') }}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="wh-simple-hover-card max-sm-w-450px mx-auto">
                    <div class="ci-icon-radiobox mb-20px mx-auto" style="--bg-color: #f1f6ff;">
                        <img src="{{ asset('assets/img/product-details/sm-lms-icon5.svg') }}" alt="icon">
                    </div>
                    <p class="man-subtitle-2 man-subtitle-2-black pt-4 text-center">{{ get_phrase('Properly organize and truck all tasks and projects.') }}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="wh-simple-hover-card max-sm-w-450px mx-auto">
                    <div class="ci-icon-radiobox mb-20px mx-auto" style="--bg-color: #eaf5ff;">
                        <img src="{{ asset('assets/img/product-details/sm-lms-icon6.svg') }}" alt="icon">
                    </div>
                    <p class="man-subtitle-2 man-subtitle-2-black pt-4 text-center">{{ get_phrase('Properly organize and truck all tasks and projects.') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Academy LMS Area -->

<!-- Start Wish for a Academy LMS Area -->
<section>
    <div class="container">
        <div class="row mb-32px justify-content-center">
            <div class="col-lg-8">
                <h1 class="es-title-1 text-center">{{ get_phrase('Everything you wish for in') }}</h1>
                <h1 class="es-title-1 text-center mb-4 text-red-gradient5">{{ get_phrase('a Academy LMS') }}</h1>
                <p class="man-subtitle-2 man-subtitle-2-black text-center max-w-750px mx-auto">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results  Lorem Ipsum available.') }}</p>
            </div>
        </div>
        <div class="row mb-100px">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="ci-lg-iconbox1 mx-auto mb-4" style="--bg-color: linear-gradient(180deg, #64eaa0 0%, #2ac871 100%);">
                    <img src="{{ asset('assets/img/product-details/lg-service-icon1.svg') }}" alt="icon">
                </div>
                <h4 class="man-title-4 text-center">{{ get_phrase('Uplifts Your Business') }}</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="ci-lg-iconbox1 mx-auto mb-4" style="--bg-color: linear-gradient(180deg, #d5c9ff 0%, #665eff 100%);">
                    <img src="{{ asset('assets/img/product-details/lg-service-icon2.svg') }}" alt="icon">
                </div>
                <h4 class="man-title-4 text-center">{{ get_phrase('Safe & Secure System') }}</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="ci-lg-iconbox1 mx-auto mb-4" style="--bg-color: linear-gradient(180deg, #feb79d 0%, #fd6786 100%);">
                    <img src="{{ asset('assets/img/product-details/lg-service-icon3.svg') }}" alt="icon">
                </div>
                <h4 class="man-title-4 text-center">{{ get_phrase('Easy to Use') }}</h4>
            </div>
        </div>
    </div>
</section>
<!-- End Wish for a Academy LMS Area -->

<!-- Start FAQ Area -->
<section>
    <div class="container">
        <div class="row mb-32px justify-content-center">
            <div class="col-lg-8">
                <h1 class="es-title-1 text-center mb-20px">{{ get_phrase('Frequently Asked Question') }}s</h1>
                <p class="man-subtitle-2 man-subtitle-2-black text-center max-w-575px mx-auto">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised') }}</p>
            </div>
        </div>
        <!-- Faqs Items -->
        <div class="row justify-content-center mb-100px">
            <div class="col-lg-10">
                <div class="ci-accordion-2">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ get_phrase('Can I use Creative elements templates for my clients?') }}</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p class="man-subtitle-4">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">{{ get_phrase('Do you provide documentation and support?') }}</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p class="man-subtitle-4">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ get_phrase('How long do I have support access?') }}</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p class="man-subtitle-4">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">{{ get_phrase('What payment methods do you accept?') }}</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p class="man-subtitle-4">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">{{ get_phrase('What happens after my subscription runs out?') }}</button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p class="man-subtitle-4">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Area -->

<!-- Start Pricing Area -->
<section>
    <div class="container">
        <div class="row mb-32px justify-content-center">
            <div class="col-lg-8">
                <h1 class="es-title-1 text-center mb-20px">{{ get_phrase('Pricing Plans') }}</h1>
                <p class="man-subtitle-2 man-subtitle-2-black text-center max-w-575px mx-auto">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised') }}</p>
            </div>
        </div>
        <div class="row mb-32px">
            <div class="col-12">
                <ul class="nav nav-pills btnradio-nav-pills mx-auto" id="pills-tab2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">{{ get_phrase('Monthly Subscription') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false">{{ get_phrase('Yearly Subscription') }}</button>
                    </li>
                </ul>          
            </div>
        </div>
        <!-- Pricing Items -->
        <div class="row mb-100px">
            <div class="col-12">
                <div class="tab-content" id="pills-tab2Content">
                    <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="ci-pricing-card max-md-w-450px mx-auto">
                                    <p class="pricing-package-name mb-2">{{ get_phrase('Pro') }}</p>
                                    <p class="man-subtitle-5 mb-12px">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour believable to use a passage.') }}</p>
                                    <div class="d-flex align-items-end gap-1 flex-wrap mb-3">
                                        <h1 class="es-title-2">{{ get_phrase('$120.00') }}</h1>
                                        <h5 class="man-title-4">{{ get_phrase('/month') }}</h5>
                                    </div>
                                    <ul class="mb-4">
                                        <li class="ci-check-listitem">{{ get_phrase('Task Management') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Project Planning') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Team Collaboration') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Notifications and Reminders') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('What you get') }}</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-primary-ci1 d-flex align-items-center justify-content-center gap-1 w-100">
                                        <span>{{ get_phrase('Get Started Now') }}</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4297 5.92969L20.4997 11.9997L14.4297 18.0697" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                          
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ci-pricing-card max-md-w-450px mx-auto">
                                    <p class="pricing-package-name mb-2">{{ get_phrase('Pro Plus') }}</p>
                                    <p class="man-subtitle-5 mb-12px">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour believable to use a passage.') }}</p>
                                    <div class="d-flex align-items-end gap-1 flex-wrap mb-3">
                                        <h1 class="es-title-2">{{ get_phrase('$1200.00') }}</h1>
                                        <h5 class="man-title-4">{{ get_phrase('/month') }}</h5>
                                    </div>
                                    <ul class="mb-4">
                                        <li class="ci-check-listitem">{{ get_phrase('Task Management') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Project Planning') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Team Collaboration') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Notifications and Reminders') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('What you get') }}</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-primary-ci1 d-flex align-items-center justify-content-center gap-1 w-100">
                                        <span>{{ get_phrase('Get Started Now') }}</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4297 5.92969L20.4997 11.9997L14.4297 18.0697" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                          
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ci-pricing-card active max-md-w-450px mx-auto">
                                    <p class="pricing-package-name bg-white mb-2">{{ get_phrase('Custom') }}</p>
                                    <p class="man-subtitle-5 mb-12px text-white">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour believable to use a passage.') }}</p>
                                    <div class="mb-3">
                                    <h1 class="es-title-2 text-white">{{ get_phrase('Let’s Tal') }}k</h1>
                                    </div>
                                    <ul class="mb-4">
                                        <li class="ci-check-listitem text-white">{{ get_phrase('Task Management') }}</li>
                                        <li class="ci-check-listitem text-white">{{ get_phrase('Project Planning') }}</li>
                                        <li class="ci-check-listitem text-white">{{ get_phrase('Team Collaboration') }}</li>
                                        <li class="ci-check-listitem text-white">{{ get_phrase('Notifications and Reminders') }}</li>
                                        <li class="ci-check-listitem text-white">{{ get_phrase('What you get') }}</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-primary-ci1 text-center w-100 bg-white">{{ get_phrase('Book a Call') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="ci-pricing-card max-md-w-450px mx-auto">
                                    <p class="pricing-package-name mb-2">{{ get_phrase('Pro') }}</p>
                                    <p class="man-subtitle-5 mb-12px">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour believable to use a passage.') }}</p>
                                    <div class="d-flex align-items-end gap-1 flex-wrap mb-3">
                                        <h1 class="es-title-2">{{ get_phrase('$120.00') }}</h1>
                                        <h5 class="man-title-4">{{ get_phrase('/month') }}</h5>
                                    </div>
                                    <ul class="mb-4">
                                        <li class="ci-check-listitem">{{ get_phrase('Task Management') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Project Planning') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Team Collaboration') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Notifications and Reminders') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('What you get') }}</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-primary-ci1 d-flex align-items-center justify-content-center gap-1 w-100">
                                        <span>{{ get_phrase('Get Started Now') }}</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4297 5.92969L20.4997 11.9997L14.4297 18.0697" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                          
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ci-pricing-card max-md-w-450px mx-auto">
                                    <p class="pricing-package-name mb-2">{{ get_phrase('Pro Plus') }}</p>
                                    <p class="man-subtitle-5 mb-12px">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour believable to use a passage.') }}</p>
                                    <div class="d-flex align-items-end gap-1 flex-wrap mb-3">
                                        <h1 class="es-title-2">{{ get_phrase('$1200.00') }}</h1>
                                        <h5 class="man-title-4">{{ get_phrase('/month') }}</h5>
                                    </div>
                                    <ul class="mb-4">
                                        <li class="ci-check-listitem">{{ get_phrase('Task Management') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Project Planning') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Team Collaboration') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('Notifications and Reminders') }}</li>
                                        <li class="ci-check-listitem">{{ get_phrase('What you get') }}</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-primary-ci1 d-flex align-items-center justify-content-center gap-1 w-100">
                                        <span>{{ get_phrase('') }}Get Started Now</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4297 5.92969L20.4997 11.9997L14.4297 18.0697" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                          
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ci-pricing-card active max-md-w-450px mx-auto">
                                    <p class="pricing-package-name bg-white mb-2">{{ get_phrase('Custom') }}</p>
                                    <p class="man-subtitle-5 mb-12px text-white">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration some injected humour believable to use a passage') }}.</p>
                                    <div class="mb-3">
                                        <h1 class="es-title-2 text-white">{{ get_phrase('Let’s Talk') }}</h1>
                                    </div>
                                    <ul class="mb-4">
                                        <li class="ci-check-listitem text-white">{{ get_phrase('Task Management') }}</li>
                                        <li class="ci-check-listitem text-white">{{ get_phrase('Project Planning') }}</li>
                                        <li class="ci-check-listitem text-white">{{ get_phrase('Team Collaboration') }}</li>
                                        <li class="ci-check-listitem text-white">{{ get_phrase('Notifications and Reminders') }}</li>
                                        <li class="ci-check-listitem text-white">{{ get_phrase('What you get') }}</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-primary-ci1 text-center w-100 bg-white">{{ get_phrase('Book a Call') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Area -->

<!-- Start LMS Fix Area -->
<section>
    <div class="container">
        <div class="row align-items-center mb-100px">
            <div class="col-md-6">
                <div class="md-mt-40px">
                    <h1 class="es-title-1 es-title-1-black mb-20px">{{ get_phrase('Spending too much time on LMS? We can fix that...') }}</h1>
                    <p class="man-subtitle-2 man-subtitle-2-black mb-32px">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that client results') }}.</p>
                    <div class="d-flex g-20px flex-wrap">
                        <a href="#">
                            <img src="{{ asset('assets/img/product-details/google-play.svg') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets/img/product-details/app-store.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/product-details/lms-fix-banner.svg') }}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End LMS Fix Area -->

<!-- Start Course Feature Area -->
<section>
    <div class="container">
        <div class="row mb-32px justify-content-center">
            <div class="col-lg-8">
                <h1 class="es-title-1 text-center mb-20px">{{ get_phrase('Appealing Course Features') }}</h1>
                <p class="man-subtitle-2 man-subtitle-2-black text-center max-w-575px mx-auto">{{ get_phrase('Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills texttab-nav-pills row justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item col-lg-4 col-md-6" role="presentation">
                        <button class="nav-link active max-w-306px mx-auto h-100" id="pills-media1-tab" data-bs-toggle="pill" data-bs-target="#pills-media1" type="button" role="tab" aria-controls="pills-media1" aria-selected="true">
                            <h5 class="man-title-4 mb-20px">{{ get_phrase('Uplifts Your Business') }}</h5>
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available.') }}</p>
                        </button>
                    </li>
                    <li class="nav-item col-lg-4 col-md-6" role="presentation">
                        <button class="nav-link max-w-306px mx-auto h-100" id="pills-media2-tab" data-bs-toggle="pill" data-bs-target="#pills-media2" type="button" role="tab" aria-controls="pills-media2" aria-selected="false">
                            <h5 class="man-title-4 mb-20px">{{ get_phrase('Safe & Secure System') }}</h5>
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available.') }}</p>
                        </button>
                    </li>
                    <li class="nav-item col-lg-4 col-md-6" role="presentation">
                        <button class="nav-link max-w-306px mx-auto h-100" id="pills-media3-tab" data-bs-toggle="pill" data-bs-target="#pills-media3" type="button" role="tab" aria-controls="pills-media3" aria-selected="false">
                            <h5 class="man-title-4 mb-20px">{{ get_phrase('Easy to Use') }}</h5>
                            <p class="man-subtitle-2 man-subtitle-2-black">{{ get_phrase('We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves transformational client results. Lorem Ipsum available.') }}</p>
                        </button>
                    </li>
                </ul>          
            </div>
        </div>
        <!-- Tab Content -->
        <div class="row mb-100px">
            <div class="col-12">
                <div class="tab-content wow bounceInUp" data-wow-duration="2s" id="pills-tab3Content">
                    <div class="tab-pane fade show active" id="pills-media1" role="tabpanel" aria-labelledby="pills-media1-tab">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100" src="{{ asset('assets/img/product-details/media-banner.svg') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-media2" role="tabpanel" aria-labelledby="pills-media2-tab">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100" src="{{ asset('assets/img/product-details/media-banner.svg') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-media3" role="tabpanel" aria-labelledby="pills-media3-tab">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100" src="{{ asset('assets/img/product-details/media-banner.svg') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- End Course Feature Area -->

@endsection