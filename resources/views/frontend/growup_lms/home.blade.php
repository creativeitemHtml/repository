@extends('global.index')
@section('content')
    @include('frontend.growup_lms.lms_header')

    @php
        use App\Models\SaasCompany;
    @endphp

    <!-- Get Started Area Start -->
    <section class="lms-get-started-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-6 col-md-6 order-2 order-md-1 ">
                    <div class="md-max-w-584px">
                        <h1 class="man-title-60px mb-3">{{ get_phrase('Your skill pays.') }} <span class="skin-color">{{ get_phrase('Start earning') }}</span> {{ get_phrase('today!') }}</h1>
                        <p class="man-subtitle3-16px mb-32px pe-xl-4">An advanced LMS that turns your learning Into earning potentials.Share what you know and earn money on your own terms.<span class="fw-medium cin2-text-dark">Turn your knowledge into business opportunity.</span></p>
                        <a href="#" class="lms-video-modal-btn" data-bs-toggle="modal" data-bs-target="#video-modal">
                            <span>Watch demo</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 order-1 order-md-2">
                    <div>
                        <h3 class="man-title2-20px mb-4">Get started in 30 seconds</h3>
                        <form action="{{ route('lms.company_lms_register') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="mb-3">
                                <p class="ci2-input-value-text mb-2">
                                    www.creativeitem.com/
                                    <span class="company-name"></span>
                                </p>
                                <input type="text" class="form-control ci2-form-control" id="type-company-name" name="company_name" placeholder="Your company name*">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control ci2-form-control" id="" name="email" @auth value="{{ auth()->user()->email }}" @endauth placeholder="Your Email Address*">
                            </div>
                            <div class="mb-3">
                                <div class="input-password-wrap">
                                    <div class="password-icons lock toggle-password" toggle=".password-field1">
                                        <img class="eye-unlock" src="{{ asset('assets/img/icon/eye-gray-18.svg') }}" alt="">
                                        <img class="eye-lock" src="{{ asset('assets/img/icon/eye-slash-gray-18.svg') }}" alt="">
                                    </div>
                                    <input type="password" id="password1" name="password" class="form-control ci2-form-control password-field1" placeholder="Password*">
                                </div>
                            </div>
                            <div class="mb-20px">
                                <div class="form-check lms-form-check">
                                    <input class="form-check-input lms-form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label lms-form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#" class="cin2-text-dark fw-semibold">Terms of Service</a> and <a href="#" class="cin2-text-dark fw-semibold">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn lms-btn-purple-gradient w-100">
                                <span>Free Sign Up</span>
                                <img src="{{ asset('assets/img/icon/angle-right-white-24.svg') }}" alt="icon">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get Started Area End -->


    <!-- What can LMS Area Start -->
    <section class="lms-main-gray-section mb-100px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="pe-lg-1 pe-xl-2">
                        <!-- Left -->
                        <div class="lms2-video-wrap">
                            <div class="plyr__video-embed" id="player-2">
                                <iframe src="https://www.youtube.com/embed/5YHAVhEJ9TM?si=GrmhAZyUahBciHUm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-1 ps-xl-2">
                        <div>
                            <h1 class="man-title-48px mb-3">What can <span class="skin-color">GrowUp LMS</span> do for you ?</h1>
                            <p class="man-subtitle3-16px cin2-text-dark mb-32px">GrowUp LMS supercharges your learning management With engaging features and seamless delivery. Whatever you need, we’ve got the best tools To help you <span class="fw-bold">grow your business.</span></p>
                            <a href="#" class="btn cin3-btn-outline-secondary px-32px">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What can LMS Area End -->


    <!-- Make Profit Area Start -->
    <section class="mt-100px mb-100px">
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-3">Dream it, Launch it, <span class="skin-color">Make profit!</span></h1>
                    <p class="man-subtitle3-16px text-center"><span class="cin2-text-dark">GrowUp LMS</span> makes it happen fast</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="profit-dark-area">
                        <div class="profit-blue-wrap">
                            <h1 class="man-title-60px fw-extrabold text-white"><span class="counter">20</span>k+</h1>
                            <p class="man-subtitle3-16px text-white mb-20px">Satisfied clients</p>
                            <p class="man-gray-text-14px">Our awesome clients are</p>
                            <p class="man-gray-text-14px">industry experts around the world</p>
                        </div>
                        <div class="profit-white-wrap profit-white-wrap-2nd">
                            <h1 class="text-center man-title-60px fw-extrabold"><span class="counter">12</span>+</h1>
                            <p class="man-subtitle3-16px cin2-text-dark text-center">Years Experience</p>
                        </div>
                        <div class="profit-white-wrap">
                            <h1 class="text-center man-title-60px fw-extrabold"><span class="counter">40</span></h1>
                            <p class="man-subtitle3-16px cin2-text-dark text-center">Years Experience</p>
                        </div>
                        <div class="profit-white-wrap">
                            <h1 class="text-center man-title-60px fw-extrabold"><span class="counter">1200</span>+</h1>
                            <p class="man-subtitle3-16px cin2-text-dark text-center">Clients Review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Make Profit Area End -->


    <!-- Training Plan Area Start -->
    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="pe-lg-1 pe-xl-2">
                        <div>
                            <h1 class="man-title-48px mb-32px">Find your perfect <span class="skin-color">training</span> plan.</h1>
                            <ul class="d-flex flex-column gap-4">
                                <li class="d-flex align-items-start gap-3">
                                    <div class="lms-color-iconbox" style="--bg-color:#EBF6E2">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16 29.3334C8.63616 29.3334 2.66663 23.3638 2.66663 16C2.66663 8.63622 8.63616 2.66669 16 2.66669C23.3638 2.66669 29.3333 8.63622 29.3333 16C29.3333 23.3638 23.3638 29.3334 16 29.3334ZM22.9428 13.6095C23.4635 13.0888 23.4635 12.2446 22.9428 11.7239C22.4221 11.2032 21.5778 11.2032 21.0571 11.7239L14 18.7811L10.9428 15.7239C10.4221 15.2032 9.57785 15.2032 9.05715 15.7239C8.53645 16.2446 8.53645 17.0888 9.05715 17.6095L13.0571 21.6095C13.5778 22.1302 14.4221 22.1302 14.9428 21.6095L22.9428 13.6095Z"
                                                fill="#45B736" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="lms-iconlist-title mb-12px">Monetize knowledge</h5>
                                        <p class="lms-iconlist-subtitle">Convert your expertise into earning through Digital downloads, courses, coaching.</p>
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
                                        <h5 class="lms-iconlist-title mb-12px">Hassle-Free management</h5>
                                        <p class="lms-iconlist-subtitle">Let us manage the heavy liftings, while you focus on creation.</p>
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
                                        <h5 class="lms-iconlist-title mb-12px">Carefree Learning</h5>
                                        <p class="lms-iconlist-subtitle">Nothing to worry about, Just explore.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="ps-lg-1 ps-xl-2 wow animate__fadeInRight" data-wow-delay=".3s">
                        <div class="w-100">
                            <img class="w-100" src="{{ asset('assets/img/lms/training-plan-banner.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Training Plan Area End -->


    <!-- Sell Boldly Area Start -->
    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="pe-lg-1 pe-xl-2">
                        <div class="w-100 wow animate__fadeInLeft" data-wow-delay=".3s">
                            <img class="w-100" src="{{ asset('assets/img/lms/sell-boldly-banner.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ps-lg-1 ps-xl-2">
                        <div>
                            <h1 class="man-title-48px"><span class="skin-color">Sell</span> boldly</h1>
                            <h1 class="man-title-48px mb-32px">Win confidently.</h1>
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
                                        <h5 class="lms-iconlist-title mb-12px">Ultimate Authority</h5>
                                        <p class="lms-iconlist-subtitle">Seize full control over your business through direct payment processing and management GrowUp LMS.</p>
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
                                        <h5 class="lms-iconlist-title mb-12px">Smart Tracking</h5>
                                        <p class="lms-iconlist-subtitle">Make smarter business decision and increase  sales by using enhanced tools to track your performance.</p>
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
                                        <h5 class="lms-iconlist-title mb-12px">Proven Reliability</h5>
                                        <p class="lms-iconlist-subtitle">Your confidence, Our efforts.</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn cin3-btn-outline-secondary px-32px">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sell Boldly Area End -->


    <!-- Develop Your Brand Area Start -->
    <section class="mb-100px">
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-20px">Develop your <span class="skin-color">brand</span>, Fully yours to <span class="skin-color">control</span></h1>
                    <p class="man-subtitle2-20px text-center">Bring your brand, content, audience into one unified platform</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="lms-graph-main-wrap">
                        <div class="text-center">
                            <a href="#" class="btn cin3-btn-outline-secondary px-32px lms-graph-btn">Explore us</a>
                        </div>
                        <div class="lms-graph-responsive">
                            <div class="lms-graph-area">
                                <div class="lms-develop-graph-img">
                                    <img src="{{ asset('assets/img/lms/lms-develop-graph.svg') }}" alt="graph">
                                </div>
                                <div class="graph-details-wrap">
                                    <div>
                                        <h4 class="mb-12px lms-graph-title" style="--text-color:#4629F0">Start</h4>
                                        <ul class="lms-graph-tag-group">
                                            <li class="lms-graph-tag">Website</li>
                                            <li class="lms-graph-tag">Email list</li>
                                            <li class="lms-graph-tag">Blog</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="mb-12px lms-graph-title" style="--text-color:#8A42CA">Build</h4>
                                        <ul class="lms-graph-tag-group">
                                            <li class="lms-graph-tag">Downloads</li>
                                            <li class="lms-graph-tag">Coaching</li>
                                            <li class="lms-graph-tag">Community</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="mb-12px lms-graph-title" style="--text-color:#CD579B">Grow</h4>
                                        <ul class="lms-graph-tag-group">
                                            <li class="lms-graph-tag">Courses</li>
                                            <li class="lms-graph-tag">Webinars</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="mb-12px lms-graph-title" style="--text-color:#FA5C5A">Scale</h4>
                                        <ul class="lms-graph-tag-group">
                                            <li class="lms-graph-tag">Affiliates</li>
                                            <li class="lms-graph-tag">Teams</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Develop Your Brand Area End -->


    <!-- Profit Tab Area Start -->
    <section class="mb-100px">
        <div class="container">
            <div class="row mb-60px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center max-w-804px mx-auto">What if smart learning could mean bigger <span class="skin-color">profit?</span></h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div>
                        <!-- Accordion -->
                        <div class="accordion lms-secondary-accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <!-- toggle banner link "data-img-src" -->
                                    <button class="accordion-button" data-img-src="{{ asset('assets/img/lms/lms-profit-tab-banner1.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Virtual mentoring
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">GrowUp LMS offers personalized guidance and support through interactive, digital communication tools.</p>
                                        <!-- for mobile banner -->
                                        <img class="d-block d-md-none lms-secondary-accordion-img" src="{{ asset('assets/img/lms/lms-profit-tab-banner1.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <!-- toggle banner link "data-img-src" -->
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/lms/lms-profit-tab-banner2.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Online Courses
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">You can launch interactive online courses with flexible, user-friendly learning features.</p>
                                        <!-- for mobile banner -->
                                        <img class="d-block d-md-none lms-secondary-accordion-img" src="{{ asset('assets/img/lms/lms-profit-tab-banner2.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <!-- toggle banner link "data-img-src" -->
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/lms/lms-profit-tab-banner3.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Corporate Training
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">A perfect LMS that enhances corporate training with tailored, interactive modules and real-time progress tracking.</p>
                                        <!-- for mobile banner -->
                                        <img class="d-block d-md-none lms-secondary-accordion-img" src="{{ asset('assets/img/lms/lms-profit-tab-banner3.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 d-none d-md-block">
                    <div class="px-md-2 px-lg-3 px-xl-4 wow animate__fadeInRight" data-wow-delay=".3s">
                        <img class="lms-secondary-accordion-img w-100  ps-lg-2 ps-xl-4" src="{{ asset('assets/img/lms/lms-profit-tab-banner1.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profit Tab Area End -->


    <!-- Testimonial Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-20px">What Our <span class="skin-color">Customers</span> Say</h1>
                    <p class="man-subtitle3-16px text-center">Your success story is our greatest hit. Each win is a testament to our game-changing impact</p>
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
                                    {{-- <div class="swiper-slide">
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
                                    </div> --}}
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


    <!-- Blue Area Start -->
    <section class="wow animate__fadeInUp" data-wow-delay=".3s">
        <div class="container">
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="lms-joining-area">
                        <h1 class="man-title-60px text-white mb-32px text-center">Trainer? Creator? Smart cookie?</h1>
                        <h4 class="man-title-48px fw-semibold text-white mb-2 text-center">You are on the right platform</h4>
                        <p class="mb-32px man-subtitle2-20px text-white text-center">Join GrowUp LMS to be part of the creator community</p>
                        <div class="text-center">
                            <a href="#" class="btn cin1-btn-outline-white">Join us free!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blue Area End -->
@endsection

@push('js')
    <script>
        $('#type-company-name').on('input', function() {
            $('.company-name').text($(this).val());
        });
    </script>
@endpush
