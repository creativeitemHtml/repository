@extends('global.index')
@section('content')
    @include('frontend.growup_lms.lms_header')

    @php
        use App\Models\SaasCompany;
    @endphp

    <section>
        <div class="container">
            <div class="row mt-60px mb-100px">
                <div class="col-12">
                    <div>
                        <div class="gr-main-hero-title-area">
                            <h1 class="man-title-60px text-center mb-3">Sell, Earn, Train and GrowUp</h1>
                            <p class="man-subtitle3-16px text-center max-w-750px mx-auto mb-32px">An advanced LMS that turns your learning Into earning potentials. Share what you know and earn money on your own terms. <span class="cin2-text-dark fw-semibold">Turn your knowledge into business
                                    opportunity.</span></p>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('register.company.form', 'growup-lms') }}" class="btn lms-btn-purple-gradient px-4 gap-1">
                                    <span>Get Started Free</span>
                                    <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="icon">
                                </a>
                            </div>
                        </div>
                        <div class="gr-main-video-area">
                            <div class="lms2-video-wrap max-w-941px mx-auto">
                                <div class="plyr__video-embe" id="player">
                                    <iframe src="https://www.youtube.com/embed/5YHAVhEJ9TM?si=GrmhAZyUahBciHUm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->


    <!-- Key Features List Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-3">Everything you need is right here.</h1>
                    <p class="man-subtitle3-16px text-center">Our <span class="cin2-text-dark fw-semibold">key features</span> you must need</p>
                </div>
            </div>
            <div class="gr-radio-list-grid mb-100px">
                <ul class="gr-radio-list-group">
                    <li class="gr-radio-list">Drip courses</li>
                    <li class="gr-radio-list">Quiz</li>
                    <li class="gr-radio-list">Course Discussion</li>
                    <li class="gr-radio-list">Course Bundle</li>
                    <li class="gr-radio-list">Seat Limit</li>
                    <li class="gr-radio-list">Coupons Discount</li>
                    <li class="gr-radio-list">Embeds</li>
                    <li class="gr-radio-list">Wishlist</li>
                    <li class="gr-radio-list">Cart</li>
                    <li class="gr-radio-list">Course Catalog</li>
                </ul>
                <ul class="gr-radio-list-group">
                    <li class="gr-radio-list">Course Certificate</li>
                    <li class="gr-radio-list">Team progress</li>
                    <li class="gr-radio-list">Offline Access</li>
                    <li class="gr-radio-list">Lesson Builder</li>
                    <li class="gr-radio-list">Live Classes</li>
                    <li class="gr-radio-list">Multi Lesson Type</li>
                    <li class="gr-radio-list">Video Watermarking</li>
                    <li class="gr-radio-list">SEO Optimization</li>
                    <li class="gr-radio-list">Blog & Content</li>
                    <li class="gr-radio-list">Email Newsletter</li>
                </ul>
                <ul class="gr-radio-list-group">
                    <li class="gr-radio-list">Social Media Sharing</li>
                    <li class="gr-radio-list">Access Control</li>
                    <li class="gr-radio-list">Device Limitations</li>
                    <li class="gr-radio-list">Messaging</li>
                    <li class="gr-radio-list">Page Builder</li>
                    <li class="gr-radio-list">Multimedia Content Support</li>
                    <li class="gr-radio-list">Grading & Feedback</li>
                    <li class="gr-radio-list">Advanced Search</li>
                    <li class="gr-radio-list">Cross-Device Access</li>
                    <li class="gr-radio-list">Role Management</li>
                </ul>
                <ul class="gr-radio-list-group">
                    <li class="gr-radio-list">AI-Generated Content</li>
                    <li class="gr-radio-list">Multi-Language</li>
                    <li class="gr-radio-list">API Integration</li>
                    <li class="gr-radio-list">Mobile App</li>
                    <li class="gr-radio-list">Payment Gateway</li>
                    <li class="gr-radio-list">Instant Payouts</li>
                    <li class="gr-radio-list">Global Tax</li>
                    <li class="gr-radio-list">Revenue Report</li>
                    <li class="gr-radio-list">Offline Payment</li>
                    <li class="gr-radio-list">Subscription Payments</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Key Features List Area End -->


    <!-- Training Plan Area Start -->
    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="pe-lg-1 pe-xl-2">
                        <div>
                            <h1 class="man-title-48px mb-32px">Find your perfect training plan.</h1>
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
                                        <h5 class="lms-iconlist-title mb-2 cin2-text-dark">Monetize knowledge</h5>
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
                                        <h5 class="lms-iconlist-title mb-2 cin2-text-dark">Hassle-Free management</h5>
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
                                        <h5 class="lms-iconlist-title mb-2 cin2-text-dark">Carefree Learning</h5>
                                        <p class="lms-iconlist-subtitle">Nothing to worry about, Just explore.</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('register.company.form', 'growup-lms') }}" class="btn gr-btn-primary ms-76px">
                                <span>Get Started</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="ps-lg-1 ps-xl-2 wow animate__fadeInUp" data-wow-delay=".3s">
                        <div class="w-100">
                            <img class="w-100" src="{{ asset('assets/img/growup/gr-training-plan-banner2.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Training Plan Area End -->


    <!-- Sell Make Money Area Start -->
    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="pe-lg-1 pe-xl-2">
                        <div class="w-100 wow animate__fadeInUp" data-wow-delay=".3s">
                            <img class="w-100" src="{{ asset('assets/img/growup/gr-make-money-banner2.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ps-lg-1 ps-xl-2">
                        <div>
                            <h1 class="man-title-48px mb-32px">Sell with confidence & make money</h1>
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
                                        <h5 class="lms-iconlist-title mb-2">Ultimate Authority</h5>
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
                                        <h5 class="lms-iconlist-title mb-2">Smart Tracking</h5>
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
                                        <h5 class="lms-iconlist-title mb-2">Proven Reliability</h5>
                                        <p class="lms-iconlist-subtitle">Your confidence, Our efforts.</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('register.company.form', 'growup-lms') }}" class="btn gr-btn-primary ms-76px">
                                <span>Get Started</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sell Make Money Area End -->


    <!-- GrowUp LMS Help Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <div class="max-w-726px mx-auto">
                        <h1 class="man-title-48px text-center mb-3">How GrowUp LMS Helps You</h1>
                        <p class="man-subtitle3-16px text-center">Our flexible <span class="cin2-text-dark fw-semibold">multi-lesson</span> approach offers diverse formats, enhancing engagement and supporting <span class="cin2-text-dark fw-semibold">various learning styles</span> to meet every
                            learner’s needs effectively.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-100px justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="gr-large-iconbox mb-4 mx-auto" style="--bg-color: linear-gradient(180deg, #64EAA0 0%, #2AC871 100%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <path
                                d="M62.4832 87.5H37.5127C34.0669 87.5 32.1041 83.5415 34.1832 80.779L46.6665 64.1663C48.3373 61.9454 51.6581 61.9454 53.329 64.1663L65.8127 80.779C67.8918 83.5415 65.929 87.5 62.4832 87.5ZM65.2206 53.6621C65.4873 52.4246 65.625 51.1917 65.625 50C65.625 41.3833 58.6125 34.375 50 34.375C41.3875 34.375 34.375 41.3833 34.375 50C34.375 51.1917 34.5085 52.4246 34.7794 53.6621C35.146 55.3496 36.8125 56.4245 38.5 56.0537C40.1833 55.6912 41.254 54.0251 40.8915 52.3376C40.7124 51.521 40.6291 50.7543 40.6291 49.9959C40.6291 44.8251 44.8374 40.6209 50.0041 40.6209C55.1707 40.6209 59.3791 44.8251 59.3791 49.9959C59.3791 50.7543 59.2916 51.5168 59.1166 52.3376C58.7541 54.0251 59.8248 55.687 61.5082 56.0537C61.7332 56.1037 61.9542 56.1249 62.175 56.1249C63.6083 56.1249 64.904 55.1246 65.2206 53.6621ZM73.1583 66.0248C76.4083 61.3206 78.125 55.7792 78.125 50C78.125 34.4917 65.5083 21.875 50 21.875C34.4917 21.875 21.875 34.4917 21.875 50C21.875 55.7792 23.5917 61.3206 26.8417 66.0248C27.8167 67.4414 29.7582 67.8046 31.1915 66.8213C32.6082 65.8421 32.9668 63.8912 31.9834 62.4746C29.4584 58.8204 28.1209 54.5042 28.1209 50C28.1209 37.9375 37.9334 28.125 49.9959 28.125C62.0584 28.125 71.8709 37.9375 71.8709 50C71.8709 54.5042 70.5376 58.8162 68.0084 62.4746C67.0293 63.8954 67.3873 65.8421 68.7998 66.8213C69.3457 67.1963 69.9624 67.3747 70.5749 67.3747C71.5749 67.3747 72.5499 66.9039 73.1583 66.0248ZM80.6875 76.5544C87.0958 69.2127 90.625 59.7833 90.625 50C90.625 27.6 72.4 9.375 50 9.375C27.6 9.375 9.375 27.6 9.375 50C9.375 59.7833 12.9042 69.2127 19.3125 76.5544C20.4459 77.8544 22.4165 77.9878 23.7249 76.8544C25.0249 75.7211 25.1625 73.7457 24.025 72.4457C18.6083 66.2415 15.625 58.2708 15.625 50C15.625 31.0458 31.0458 15.625 50 15.625C68.9542 15.625 84.375 31.0458 84.375 50C84.375 58.2708 81.3917 66.2415 75.975 72.4457C74.8417 73.7457 74.9751 75.7211 76.2751 76.8544C76.871 77.3711 77.5998 77.6245 78.329 77.6245C79.204 77.6245 80.0708 77.2627 80.6875 76.5544Z"
                                fill="white" />
                        </svg>
                    </div>
                    <h4 class="man-title2-20px text-center cin1-text-dark fw-semibold">Online Course</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="gr-large-iconbox mb-4 mx-auto" style="--bg-color: linear-gradient(180deg, #D5C9FF 0%, #665EFF 100%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <path d="M57.6289 71.9584H22.0456C20.3197 71.9584 18.9206 73.3575 18.9206 75.0834C18.9206 76.8093 20.3197 78.2084 22.0456 78.2084H57.6289C59.3548 78.2084 60.7539 76.8093 60.7539 75.0834C60.7539 73.3575 59.3548 71.9584 57.6289 71.9584Z" fill="white" />
                            <path
                                d="M81.5873 31.2917V27.6667C81.5918 23.2069 78.0842 19.5341 73.6289 19.3334H18.0456C15.8868 19.3768 13.8351 20.2822 12.3479 21.8477C10.8607 23.4131 10.0617 25.5085 10.1289 27.6667V56.8334C10.1234 61.2778 13.6067 64.9445 18.0456 65.1667H61.7123V39.25C61.735 34.8642 65.2848 31.3145 69.6706 31.2917H81.5873Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M71.2539 34.75H83.7539C85.4339 34.8044 87.0234 35.5244 88.1723 36.7514C89.3211 37.9784 89.9351 39.6118 89.8789 41.2917V74.0417C89.9351 75.7217 89.3211 77.355 88.1723 78.582C87.0234 79.809 85.4339 80.529 83.7539 80.5834H71.2539C67.749 80.47 64.9937 77.5472 65.0872 74.0417V41.2917C65.0165 37.7949 67.7591 34.8856 71.2539 34.75ZM75.5039 73.4584C75.5039 74.609 76.4367 75.5417 77.5872 75.5417C78.7378 75.5417 79.6706 74.609 79.6706 73.4584C79.6706 72.3078 78.7378 71.375 77.5872 71.375C76.446 71.3972 75.5261 72.3171 75.5039 73.4584Z"
                                fill="white" />
                        </svg>
                    </div>
                    <h4 class="man-title2-20px text-center cin1-text-dark fw-semibold">Coaching</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="gr-large-iconbox mb-4 mx-auto" style="--bg-color: linear-gradient(180deg, #FEB79D 0%, #FD6786 100%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <path
                                d="M65.9164 44.7083C65.2914 44.2916 65.2501 43.4169 65.7501 42.8752C68.9168 39.1669 70.875 34.4167 70.875 29.1667C70.875 27.625 70.7084 26.1252 70.3751 24.6669C70.3751 24.6669 70.2916 24.3336 70.2916 24.2086C70.2916 23.542 70.8167 22.9874 71.4834 22.9457C71.525 22.9457 72.0415 22.9167 72.2499 22.9167C80.0415 22.9167 86.125 30.5419 83.375 38.7085C82.1667 42.3335 79.0832 45.1665 75.4166 46.1248C71.8749 47.0415 68.5414 46.375 65.9164 44.7083ZM77.7918 50.7086C77.0002 50.7086 76.4999 51.2499 76.4999 51.9583C76.4999 52.2499 76.7332 52.6248 76.9582 52.8748C81.9165 57.9998 84.2499 65.1666 84.2499 72.2916V76C84.2499 76.5833 84.75 77.0834 85.375 77.0834H91.6667C92.8333 77.0834 93.75 76.1667 93.75 75V66.7084C93.75 59.3334 89.5835 50.7086 77.7918 50.7086ZM24.5834 46.1248C28.1251 47.0415 31.4586 46.375 34.0836 44.7083C34.7086 44.2916 34.7499 43.4169 34.2499 42.8752C31.0832 39.1669 29.125 34.4167 29.125 29.1667C29.125 27.625 29.2916 26.1252 29.6249 24.6669C29.6249 24.6669 29.7084 24.3336 29.7084 24.2086C29.7084 23.542 29.1833 22.9874 28.5166 22.9457C28.475 22.9457 27.9585 22.9167 27.7501 22.9167C19.9585 22.9167 13.875 30.5419 16.625 38.7085C17.8333 42.3335 20.9168 45.1665 24.5834 46.1248ZM23.5001 51.9583C23.5001 51.2499 22.9998 50.7086 22.2081 50.7086C10.4165 50.7086 6.25 59.3334 6.25 66.7084V75C6.25 76.1667 7.16667 77.0834 8.33333 77.0834H14.625C15.25 77.0834 15.7501 76.5833 15.7501 76V72.2916C15.7501 65.1666 18.0835 57.9998 23.0418 52.8748C23.2668 52.6248 23.5001 52.2499 23.5001 51.9583ZM50.0336 43.75C58.0752 43.75 64.6169 37.2084 64.6169 29.1667C64.6169 21.125 58.0752 14.5834 50.0336 14.5834C41.9919 14.5834 35.4502 21.125 35.4502 29.1667C35.4502 37.2084 41.9919 43.75 50.0336 43.75ZM57.4041 51.621H42.5919C27.3835 51.621 21.9874 62.7541 21.9874 72.2916V83.3334C21.9874 84.4834 22.9207 85.4167 24.0707 85.4167H75.9252C77.0752 85.4167 78.0085 84.4834 78.0085 83.3334V72.2916C78.0127 62.7541 72.6166 51.621 57.4041 51.621Z"
                                fill="white" />
                        </svg>
                    </div>
                    <h4 class="man-title2-20px text-center cin1-text-dark fw-semibold">Training Fits</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- GrowUp LMS Help Area End -->



    <!-- Develop Your Brand Area Start -->
    <section class="mb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <nav class="gr-scrollspy-btn-nav">
                            <ul class="gr-scrollspy-btn-wrap">
                                <li>
                                    <a class="gr-scrollspy-btn active" href="#scrollspyContent1">Course Selling</a>
                                </li>
                                <li>
                                    <a class="gr-scrollspy-btn" href="#scrollspyContent2">Team Training</a>
                                </li>
                                <!-- <li>
                                                                                        <a class="gr-scrollspy-btn" href="#scrollspyContent3">last</a>
                                                                                      </li> -->
                            </ul>
                        </nav>
                        <div>
                            <div class="row pt-32px" id="scrollspyContent1">
                                <div class="col-12">
                                    <div class="mb-52px">
                                        <h1 class="man-title-48px text-center mb-3">Sell your Courses and Earn Today!</h1>
                                        <p class="man-subtitle3-16px text-center max-w-750px mx-auto">Unlock your potential with our expert-led courses! Gain practical skills, boost your career, and learn at your own pace. <span class="cin2-text-dark fw-semibold">Start your journey today and elevate
                                                your expertise!</span></p>
                                    </div>
                                    <div class="gr-first-cards-wrap">
                                        <div class="gr-shadow-card max-w-360px">
                                            <h4 class="man-title2-20px fw-semibold cin2-text-dark mb-12px">1. Create Your Course</h4>
                                            <p class="man-subtitle3-16px">Set up, personalize, and manage your course content.</p>
                                        </div>
                                        <div class="gr-shadow-card max-w-360px">
                                            <h4 class="man-title2-20px fw-semibold cin2-text-dark mb-12px">2. Set Your Price</h4>
                                            <p class="man-subtitle3-16px">Define pricing and payment options for your course.</p>
                                        </div>
                                        <div class="gr-shadow-card max-w-360px">
                                            <h4 class="man-title2-20px fw-semibold cin2-text-dark mb-12px">3. Launch & Sell</h4>
                                            <p class="man-subtitle3-16px">Publish your course and start selling to students.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-100px" id="scrollspyContent2">
                                <div class="col-12">
                                    <div class="mb-52px">
                                        <h1 class="man-title-48px text-center mb-3">Success Starts with a Strong Team</h1>
                                        <p class="man-subtitle3-16px text-center max-w-750px mx-auto">Build a culture of excellence with our training programs, designed to improve <span class="cin2-text-dark fw-semibold">performance, communication, and leadership.</span></p>
                                    </div>
                                    <div class="gr-second-cards-wrap">
                                        <div class="gr-second-inner-cards">
                                            <div class="gr-shadow-card max-w-360px">
                                                <h4 class="man-title2-20px fw-semibold cin2-text-dark mb-12px">1. Create Teams</h4>
                                                <p class="man-subtitle3-16px">Create team groups and assign members seamlessly.</p>
                                            </div>
                                            <div class="gr-shadow-card max-w-360px">
                                                <h4 class="man-title2-20px fw-semibold cin2-text-dark mb-12px">2. Assign Courses</h4>
                                                <p class="man-subtitle3-16px">Select and allocate relevant courses or training modules.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="gr-shadow-card max-w-360px">
                                                <h4 class="man-title2-20px fw-semibold cin2-text-dark mb-12px">3. Track Progress</h4>
                                                <p class="man-subtitle3-16px">Monitor team performance and provide feedback.</p>
                                            </div>
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
    <!-- Develop Your Brand Area End -->


    <!-- Testimonial Area Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="max-w-836px mx-auto">
                        <h1 class="man-title-48px text-center mb-3">Customer response</h1>
                        <p class="man-subtitle3-16px text-center">Our organization positively addresses the <span class="cin2-text-dark fw-semibold">valued customer reactions.</span> There is the team to analyze all the raised issues and provide possible solutions on a top priority basis because of
                            organizational commitment.</p>
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
                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
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
                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
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
                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
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
                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
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
                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
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
                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
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
                                                    <img src="{{ asset('assets/img/growup/user-sm-1.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Robert Johnson</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-2.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Jenny Wilson</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-3.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">David Carvajal</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-4.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Hikmet Atceken</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-5.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Ragiv Diler</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-6.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Maria Ancelotti</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
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
                    <h1 class="man-title-48px text-center">Customers FAQ</h1>
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
                                        <p class="man-subtitle3-16px">In short, yes. If your organization is committed to training employees, partners, and customers, you can either enhance traditional methods or replace them entirely. Online training offers benefits like lower costs, reusable content,
                                            flexible scheduling, and detailed reporting, among others.</p>
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
                                        <p class="man-subtitle3-16px">Absolutely! You can share course links directly, enabling users to access the content without registering. However, note that progress made by unregistered users will not be tracked.</p>
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
                                        <p class="man-subtitle3-16px">Yes, you can evaluate knowledge through quizzes, surveys, and assignments.</p>
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
                                        <p class="man-subtitle3-16px">Yes, GrowUp LMS offers robust communication tools. You can make global announcements visible to all users, send direct messages to individuals or groups, and automate emails for events like recertification or course completion.</p>
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
                                        <p class="man-subtitle3-16px">No matter your size, GrowUp LMS offers affordable plans for everyone—from solo entrepreneurs to SMBs and growing enterprises. That’s why over 28000  teams rely on GrowUp LMS for their training needs.</p>
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

    <x-footer-signup />
@endsection

@push('js')
    <script>
        $('#type-company-name').on('input', function() {
            $('.company-name').text($(this).val());
        });
    </script>
@endpush
