@extends('global.index')
@section('content')
    @include('frontend.growup_lms.lms_header')

    @php
        use App\Models\SaasCompany;
    @endphp

    <section class="gr-main-hero-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="md-max-w-535px">
                        <h1 class="man-title-60px mb-3">{{ get_phrase('Sell, Earn, Train and GrowUp') }}</h1>
                        <p class="man-subtitle3-16px mb-32px md-max-w-503px">
                            {{ get_phrase('An advanced LMS that turns your learning Into earning potentials. Share what you know and earn money on your own terms.') }}
                            <span class="cin2-text-dark fw-semibold">{{ get_phrase('Turn your knowledge into business opportunity.') }}</span>
                        </p>
                        <form action="">
                            <div class="gr-subscribe-wrap">
                                <button type="submit" class="btn gr-subscribe-btn">{{ get_phrase('Get Started') }}</button>
                                <input type="email" class="form-control gr-subscribe-input" placeholder="Enter your email">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="gr-main-hero-banner me-auto ms-auto me-md-0 wow animate__fadeInUp" data-wow-delay=".3s">
                        <img class="banner" src="{{ asset('assets/img/growup/gr-main-hero-banner.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="mb-100px">
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-3">{{ get_phrase('Dream it, Launch it, Make profit!') }}</h1>
                    <p class="man-subtitle3-16px text-center"><span class="cin2-text-dark">{{ get_phrase('GrowUp LMS') }}</span> {{ get_phrase('makes it happen fast') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="profit-dark-area">
                        <div class="profit-blue-wrap">
                            <h1 class="man-title-60px fw-extrabold text-white"><span class="counter">2</span>k+</h1>
                            <p class="man-subtitle3-16px text-white mb-20px">{{ get_phrase('Satisfied clients') }}</p>
                            <p class="man-gray-text-14px">{{ get_phrase('Our awesome clients are') }}</p>
                            <p class="man-gray-text-14px">{{ get_phrase('industry experts around the world') }}</p>
                        </div>
                        <div class="profit-white-wrap profit-white-wrap-2nd">
                            <h1 class="text-center man-title-60px fw-extrabold"><span class="counter">1</span>+</h1>
                            <p class="man-subtitle3-16px cin2-text-dark text-center">{{ get_phrase('Years Experience') }}</p>
                        </div>
                        <div class="profit-white-wrap">
                            <h1 class="text-center man-title-60px fw-extrabold"><span class="counter">12</span></h1>
                            <p class="man-subtitle3-16px cin2-text-dark text-center">{{ get_phrase('Years Experience') }}</p>
                        </div>
                        <div class="profit-white-wrap">
                            <h1 class="text-center man-title-60px fw-extrabold"><span class="counter">1200</span>+</h1>
                            <p class="man-subtitle3-16px cin2-text-dark text-center">{{ get_phrase('Clients Review') }}</p>
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
                    <h1 class="man-title-48px text-center mb-3">{{ get_phrase('Everything you need is right here.') }}</h1>
                    <p class="man-subtitle3-16px text-center">{{ get_phrase('Our') }} <span class="cin2-text-dark fw-semibold">{{ get_phrase('key features') }}</span> {{ get_phrase('you must need') }}</p>
                </div>
            </div>
            <div class="gr-radio-list-grid mb-100px">
                <ul class="gr-radio-list-group">
                    <li class="gr-radio-list">{{ get_phrase('Drip courses') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Quiz') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Course Discussion') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Course Bundle') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Seat Limit') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Coupons Discount') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Embeds') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Wishlist') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Cart') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Course Catalog') }}</li>
                </ul>
                <ul class="gr-radio-list-group">
                    <li class="gr-radio-list">{{ get_phrase('Course Certificate') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Team progress') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Offline Access') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Lesson Builder') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Live Classes') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Multi Lesson') }} Type</li>
                    <li class="gr-radio-list">{{ get_phrase('Video Watermarking') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('SEO Optimization') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Blog & Content') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Email Newsletter') }}</li>
                </ul>
                <ul class="gr-radio-list-group">
                    <li class="gr-radio-list">{{ get_phrase('Social Media Sharing') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Access Control') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Device Limitations') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Messaging') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Page Builder') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Multimedia Content Support') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Grading & Feedback') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Advanced Search') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Cross-Device Access') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Role Management') }}</li>
                </ul>
                <ul class="gr-radio-list-group">
                    <li class="gr-radio-list">{{ get_phrase('AI-Generated Content') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Multi-Language') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('API Integration') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Mobile App') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Payment Gateway') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Instant Payouts') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Global Tax') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Revenue Report') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Offline Payment') }}</li>
                    <li class="gr-radio-list">{{ get_phrase('Subscription Payments') }}</li>
                </ul>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="pe-lg-1 pe-xl-2">
                        <div>
                            <h1 class="man-title-48px mb-32px">{{ get_phrase('Find your perfect training plan.') }}</h1>
                            <ul class="d-flex flex-column gap-4 mb-32px">
                                <li class="d-flex align-items-start gap-3">
                                    <div class="lms-color-iconbox" style="--bg-color:#EBF6E2">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16 29.3334C8.63616 29.3334 2.66663 23.3638 2.66663 16C2.66663 8.63622 8.63616 2.66669 16 2.66669C23.3638 2.66669 29.3333 8.63622 29.3333 16C29.3333 23.3638 23.3638 29.3334 16 29.3334ZM22.9428 13.6095C23.4635 13.0888 23.4635 12.2446 22.9428 11.7239C22.4221 11.2032 21.5778 11.2032 21.0571 11.7239L14 18.7811L10.9428 15.7239C10.4221 15.2032 9.57785 15.2032 9.05715 15.7239C8.53645 16.2446 8.53645 17.0888 9.05715 17.6095L13.0571 21.6095C13.5778 22.1302 14.4221 22.1302 14.9428 21.6095L22.9428 13.6095Z"
                                                fill="#45B736" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="lms-iconlist-title mb-2 cin2-text-dark">{{ get_phrase('Monetize knowledge') }}</h5>
                                        <p class="lms-iconlist-subtitle">{{ get_phrase('Convert your expertise into earning through Digital downloads, courses, coaching.') }}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start gap-3">
                                    <div class="lms-color-iconbox" style="--bg-color:#FFF5E6">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 2.66669C8.65329 2.66669 2.66663 8.65335 2.66663 16C2.66663 23.3467 8.65329 29.3334 16 29.3334C23.3466 29.3334 29.3333 23.3467 29.3333 16C29.3333 8.65335 23.3466 2.66669 16 2.66669ZM15 10.6667C15 10.12 15.4533 9.66669 16 9.66669C16.5466 9.66669 17 10.12 17 10.6667V17.3334C17 17.88 16.5466 18.3334 16 18.3334C15.4533 18.3334 15 17.88 15 17.3334V10.6667ZM17.2266 21.84C17.16 22.0134 17.0666 22.1467 16.9466 22.28C16.8133 22.4 16.6666 22.4934 16.5066 22.56C16.3466 22.6267 16.1733 22.6667 16 22.6667C15.8266 22.6667 15.6533 22.6267 15.4933 22.56C15.3333 22.4934 15.1866 22.4 15.0533 22.28C14.9333 22.1467 14.84 22.0134 14.7733 21.84C14.7066 21.68 14.6666 21.5067 14.6666 21.3334C14.6666 21.16 14.7066 20.9867 14.7733 20.8267C14.84 20.6667 14.9333 20.52 15.0533 20.3867C15.1866 20.2667 15.3333 20.1734 15.4933 20.1067C15.8133 19.9734 16.1866 19.9734 16.5066 20.1067C16.6666 20.1734 16.8133 20.2667 16.9466 20.3867C17.0666 20.52 17.16 20.6667 17.2266 20.8267C17.2933 20.9867 17.3333 21.16 17.3333 21.3334C17.3333 21.5067 17.2933 21.68 17.2266 21.84Z"
                                                fill="#FF9C07" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="lms-iconlist-title mb-2 cin2-text-dark">{{ get_phrase('Hassle-Free management') }}</h5>
                                        <p class="lms-iconlist-subtitle">{{ get_phrase('Let us manage the heavy liftings, while you focus on creation.') }}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start gap-3">
                                    <div class="lms-color-iconbox" style="--bg-color:#E2EDF6">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16 29.3333C23.3638 29.3333 29.3333 23.3638 29.3333 16C29.3333 8.63619 23.3638 2.66666 16 2.66666C8.63616 2.66666 2.66663 8.63619 2.66663 16C2.66663 23.3638 8.63616 29.3333 16 29.3333ZM13.3333 12.6667C13.3333 13.7712 12.4379 14.6667 11.3333 14.6667C10.2287 14.6667 9.33329 13.7712 9.33329 12.6667C9.33329 11.5621 10.2287 10.6667 11.3333 10.6667C12.4379 10.6667 13.3333 11.5621 13.3333 12.6667ZM22.6666 12.6667C22.6666 13.7712 21.7712 14.6667 20.6666 14.6667C19.5621 14.6667 18.6666 13.7712 18.6666 12.6667C18.6666 11.5621 19.5621 10.6667 20.6666 10.6667C21.7712 10.6667 22.6666 11.5621 22.6666 12.6667ZM11.2485 19.5321C10.9901 18.8425 10.2216 18.493 9.53204 18.7515C8.8425 19.0099 8.493 19.7784 8.75143 20.4679C9.82741 23.3389 12.6958 25.3333 16 25.3333C19.3041 25.3333 22.1725 23.3389 23.2485 20.4679C23.5069 19.7784 23.1574 19.0099 22.4679 18.7515C21.7783 18.493 21.0099 18.8425 20.7514 19.5321C20.0807 21.3218 18.2359 22.6667 16 22.6667C13.764 22.6667 11.9192 21.3218 11.2485 19.5321Z"
                                                fill="#0A7EFB" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="lms-iconlist-title mb-2 cin2-text-dark">{{ get_phrase('Carefree Learning') }}</h5>
                                        <p class="lms-iconlist-subtitle">{{ get_phrase('Nothing to worry about, Just explore.') }}</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn gr-btn-primary ms-76px">
                                <span>{{ get_phrase('Get Started') }}</span>
                                <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="ps-lg-1 ps-xl-2 wow animate__fadeInUp" data-wow-delay=".3s">
                        <div class="w-100">
                            <img class="w-100" src="{{ asset('assets/img/growup/gr-training-plan-banner.webp') }}" alt="banner">
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
                    <div class="pe-lg-1 pe-xl-2">
                        <div class="w-100 wow animate__fadeInUp" data-wow-delay=".3s">
                            <img class="w-100" src="{{ asset('assets/img/growup/gr-make-miney-banner.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ps-lg-1 ps-xl-2">
                        <div>
                            <h1 class="man-title-48px mb-32px">{{ get_phrase('Sell with confidence & make money') }}</h1>
                            <ul class="d-flex flex-column gap-4 mb-32px">
                                <li class="d-flex align-items-start gap-3">
                                    <div class="lms-color-iconbox" style="--bg-color:#FFEFEF">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8023 3.76341C11.9523 3.49353 11.7029 3.17438 11.4125 3.27914C7.63669 4.64111 4.64142 7.63638 3.27945 11.4122C3.17469 11.7026 3.49384 11.952 3.76371 11.802C5.31958 10.9374 7.01013 10.2644 8.77193 9.77823C9.26081 9.64332 9.64362 9.26051 9.77854 8.77162C10.2648 7.00982 10.9377 5.31928 11.8023 3.76341Z"
                                                fill="#FF6666" />
                                            <path
                                                d="M3.76371 20.1978C3.49384 20.0478 3.17469 20.2972 3.27945 20.5876C4.64141 24.3634 7.63669 27.3587 11.4125 28.7207C11.7029 28.8254 11.9523 28.5063 11.8023 28.2364C10.9377 26.6805 10.2648 24.99 9.77854 23.2282C9.64362 22.7393 9.26081 22.3565 8.77193 22.2216C7.01012 21.7353 5.31958 21.0624 3.76371 20.1978Z"
                                                fill="#FF6666" />
                                            <path
                                                d="M20.1981 28.2364C20.0481 28.5063 20.2975 28.8254 20.5879 28.7207C24.3637 27.3587 27.359 24.3634 28.721 20.5876C28.8257 20.2972 28.5066 20.0478 28.2367 20.1978C26.6808 21.0624 24.9903 21.7353 23.2285 22.2216C22.7396 22.3565 22.3568 22.7393 22.2219 23.2282C21.7357 24.99 21.0627 26.6805 20.1981 28.2364Z"
                                                fill="#FF6666" />
                                            <path
                                                d="M28.2367 11.802C28.5066 11.952 28.8257 11.7026 28.721 11.4122C27.359 7.63638 24.3637 4.64111 20.5879 3.27915C20.2975 3.17439 20.0481 3.49353 20.1981 3.76341C21.0627 5.31928 21.7357 7.00982 22.2219 8.77162C22.3568 9.26051 22.7396 9.64332 23.2285 9.77823C24.9903 10.2644 26.6808 10.9374 28.2367 11.802Z"
                                                fill="#FF6666" />
                                            <path
                                                d="M11.522 15.9999C11.522 17.3159 11.6232 18.6242 11.8234 19.9C11.8457 20.0426 11.9575 20.1543 12.1 20.1767C13.3759 20.3769 14.6842 20.4781 16.0002 20.4781C17.3162 20.4781 18.6245 20.3769 19.9004 20.1767C20.0429 20.1543 20.1547 20.0426 20.177 19.9C20.3772 18.6242 20.4784 17.3159 20.4784 15.9999C20.4784 14.6839 20.3772 13.3756 20.177 12.0997C20.1547 11.9572 20.0429 11.8454 19.9004 11.8231C18.6245 11.6229 17.3162 11.5217 16.0002 11.5217C14.6842 11.5217 13.3759 11.6229 12.1 11.8231C11.9575 11.8454 11.8457 11.9572 11.8234 12.0997C11.6232 13.3756 11.522 14.6839 11.522 15.9999Z"
                                                fill="#FF6666" />
                                            <path
                                                d="M13.0307 23.0246C12.7879 22.9987 12.5946 23.2277 12.6707 23.4597C13.3752 25.6069 14.4275 27.5722 15.7462 29.2112C15.8771 29.3739 16.1233 29.3739 16.2543 29.2112C17.5729 27.5722 18.6252 25.6069 19.3297 23.4597C19.4058 23.2277 19.2125 22.9987 18.9697 23.0246C17.9828 23.1297 16.9896 23.1819 16.0002 23.1819C15.0108 23.1819 14.0176 23.1297 13.0307 23.0246Z"
                                                fill="#FF6666" />
                                            <path
                                                d="M8.9755 13.0304C9.00137 12.7876 8.7724 12.5943 8.54035 12.6704C6.39316 13.3749 4.42788 14.4272 2.78895 15.7458C2.62618 15.8768 2.62618 16.123 2.78895 16.2539C4.42788 17.5726 6.39316 18.6249 8.54035 19.3293C8.7724 19.4055 9.00137 19.2122 8.9755 18.9694C8.87038 17.9824 8.8182 16.9893 8.8182 15.9999C8.8182 15.0105 8.87038 14.0173 8.9755 13.0304Z"
                                                fill="#FF6666" />
                                            <path
                                                d="M15.7462 2.78873C15.8771 2.62596 16.1233 2.62596 16.2543 2.78873C17.5729 4.42765 18.6252 6.39286 19.3297 8.54004C19.4058 8.77209 19.2125 9.00106 18.9697 8.9752C17.9828 8.87008 16.9896 8.8179 16.0002 8.8179C15.0108 8.8179 14.0177 8.87008 13.0307 8.9752C12.7879 9.00106 12.5946 8.77209 12.6707 8.54004C13.3752 6.39286 14.4275 4.42765 15.7462 2.78873Z"
                                                fill="#FF6666" />
                                            <path
                                                d="M23.0249 18.9694C22.999 19.2122 23.228 19.4055 23.4601 19.3293C25.6072 18.6249 27.5725 17.5726 29.2115 16.2539C29.3742 16.123 29.3742 15.8768 29.2115 15.7458C27.5725 14.4272 25.6073 13.3749 23.4601 12.6704C23.228 12.5943 22.999 12.7876 23.0249 13.0304C23.13 14.0173 23.1822 15.0105 23.1822 15.9999C23.1822 16.9893 23.13 17.9824 23.0249 18.9694Z"
                                                fill="#FF6666" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="lms-iconlist-title mb-2">{{ get_phrase('Ultimate Authority') }}</h5>
                                        <p class="lms-iconlist-subtitle">{{ get_phrase('Seize full control over your business through direct payment processing and management on GrowUp LMS') }}.</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start gap-3">
                                    <div class="lms-color-iconbox" style="--bg-color:#FFF5E6">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 2.66667C8.63622 2.66667 2.66669 8.6362 2.66669 16C2.66669 23.3638 8.63622 29.3333 16 29.3333C23.3638 29.3333 29.3334 23.3638 29.3334 16C29.3334 14.6085 29.1198 13.2645 28.7227 12.0004C28.5221 11.3618 27.8418 11.0066 27.2031 11.2072C26.5644 11.4078 26.2093 12.0882 26.4099 12.7268C26.734 13.7586 26.9091 14.8577 26.9091 16C26.9091 22.0249 22.0249 26.9091 16 26.9091C9.9751 26.9091 5.09093 22.0249 5.09093 16C5.09093 9.97508 9.9751 5.09091 16 5.09091C17.1423 5.09091 18.2414 5.26607 19.2732 5.59012C19.9118 5.79072 20.5922 5.43559 20.7928 4.79691C20.9934 4.15824 20.6383 3.47787 19.9996 3.27728C18.7355 2.88025 17.3916 2.66667 16 2.66667Z"
                                                fill="#FF9C07" />
                                            <path
                                                d="M25.697 5.69697C25.697 5.20671 25.4017 4.76473 24.9487 4.57712C24.4958 4.3895 23.9744 4.49321 23.6278 4.83987L19.9914 8.47624C19.7641 8.70355 19.6364 9.01186 19.6364 9.33333V10.6494L15.1429 15.1429C14.6696 15.6163 14.6696 16.3837 15.1429 16.8571C15.6163 17.3305 16.3838 17.3305 16.8571 16.8571L21.3506 12.3636H22.6667C22.9882 12.3636 23.2965 12.2359 23.5238 12.0086L27.1601 8.37225C27.5068 8.02559 27.6105 7.50423 27.4229 7.05129C27.2353 6.59836 26.7933 6.30303 26.303 6.30303H25.697V5.69697Z"
                                                fill="#FF9C07" />
                                            <path
                                                d="M16 8.72727C11.9834 8.72727 8.72729 11.9834 8.72729 16C8.72729 20.0166 11.9834 23.2727 16 23.2727C20.0166 23.2727 23.2727 20.0166 23.2727 16C23.2727 15.3306 22.7301 14.7879 22.0606 14.7879C21.3912 14.7879 20.8485 15.3306 20.8485 16C20.8485 18.6777 18.6778 20.8485 16 20.8485C13.3223 20.8485 11.1515 18.6777 11.1515 16C11.1515 13.3223 13.3223 11.1515 16 11.1515C16.6695 11.1515 17.2121 10.6088 17.2121 9.93939C17.2121 9.26996 16.6695 8.72727 16 8.72727Z"
                                                fill="#FF9C07" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="lms-iconlist-title mb-2">{{ get_phrase('Smart Tracking') }}</h5>
                                        <p class="lms-iconlist-subtitle">{{ get_phrase('Make smarter business decision and increase  sales by using enhanced tools to track your performance.') }}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start gap-3">
                                    <div class="lms-color-iconbox" style="--bg-color:#EBF6E2">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.6662 3.10045C14.6662 2.90333 14.4959 2.74892 14.3004 2.7738C11.8899 3.08039 9.68035 4.03057 7.84941 5.44666C7.69343 5.5673 7.68221 5.79694 7.82165 5.93638L8.94234 7.05707C9.46304 7.57777 9.46304 8.42199 8.94234 8.94269C8.42164 9.46339 7.57742 9.46339 7.05672 8.94269L5.93603 7.822C5.79659 7.68256 5.56696 7.69377 5.44631 7.84976C4.03023 9.6807 3.08004 11.8903 2.77345 14.3007C2.74858 14.4963 2.90299 14.6665 3.1001 14.6665H4.6662C5.40258 14.6665 5.99953 15.2635 5.99953 15.9999C5.99953 16.7363 5.40258 17.3332 4.6662 17.3332H3.1001C2.90299 17.3332 2.74858 17.5035 2.77345 17.699C3.08004 20.1095 4.03023 22.3191 5.44631 24.15C5.56696 24.306 5.79659 24.3172 5.93603 24.1778L7.05672 23.0571C7.57742 22.5364 8.42164 22.5364 8.94234 23.0571C9.46304 23.5778 9.46304 24.422 8.94234 24.9427L7.82165 26.0634C7.68221 26.2028 7.69343 26.4325 7.84941 26.5531C9.68035 27.9692 11.8899 28.9194 14.3004 29.226C14.4959 29.2508 14.6662 29.0964 14.6662 28.8993V27.3332C14.6662 26.5968 15.2632 25.9999 15.9995 25.9999C16.7359 25.9999 17.3329 26.5968 17.3329 27.3332V28.8993C17.3329 29.0964 17.5032 29.2508 17.6987 29.226C20.1092 28.9194 22.3187 27.9692 24.1496 26.5531C24.3056 26.4325 24.3169 26.2028 24.1774 26.0634L23.0567 24.9427C22.536 24.422 22.536 23.5778 23.0567 23.0571C23.5774 22.5364 24.4216 22.5364 24.9423 23.0571L26.063 24.1778C26.2025 24.3172 26.4321 24.306 26.5528 24.15C27.9688 22.3191 28.919 20.1095 29.2256 17.699C29.2505 17.5035 29.0961 17.3332 28.899 17.3332H27.3329C26.5965 17.3332 25.9995 16.7363 25.9995 15.9999C25.9995 15.2635 26.5965 14.6665 27.3329 14.6665H28.899C29.0961 14.6665 29.2505 14.4963 29.2256 14.3007C28.919 11.8902 27.9688 9.6807 26.5528 7.84976C26.4321 7.69377 26.2025 7.68256 26.063 7.822L24.9423 8.94269C24.4216 9.46339 23.5774 9.46339 23.0567 8.94269C22.536 8.42199 22.536 7.57777 23.0567 7.05707L24.1774 5.93638C24.3169 5.79694 24.3056 5.5673 24.1496 5.44666C22.3187 4.03057 20.1092 3.08039 17.6987 2.7738C17.5032 2.74892 17.3329 2.90333 17.3329 3.10045V4.66655C17.3329 5.40293 16.7359 5.99988 15.9995 5.99988C15.2632 5.99988 14.6662 5.40293 14.6662 4.66655V3.10045ZM12.7029 14.8038L9.9897 21.1346C9.75264 21.6878 10.3119 22.2471 10.8651 22.01L17.1959 19.2968C18.1399 18.8922 18.8922 18.14 19.2968 17.1959L22.01 10.8651C22.247 10.312 21.6877 9.75266 21.1346 9.98972L14.8038 12.7029C13.8597 13.1075 13.1075 13.8598 12.7029 14.8038Z"
                                                fill="#19B363" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="lms-iconlist-title mb-2">{{ get_phrase('Proven Reliability') }}</h5>
                                        <p class="lms-iconlist-subtitle">{{ get_phrase('Your confidence, Our efforts.') }}</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn gr-btn-primary ms-76px">
                                <span>{{ get_phrase('Get Started') }}</span>
                                <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                            </a>
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
                    <div class="max-w-726px mx-auto">
                        <h1 class="man-title-48px text-center mb-3">{{ get_phrase('How GrowUp LMS Helps You') }}</h1>
                        <p class="man-subtitle3-16px text-center">{{ get_phrase('Our flexible') }} <span class="cin2-text-dark fw-semibold">{{ get_phrase('multi-lesson') }}</span>
                            {{ get_phrase('approach offers diverse formats, enhancing engagement and supporting') }}
                            <span class="cin2-text-dark fw-semibold">{{ get_phrase('various learning styles') }}</span> {{ get_phrase('to meet every learner’s needs effectively.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-100px">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="gr-iconbox-card h-100">
                        <div class="lms-color-iconbox-circle mx-auto mb-44px" style="--bg-color:#EFF9FE">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path
                                    d="M35.9354 17.8999L33.6688 15.2666C33.2354 14.7666 32.8854 13.8333 32.8854 13.1666V10.3333C32.8854 8.5666 31.4354 7.1166 29.6687 7.1166H26.8354C26.1854 7.1166 25.2354 6.7666 24.7354 6.33327L22.1021 4.0666C20.9521 3.08327 19.0688 3.08327 17.9021 4.0666L15.2854 6.34993C14.7854 6.7666 13.8354 7.1166 13.1854 7.1166H10.3021C8.53542 7.1166 7.08542 8.5666 7.08542 10.3333V13.1833C7.08542 13.8333 6.73542 14.7666 6.31875 15.2666L4.06875 17.9166C3.10208 19.0666 3.10208 20.9333 4.06875 22.0833L6.31875 24.7333C6.73542 25.2333 7.08542 26.1666 7.08542 26.8166V29.6666C7.08542 31.4333 8.53542 32.8833 10.3021 32.8833H13.1854C13.8354 32.8833 14.7854 33.2333 15.2854 33.6666L17.9188 35.9333C19.0688 36.9166 20.9521 36.9166 22.1188 35.9333L24.7521 33.6666C25.2521 33.2333 26.1854 32.8833 26.8521 32.8833H29.6854C31.4521 32.8833 32.9021 31.4333 32.9021 29.6666V26.8333C32.9021 26.1833 33.2521 25.2333 33.6854 24.7333L35.9521 22.0999C36.9188 20.9499 36.9188 19.0499 35.9354 17.8999ZM26.9354 16.8499L18.8854 24.8999C18.6521 25.1333 18.3354 25.2666 18.0021 25.2666C17.6688 25.2666 17.3521 25.1333 17.1188 24.8999L13.0854 20.8666C12.6021 20.3833 12.6021 19.5833 13.0854 19.0999C13.5688 18.6166 14.3687 18.6166 14.8521 19.0999L18.0021 22.2499L25.1688 15.0833C25.6521 14.5999 26.4521 14.5999 26.9354 15.0833C27.4188 15.5666 27.4188 16.3666 26.9354 16.8499Z"
                                    fill="#49B6EE" />
                            </svg>
                        </div>
                        <h5 class="gr-iconbox-card-title">{{ get_phrase('Online Course') }}</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="gr-iconbox-card h-100">
                        <div class="lms-color-iconbox-circle mx-auto mb-44px" style="--bg-color:#E8FCF2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path
                                    d="M14.7421 7.66866C13.4088 1.90199 4.72543 1.88532 3.3921 7.66866C2.60877 11.052 4.75877 13.9187 6.62543 15.702C7.9921 16.9853 10.1421 16.9853 11.5088 15.702C13.3754 13.9187 15.5088 11.052 14.7421 7.66866ZM9.12543 10.3353C8.20877 10.3353 7.45877 9.58532 7.45877 8.66866C7.45877 7.75199 8.1921 7.00199 9.10877 7.00199H9.12543C10.0588 7.00199 10.7921 7.75199 10.7921 8.66866C10.7921 9.58532 10.0588 10.3353 9.12543 10.3353Z"
                                    fill="#19B363" />
                                <path
                                    d="M36.5342 27.6687C35.2009 21.902 26.4842 21.8853 25.1342 27.6687C24.3509 31.052 26.5009 33.9187 28.3842 35.702C29.7509 36.9853 31.9176 36.9853 33.2842 35.702C35.1676 33.9187 37.3176 31.052 36.5342 27.6687ZM30.9009 30.3353C29.9842 30.3353 29.2342 29.5853 29.2342 28.6687C29.2342 27.752 29.9676 27.002 30.8842 27.002H30.9009C31.8176 27.002 32.5676 27.752 32.5676 28.6687C32.5676 29.5853 31.8176 30.3353 30.9009 30.3353Z"
                                    fill="#19B363" />
                                <path
                                    d="M19.9971 32.9172H15.5305C13.5971 32.9172 11.9138 31.7505 11.2471 29.9505C10.5638 28.1505 11.0638 26.1672 12.5138 24.8839L25.8305 13.2339C26.6305 12.5339 26.6471 11.5839 26.4138 10.9339C26.1638 10.2839 25.5305 9.58386 24.4638 9.58386H19.9971C19.3138 9.58386 18.7471 9.0172 18.7471 8.33386C18.7471 7.65053 19.3138 7.08386 19.9971 7.08386H24.4638C26.3971 7.08386 28.0805 8.25053 28.7471 10.0505C29.4305 11.8505 28.9305 13.8339 27.4805 15.1172L14.1638 26.7672C13.3638 27.4672 13.3471 28.4172 13.5805 29.0672C13.8305 29.7172 14.4638 30.4172 15.5305 30.4172H19.9971C20.6805 30.4172 21.2471 30.9839 21.2471 31.6672C21.2471 32.3505 20.6805 32.9172 19.9971 32.9172Z"
                                    fill="#19B363" />
                            </svg>
                        </div>
                        <h5 class="gr-iconbox-card-title">{{ get_phrase('Coaching') }}</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="gr-iconbox-card h-100">
                        <div class="lms-color-iconbox-circle mx-auto mb-44px" style="--bg-color:#F4F3FF">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path
                                    d="M20.0026 3.3335C10.8193 3.3335 3.33594 10.8168 3.33594 20.0002C3.33594 29.1835 10.8193 36.6668 20.0026 36.6668C29.1859 36.6668 36.6693 29.1835 36.6693 20.0002C36.6693 10.8168 29.1859 3.3335 20.0026 3.3335ZM27.2526 25.9502C27.0193 26.3502 26.6026 26.5668 26.1693 26.5668C25.9526 26.5668 25.7359 26.5168 25.5359 26.3835L20.3693 23.3002C19.0859 22.5335 18.1359 20.8502 18.1359 19.3668V12.5335C18.1359 11.8502 18.7026 11.2835 19.3859 11.2835C20.0693 11.2835 20.6359 11.8502 20.6359 12.5335V19.3668C20.6359 19.9668 21.1359 20.8502 21.6526 21.1502L26.8193 24.2335C27.4193 24.5835 27.6193 25.3502 27.2526 25.9502Z"
                                    fill="#7E6FFF" />
                            </svg>
                        </div>
                        <h5 class="gr-iconbox-card-title">{{ get_phrase('Training Fits') }}</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="gr-iconbox-card h-100">
                        <div class="lms-color-iconbox-circle mx-auto mb-44px" style="--bg-color:#FFF2F0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path
                                    d="M19.9974 19.2168C15.3974 19.2168 11.6641 22.9501 11.6641 27.5501C11.6641 28.7835 11.9307 29.9501 12.4307 30.9835C12.5641 31.2835 12.7141 31.5668 12.8807 31.8335C14.3141 34.2501 16.9641 35.8835 19.9974 35.8835C23.0307 35.8835 25.6807 34.2501 27.1141 31.8335C27.2807 31.5668 27.4307 31.2835 27.5641 30.9835C28.0641 29.9501 28.3307 28.7835 28.3307 27.5501C28.3307 22.9501 24.5974 19.2168 19.9974 19.2168ZM23.4474 26.8335L19.8974 30.1168C19.6641 30.3335 19.3474 30.4501 19.0474 30.4501C18.7307 30.4501 18.4141 30.3335 18.1641 30.0835L16.5141 28.4335C16.0307 27.9501 16.0307 27.1501 16.5141 26.6668C16.9974 26.1835 17.7974 26.1835 18.2807 26.6668L19.0807 27.4668L21.7474 25.0001C22.2641 24.5335 23.0474 24.5668 23.5141 25.0668C23.9807 25.5668 23.9474 26.3501 23.4474 26.8335Z"
                                    fill="#FF5F4A" />
                                <path
                                    d="M33.6597 28.4502C33.0597 28.9835 32.4097 29.4335 31.7097 29.8002C31.1097 30.1002 30.5097 29.5169 30.6097 28.8502C30.6764 28.3669 30.7097 27.8669 30.7097 27.3502C30.7097 21.3835 25.843 16.5169 19.8764 16.5169C13.9097 16.5169 9.04304 21.3835 9.04304 27.3502C9.04304 28.1169 9.12637 28.8502 9.27637 29.5669C9.39304 30.1502 8.94304 30.7335 8.3597 30.5835C1.77637 28.9835 1.74304 18.8502 9.1097 18.3335H9.19304C3.84304 3.45021 26.4097 -2.49979 28.993 13.1335C36.2097 14.0502 39.1264 23.6669 33.6597 28.4502Z"
                                    fill="#FF5F4A" />
                            </svg>
                        </div>
                        <p class="gr-iconbox-card-subtitle">{{ get_phrase('Properly organize and truck all tasks and projects.') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="gr-iconbox-card h-100">
                        <div class="lms-color-iconbox-circle mx-auto mb-44px" style="--bg-color:#F1F6FF">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path
                                    d="M32.5172 9.75016L22.6172 4.0335C21.0005 3.10016 19.0005 3.10016 17.3672 4.0335L7.48385 9.75016C5.86719 10.6835 4.86719 12.4168 4.86719 14.3002V25.7002C4.86719 27.5668 5.86719 29.3002 7.48385 30.2502L17.3839 35.9668C19.0005 36.9002 21.0005 36.9002 22.6339 35.9668L32.5339 30.2502C34.1505 29.3168 35.1505 27.5835 35.1505 25.7002V14.3002C35.1339 12.4168 34.1339 10.7002 32.5172 9.75016ZM20.0005 12.2335C22.1505 12.2335 23.8839 13.9668 23.8839 16.1168C23.8839 18.2668 22.1505 20.0002 20.0005 20.0002C17.8505 20.0002 16.1172 18.2668 16.1172 16.1168C16.1172 13.9835 17.8505 12.2335 20.0005 12.2335ZM24.4672 27.7668H15.5339C14.1839 27.7668 13.4005 26.2668 14.1505 25.1502C15.2839 23.4668 17.4839 22.3335 20.0005 22.3335C22.5172 22.3335 24.7172 23.4668 25.8505 25.1502C26.6005 26.2502 25.8005 27.7668 24.4672 27.7668Z"
                                    fill="#508BFF" />
                            </svg>
                        </div>
                        <p class="gr-iconbox-card-subtitle">{{ get_phrase('Properly organize and truck all tasks and projects.') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="gr-iconbox-card h-100">
                        <div class="lms-color-iconbox-circle mx-auto mb-44px" style="--bg-color:#EAF5FF">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path d="M35 37.9166H5C4.31667 37.9166 3.75 37.35 3.75 36.6666C3.75 35.9833 4.31667 35.4166 5 35.4166H35C35.6833 35.4166 36.25 35.9833 36.25 36.6666C36.25 37.35 35.6833 37.9166 35 37.9166Z" fill="#008AFF" />
                                <path d="M9.33333 13.9667H6.66667C5.75 13.9667 5 14.7167 5 15.6333V30C5 30.9167 5.75 31.6667 6.66667 31.6667H9.33333C10.25 31.6667 11 30.9167 11 30V15.6333C11 14.7 10.25 13.9667 9.33333 13.9667Z" fill="#008AFF" />
                                <path d="M21.3411 8.6499H18.6745C17.7578 8.6499 17.0078 9.3999 17.0078 10.3166V29.9999C17.0078 30.9166 17.7578 31.6666 18.6745 31.6666H21.3411C22.2578 31.6666 23.0078 30.9166 23.0078 29.9999V10.3166C23.0078 9.3999 22.2578 8.6499 21.3411 8.6499Z" fill="#008AFF" />
                                <path d="M33.3333 3.3335H30.6667C29.75 3.3335 29 4.0835 29 5.00016V30.0002C29 30.9168 29.75 31.6668 30.6667 31.6668H33.3333C34.25 31.6668 35 30.9168 35 30.0002V5.00016C35 4.0835 34.25 3.3335 33.3333 3.3335Z" fill="#008AFF" />
                            </svg>
                        </div>
                        <p class="gr-iconbox-card-subtitle">{{ get_phrase('Properly organize and truck all tasks and projects.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="mb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <ul class="nav nav-pills gr-chart-nav-pills mb-52px mx-auto" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link gr-chart-nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Course Selling</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link gr-chart-nav-link active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Team Training</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab" tabindex="0">
                                <div class="max-w-750px mx-auto mb-32px">
                                    <h1 class="man-title-48px text-center mb-3">{{ get_phrase('Develop your brand, Fully yours to control') }}</h1>
                                    <p class="man-subtitle3-16px text-center">{{ get_phrase('An advanced LMS that turns your learning Into earning potentials. Share what you know and earn money on your own terms.') }}
                                        <span class="cin2-text-dark fw-semibold">{{ get_phrase('Turn your knowledge into business opportunity.') }}</span>
                                    </p>
                                </div>
                                <div class="mb-32px gr-chart-graph">
                                    <img class="chart" src="{{ asset('assets/img/growup/gr-chart-2.svg') }}" alt="">
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn gr-btn-primary">
                                        <span>{{ get_phrase('Get Started') }}</span>
                                        <img src="{{ get_phrase('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" tabindex="0">
                                <div class="max-w-750px mx-auto mb-32px">
                                    <h1 class="man-title-48px text-center mb-3">{{ get_phrase('Develop your brand, Fully yours to control') }}</h1>
                                    <p class="man-subtitle3-16px text-center">{{ get_phrase('An advanced LMS that turns your learning Into earning potentials. Share what you know and earn money on your own terms.') }}
                                        <span class="cin2-text-dark fw-semibold">{{ get_phrase('Turn your knowledge into business opportunity.') }}</span>
                                    </p>
                                </div>
                                <div class="mb-32px gr-chart-graph">
                                    <img class="chart" src="{{ get_phrase('assets/img/growup/gr-chart-1.svg') }}" alt="">
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn gr-btn-primary">
                                        <span>{{ get_phrase('Get Started') }}</span>
                                        <img src="{{ get_phrase('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                                    </a>
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
    <!-- Testimonial Area End -->


    <!-- QNA Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center">{{ get_phrase('Customers FAQ') }}</h1>
                </div>
            </div>
            <div class="row mb-100px justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-11">
                    <div>
                        <div class="accordion lms3-accordion" id="lms-qna-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaOne" aria-expanded="true" aria-controls="collapseqnaOne">
                                        {{ get_phrase('Can I use CreativeLMS at no cost?') }}
                                    </button>
                                </h2>
                                <div id="collapseqnaOne" class="accordion-collapse collapse show" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">{{ get_phrase('Yes! You can start with free plan  of GrowUp LMS at no cost and begin earning right away.') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaTwo" aria-expanded="false" aria-controls="collapseqnaTwo">
                                        {{ get_phrase('Can I close my account whenever I want?') }}
                                    </button>
                                </h2>
                                <div id="collapseqnaTwo" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">
                                            {{ get_phrase('In short, yes. If your organization is committed to training employees, partners, and customers, you can either enhance traditional methods or replace them entirely. Online training offers benefits like lower costs, reusable content, flexible scheduling, and detailed reporting, among others.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaThree" aria-expanded="false" aria-controls="collapseqnaThree">
                                        {{ get_phrase('Do I have to provide credit card details to sign up?') }}
                                    </button>
                                </h2>
                                <div id="collapseqnaThree" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">
                                            {{ get_phrase('Absolutely! You can share course links directly, enabling users to access the content without registering. However, note that progress made by unregistered users will not be tracked.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaFour" aria-expanded="false" aria-controls="collapseqnaFour">
                                        {{ get_phrase('Does GrowUp LMS take a percentage of my earnings?') }}
                                    </button>
                                </h2>
                                <div id="collapseqnaFour" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">{{ get_phrase('Yes, you can evaluate knowledge through quizzes, surveys, and assignments.') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaFive" aria-expanded="false" aria-controls="collapseqnaFive">
                                        {{ get_phrase('Is support included with my plan?') }}
                                    </button>
                                </h2>
                                <div id="collapseqnaFive" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">
                                            {{ get_phrase('Yes, GrowUp LMS offers robust communication tools. You can make global announcements visible to all users, send direct messages to individuals or groups, and automate emails for events like recertification or course completion.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaSix" aria-expanded="false" aria-controls="collapseqnaSix">
                                        {{ get_phrase('Will I need a web host?') }}
                                    </button>
                                </h2>
                                <div id="collapseqnaSix" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">{{ get_phrase('No matter your size, GrowUp LMS offers affordable plans for everyone—from solo entrepreneurs to SMBs and growing enterprises. That’s why over 28000  teams rely on GrowUp LMS for their training needs.') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="wow animate__fadeInUp" data-wow-delay=".3s">
        <div class="container">
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="lms-joining-area">
                        <h1 class="man-title-48px fw-semibold text-white mb-12px text-center">{{ get_phrase('Trainer? Creator? Smart cookie?') }}</h1>
                        <p class="mb-32px man-subtitle2-20px text-white text-center">{{ get_phrase('Join GrowUp LMS to be part of the creator community') }}</p>
                        <div class="text-center">
                            <a href="#" class="btn cin1-btn-outline-white">{{ get_phrase('Join us free!') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $('#type-company-name').on('input', function() {
            $('.company-name').text($(this).val());
        });
    </script>
@endpush
