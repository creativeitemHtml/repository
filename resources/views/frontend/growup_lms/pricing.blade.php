@extends('global.index')
@section('content')
    @include('frontend.growup_lms.lms_header')

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
                        <div class="tab-content mb-100px" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab" tabindex="0">
                                <div class="row mcg-30 justify-content-center">
                                    @foreach ($packages as $package)
                                        <div class="col-lg-4 col-md-6">
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
                            <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab" tabindex="0">
                                <div class="row mcg-30 justify-content-center">
                                    <div class="col-lg-4 col-md-6">
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
                        <a href="javascript:void(0);" onclick="support()" class="btn gr-btn-primary">
                            <span>Get Support</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.90625 19.92L15.4263 13.4C16.1963 12.63 16.1963 11.37 15.4263 10.6L8.90625 4.08" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <a href="{{ route('register.company.form', 'growup-lms') }}" class="btn gr-btn-primary">
                            <span>Get Started</span>
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


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="max-w-836px mx-auto">
                        <h1 class="man-title-48px text-center mb-3">{{ get_phrase('Customer response') }}</h1>
                        <p class="man-subtitle3-16px text-center">{{ get_phrase('Our organization positively addresses the') }} <span class="cin2-text-dark fw-semibold">{{ get_phrase('valued customer reactions.') }}</span>
                            {{ get_phrase('There is the team to analyze all the raised issues and provide possible solutions on a top priority basis because of organizational commitment.') }}</p>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block">
                <div class="row row-30px mb-100px mt-32px">
                    <div class="col-lg-4 col-md-6">
                        <div class="gr-single-testimonial mb-30px">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-1.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Robert Johnson</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">{{ get_phrase('Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.') }}</p>
                        </div>
                        <div class="gr-single-testimonial">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-4.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Hikmet Atceken</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">{{ get_phrase('I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gr-single-testimonial mb-30px">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-2.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Jenny Wilson</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">{{ get_phrase('I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!') }}</p>
                        </div>
                        <div class="gr-single-testimonial">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-5.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Ragiv Diler</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">{{ get_phrase('I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gr-single-testimonial mb-30px">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-3.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">David Carvajal</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">{{ get_phrase('Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.') }}</p>
                        </div>
                        <div class="gr-single-testimonial">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-6.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Maria Ancelotti</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">{{ get_phrase('I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none">
                <div class="row mb-100px">
                    <div class="col-12">
                        <div>
                            <!-- Swiper -->
                            <div class="swiper gr-testimonial">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="assets/img/growup/user-sm-1.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Robert Johnson</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to
                                                personally thank you.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="assets/img/growup/user-sm-2.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Jenny Wilson</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get
                                                compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="assets/img/growup/user-sm-3.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">David Carvajal</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to
                                                personally thank you.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="assets/img/growup/user-sm-4.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Hikmet Atceken</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get
                                                compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="assets/img/growup/user-sm-5.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Ragiv Diler</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get
                                                compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="assets/img/growup/user-sm-6.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Maria Ancelotti</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get
                                                compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                                        Can I use GrowUp LMS at no cost?
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


    <x-footer-signup />

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
