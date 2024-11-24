@extends('global.index')
@section('content')
    @include('frontend.creative_lms.lms_header')

    <!-- Pricing Area Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="mt-60px mb-32px">
                            <h1 class="man-title-48px text-center mb-3">Growth-Friendly, Affordable Pricing</h1>
                            <p class="man-subtitle2-20px text-center text-capitalize max-w-736px mx-auto">Choose your desired  Plan That Fuses your Vision with Value.</p>
                            <p class="man-subtitle2-20px text-center text-lowercase max-w-736px mx-auto">Switch Plans Anytime and Enhance with Add-Ons for Email and Teams!</p>
                        </div>
                        <ul class="nav nav-pills lms-pricingtab-nav-pills mb-32px" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly billing</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false">Annual billing</button>
                            </li>
                        </ul>
                        <!-- pricing -->
                        <div class="tab-content mb-100px" id="pills-tabContent">
                            <!-- Monthly billing -->
                            <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab" tabindex="0">
                                <div class="row mcg-30 justify-content-center">
                                    @foreach ($packages as $package)
                                        <div class="col-lg-4 col-md-6">
                                            <!-- Single Pricing Card -->
                                            <div class="lms1-pricing-card h-100 package" id="{{ $package->id }}">
                                                <p class="lms1-badge-primary mb-12px text-capitalize">{{ $package->type }}</p>
                                                <div class="d-flex align-items-end flex-wrap mb-3">
                                                    <h1 class="lms1-pricing-price">{{ $package->is_free ? 'Free' : currency($package->price) }}</h1>
                                                    <p class="lms1-pricing-duration mb-2px">/{{ $package->interval }}</p>
                                                </div>
                                                <ul class="d-flex flex-column gap-2 mb-4">
                                                    <li class="lms1-greencheck-list">Task Management</li>
                                                    <li class="lms1-greencheck-list">Project Planning</li>
                                                    <li class="lms1-greencheck-list">Team Collaboration</li>
                                                    <li class="lms1-greencheck-list">Notifications and Reminders</li>
                                                    <li class="lms1-greencheck-list">What you get</li>
                                                    <li class="lms1-greencheck-list">Team Collaboration</li>
                                                    <li class="lms1-greencheck-list">Notifications and Reminders</li>
                                                    <li class="lms1-greencheck-list">What you get</li>
                                                </ul>

                                                @auth
                                                    @if (get_package_subscription_status($package->id))
                                                        <button type="button" class="btn ci-btn-outline-primary w-100">
                                                            <span>Claimed !</span>
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn ci-btn-outline-primary w-100" id="get-subscription">
                                                            <span>Get Started Now</span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    @endif
                                                @else
                                                    <button type="button" class="btn ci-btn-outline-primary w-100" id="get-subscription">
                                                        <span>Get Started Now</span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                @endauth
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- yearly billing -->
                            <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab" tabindex="0">
                                <div class="row mcg-30 justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <!-- Single Pricing Card -->
                                        <div class="lms1-pricing-card h-100">
                                            <p class="lms1-badge-primary mb-12px">Pro</p>
                                            <div class="d-flex align-items-end flex-wrap mb-3">
                                                <h1 class="lms1-pricing-price">$120.00</h1>
                                                <p class="lms1-pricing-duration mb-2px">/month</p>
                                            </div>
                                            <ul class="d-flex flex-column gap-2 mb-4">
                                                <li class="lms1-greencheck-list">Task Management</li>
                                                <li class="lms1-greencheck-list">Project Planning</li>
                                                <li class="lms1-greencheck-list">Team Collaboration</li>
                                                <li class="lms1-greencheck-list">Notifications and Reminders</li>
                                                <li class="lms1-greencheck-list">What you get</li>
                                                <li class="lms1-greencheck-list">Team Collaboration</li>
                                                <li class="lms1-greencheck-list">Notifications and Reminders</li>
                                                <li class="lms1-greencheck-list">What you get</li>
                                            </ul>
                                            <a href="#" class="btn ci-btn-outline-primary w-100">
                                                <span>Get Started Now</span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- Single Pricing Card -->
                                        <div class="lms1-pricing-card h-100">
                                            <p class="lms1-badge-primary mb-12px">Pro Plus</p>
                                            <div class="d-flex align-items-end flex-wrap mb-3">
                                                <h1 class="lms1-pricing-price">$120.00</h1>
                                                <p class="lms1-pricing-duration mb-2px">/month</p>
                                            </div>
                                            <ul class="d-flex flex-column gap-2 mb-4">
                                                <li class="lms1-greencheck-list">Task Management</li>
                                                <li class="lms1-greencheck-list">Project Planning</li>
                                                <li class="lms1-greencheck-list">Team Collaboration</li>
                                                <li class="lms1-greencheck-list">Notifications and Reminders</li>
                                                <li class="lms1-greencheck-list">What you get</li>
                                                <li class="lms1-greencheck-list">Team Collaboration</li>
                                                <li class="lms1-greencheck-list">Notifications and Reminders</li>
                                                <li class="lms1-greencheck-list">What you get</li>
                                            </ul>
                                            <a href="#" class="btn ci-btn-outline-primary w-100">
                                                <span>Get Started Now</span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- Single Pricing Card -->
                                        <div class="lms1-pricing-card h-100">
                                            <p class="lms1-badge-primary mb-12px">Custom</p>
                                            <div class="d-flex align-items-end flex-wrap mb-3">
                                                <h1 class="lms1-pricing-title">Let’s Talk</h1>
                                            </div>
                                            <ul class="d-flex flex-column gap-2 mb-4">
                                                <li class="lms1-greencheck-list">Task Management</li>
                                                <li class="lms1-greencheck-list">Project Planning</li>
                                                <li class="lms1-greencheck-list">Team Collaboration</li>
                                                <li class="lms1-greencheck-list">Notifications and Reminders</li>
                                                <li class="lms1-greencheck-list">What you get</li>
                                                <li class="lms1-greencheck-list">Team Collaboration</li>
                                                <li class="lms1-greencheck-list">Notifications and Reminders</li>
                                                <li class="lms1-greencheck-list">What you get</li>
                                            </ul>
                                            <a href="#" class="btn ci-btn-outline-primary w-100">Book a Call</a>
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
    <!-- Pricing Area End -->


    <!-- Dedicated Success Area Start -->
    <section>
        <div class="container">
            <div class="row mb-100px">
                <div class="col-12">
                    <div>
                        <h1 class="man-title-48px text-center mb-3 fw-extrabold">We’re Dedicated to <span class="skin-color">Your Success.</span></h1>
                        <p class="text-center man-subtitle2-20px">Discover More with GrowUp LMS!</p>
                    </div>
                </div>
            </div>
            <div class="row mcg-30 align-items-center mb-60px">
                <div class="col-md-6">
                    <div class="pe-xl-4 pe-lg-3 wow animate__fadeInUp" data-wow-delay=".3s">
                        <img class="w-100" src="{{ asset('assets/img/lms/dedicated-success-banner1.webp') }}" alt="banner">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pb-30px">
                        <h1 class="man-title-48px mb-32px">24/7 Customer support</h1>
                        <p class="man-subtitle3-16px mb-32px">With GrowUp LMS, you’re never alone. Our <span class="cin2-text-dark fw-semibold">24/7 support</span> ensures that help is always available, no matter the hour. so you can focus on what matters most—your success.</p>
                        <a href="#" class="btn cin3-btn-outline-secondary svg-stroke px-32px py-3 d-flex align-items-center gap-2">
                            <span>Get Support</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.90625 19.92L15.4263 13.4C16.1963 12.63 16.1963 11.37 15.4263 10.6L8.90625 4.08" stroke="#212534" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mcg-30 align-items-center mb-70px">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="pb-30px">
                        <h1 class="man-title-48px mb-32px">GrowUp LMS network</h1>
                        <p class="man-subtitle3-16px mb-32px"><span class="cin2-text-dark fw-semibold">Connect, collaborate, and grow</span> with our lively GrowUp LMS community on Facebook. Engage with fellow learners, share insights, and fuel your passion with entrepreneurs, experts, and
                            innovators. Read more.</p>
                        <a href="#" class="btn cin3-btn-outline-secondary svg-stroke px-32px py-3 d-flex align-items-center gap-2">
                            <span>Get Started</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.90625 19.92L15.4263 13.4C16.1963 12.63 16.1963 11.37 15.4263 10.6L8.90625 4.08" stroke="#212534" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="ps-xl-4 ps-lg-3 wow animate__fadeInUp" data-wow-delay=".3s">
                        <img class="w-100" src="{{ asset('assets/img/lms/dedicated-success-banner2.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dedicated Success Area End -->


    <!-- Testimonial Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-20px">What Our <span class="skin-color">Customers</span> Say</h1>
                    <p class="man-subtitle3-16px text-center max-w-750px mx-auto">We’ve made it easier than ever to create, manage, and grow a profitable their coaching business that achieves transformational client results.</p>
                </div>
            </div>
        </div>
        <div class="lms-main-testimonial-area mb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="lms-testimonial-space">
                            <!-- Swiper -->
                            <div class="swiper lms2-swiper lms2-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->


    <!-- QNA Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-20px">Customers FAQ</h1>
                </div>
            </div>
            <div class="row mb-100px justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-11">
                    <div>
                        <div class="accordion lms3-accordion" id="lms-qna-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaOne" aria-expanded="true" aria-controls="collapseqnaOne">
                                        Can I use CreativeLMS at no cost?
                                    </button>
                                </h2>
                                <div id="collapseqnaOne" class="accordion-collapse collapse show" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">Yes! You can start with free plan  of GrowUp LMS at no cost and begin earning right away.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaTwo" aria-expanded="false" aria-controls="collapseqnaTwo">
                                        Can I close my account whenever I want?
                                    </button>
                                </h2>
                                <div id="collapseqnaTwo" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">We hope you stay, but if you need to, you can cancel your account at any time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaThree" aria-expanded="false" aria-controls="collapseqnaThree">
                                        Do I have to provide credit card details to sign up?
                                    </button>
                                </h2>
                                <div id="collapseqnaThree" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">You don’t need a credit card to sign up. Begin with our free plan and upgrade to a paid plan whenever you’re ready.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaFour" aria-expanded="false" aria-controls="collapseqnaFour">
                                        Does GrowUp LMS take a percentage of my earnings?
                                    </button>
                                </h2>
                                <div id="collapseqnaFour" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">Unlike other platforms, GrowUp LMS doesn’t take a cut of your earnings. We only have standard processing fees, just like other payment processors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaFive" aria-expanded="false" aria-controls="collapseqnaFive">
                                        Is support included with my plan?
                                    </button>
                                </h2>
                                <div id="collapseqnaFive" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">Every plan includes unlimited support, even the Free plan! Just start a support ticket from your portal’s dashboard.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaSix" aria-expanded="false" aria-controls="collapseqnaSix">
                                        Will I need a web host?
                                    </button>
                                </h2>
                                <div id="collapseqnaSix" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">With GrowUp LMS, your site is fully hosted, so no extra web hosting is required. Secure hosting and e-commerce features are built-in.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- QNA Area End -->


    <!-- Blue Signup Area Start -->
    <section class="wow animate__fadeInUp" data-wow-delay=".3s">
        <div class="container">
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="lms-getstarted-area">
                        <h2 class="man-title-60px text-white mb-20px text-center">Start Making Money!</h2>
                        <h4 class="man-title-48px fw-semibold text-white text-center mb-32px">Enroll Free Today.</h4>
                        <div class="text-center">
                            <a href="#" class="btn cin1-btn-outline-white">Get started for free</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blue Signup Area End -->
    <form action="{{ route('lms.subscription') }}" id="lms-subscription-form" method="post">@csrf</form>
@endsection


@push('js')
    <script>
        $(document).ready(function() {
            $('.package button#get-subscription').on('click', function() {
                let packageId = $(this).parent().attr('id');
                let input = `<input type="text" name="package_id" id="package_id" value="${packageId}">`;
                let form = $('#lms-subscription-form');
                if (form.find('#package_id')) {
                    $('#lms-subscription-form #package_id').remove();
                }
                form.append(input);
                form.submit();
            });
        });
    </script>
@endpush
