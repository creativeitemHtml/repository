<!-- Start Main Header -->
<header class="main-menu-header {{ request()->routeIs(['home', 'product_academy']) ? 'wh-main-menu-header' : '' }}">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-12">
                <div class="main-menu-wrap d-flex justify-content-between align-items-center">
                    <div class="menu-logo">
                        <a href="{{ route('home') }}" class="desk-menu-logo">
                            @if (request()->routeIs('home'))
                                <img src="{{ asset('assets/img/home-2/logo-black.svg') }}" alt="logo" />
                            @else
                                <img src="{{ asset('assets/img/logo-white.svg') }}" alt="logo" />
                            @endif
                        </a>
                        <a href="{{ route('home') }}" class="mobile-menu-logo">
                            <img src="{{ asset('assets/img/logo-icon.svg') }}" alt="logo" />
                        </a>
                    </div>
                    <div class="main-menu-area">
                        <!-- Desktop Menu -->
                        <nav class="main-menu-nav ml-xl-100">
                            <ul class="d-flex align-items-center main-menu-ul">
                                <li><a href="{{ route('home') }}" class="menu-parent-a {{ request()->is('/') ? 'active' : '' }}">{{ get_phrase('Home') }}</a></li>
                                <li><a href="{{ route('lms.home') }}" class="menu-parent-a {{ request()->is('growup-lms') ? 'active' : '' }}">{{ get_phrase('GrowUp LMS') }}</a></li>
                                {{-- <li class="have-mega-menu">
                                    <a href="javascript:void(0);" class="menu-parent-a {{ request()->is('web-applications') ? 'active' : '' }}">{{ get_phrase('Products') }}
                                        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.67145 6.46581C5.46816 6.46581 5.2649 6.38819 5.10991 6.23327L0.232691 1.356C-0.0775637 1.04575 -0.0775637 0.54273 0.232691 0.232595C0.54282 -0.0775318 1.04574 -0.0775318 1.35602 0.232595L5.67145 4.54827L9.9869 0.232756C10.2972 -0.0773869 10.8 -0.0773869 11.1101 0.232756C11.4205 0.542875 11.4205 1.0459 11.1101 1.35616L6.23299 6.23342C6.07792 6.38836 5.87466 6.46581 5.67145 6.46581Z"
                                                fill="#a6abbe" />
                                        </svg>
                                    </a>
                                    <ul class="main-mega-menu">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mega-menu-items">
                                                    <a href="{{ route('web_applications') }}" class="mega-menu-item mega-menu-item-1">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/img/new-icons-images/mega-1.svg') }}" alt="" />
                                                        </div>
                                                        <div class="content">
                                                            <h3 class="title">{{ get_phrase('Web Applications') }}</h3>
                                                            <p class="info">
                                                                {{ get_phrase('8+ web applications with multiple available addons') }}
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mega-menu-items">
                                                    <a href="{{ route('lms.home') }}" class="mega-menu-item mega-menu-item-2">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/img/new-icons-images/mega-4.svg') }}" alt="" />
                                                        </div>
                                                        <div class="content">
                                                            <h3 class="title">{{ get_phrase('GrowUp LMS') }}</h3>
                                                            <p class="info">
                                                                {{ get_phrase('SAAS Online Learning Management System') }}
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('services') }}" class="menu-parent-a {{ request()->is('services*') || request()->is('hire-us') ? 'active' : '' }}">{{ get_phrase('Service') }}</a></li>
                                <li><a href="{{ route('blog') }}" class="menu-parent-a {{ request()->is('blog*') ? 'active' : '' }}">{{ get_phrase('Blog') }}</a></li>
                                <li><a href="javascript:;" class="menu-parent-a" onclick="support()">{{ get_phrase('Support') }}</a></li>
                            </ul>
                        </nav>
                        <!-- Mobile Menu -->
                        <div class="main-mobile-menu {{ request()->routeIs(['home', 'product_academy']) ? 'wh-main-mobile-menu' : '' }}">
                            <div class="mobile-logo-area d-flex justify-content-between">
                                <a href="{{ route('home') }}" class="mobile-menu-logo">
                                    <img src="{{ asset('assets/img/logo-icon.svg') }}" alt="logo" />
                                </a>
                                <div class="mobile-menu-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                        <path
                                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                    </svg>
                                </div>
                            </div>
                            <nav class="mobile-menu-nav">
                                <ul class="mobile-menu-ul">
                                    <li>
                                        <a href="{{ route('home') }}">{{ get_phrase('Home') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('lms.home') }}">{{ get_phrase('GrowUp LMS') }}</a>
                                    </li>
                                    {{-- <li class="mobile-menu-li">
                                        <a href="javascript:void(0);" class="mobile-sub-btn">{{ get_phrase('Products') }}
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                                <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                            </svg>
                                        </a>
                                        <ul class="mobile-dropdown mobile-dropdown-mega pt-0">
                                            <a href="{{ route('web_applications') }}" class="mobile-mega-single d-flex justify-content-start gap-3 py-3">
                                                <div class="mobile-mega-icon mb-0">
                                                    <div class="mega-icon-inner">
                                                        <img src="{{ asset('assets/img/new-icons-images/mega-1.svg') }}" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="mega-heading mb-0">{{ get_phrase('Web Applications') }}</h4>
                                                    <p class="mega-descrip">{{ get_phrase('8+ web applications with multiple addons') }}</p>
                                                </div>
                                            </a>


                                            <a href="{{ route('lms.home') }}" class="mobile-mega-single d-flex justify-content-start gap-3 py-3">
                                                <div class="mobile-mega-icon mb-0">
                                                    <div class="mega-icon-inner">
                                                        <img src="{{ asset('assets/img/new-icons-images/mega-4.svg') }}" alt="" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="mega-heading mb-0">{{ get_phrase('GrowUp LMS') }}</h4>
                                                    <p class="mega-descrip">{{ get_phrase('SAAS Online Learning Management System') }}</p>
                                                </div>
                                            </a>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{ route('services') }}">{{ get_phrase('Service') }}</a></li>
                                    <li><a href="{{ route('blog') }}">{{ get_phrase('Blog') }}</a></li>
                                    <li><a href="{{ route('elements') }}">{{ get_phrase('Submit Ticket') }}</a></li>
                                    @if (isset(auth()->user()->id) && auth()->user()->id != '')
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                {{ get_phrase('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}">{{ get_phrase('Login') }}</a></li>
                                    @endif
                                    {{-- <li class="mobile-language-li d-flex justify-content-between align-items-center">
                                        <p>{{ get_phrase('Language') }}</p>
                                        <form action="" class="language-selector">
                                            <div class="dropdown-c dropdown-hover">
                                                <div class="selected-show-mobile">
                                                    <span class="select-flug">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M24 3.99997H0V20.0001H24V3.99997Z" fill="#F0F0F0" />
                                                            <path d="M13.5 3.99985H10.5V10.4998H0V13.4998H10.5V19.9998H13.5V13.4998H24V10.4998H13.5V3.99985Z" fill="#D80027" />
                                                            <path d="M18.459 14.7824L24.0003 17.861V14.7824H18.459Z" fill="#0052B4" />
                                                            <path d="M14.6094 14.7824L24.0007 19.9998V18.5244L17.2651 14.7824H14.6094Z" fill="#0052B4" />
                                                            <path d="M21.4992 19.9998L14.6094 16.1718V19.9998H21.4992Z" fill="#0052B4" />
                                                            <path d="M14.6094 14.7824L24.0007 19.9998V18.5244L17.2651 14.7824H14.6094Z" fill="#F0F0F0" />
                                                            <path d="M14.6094 14.7824L24.0007 19.9998V18.5244L17.2651 14.7824H14.6094Z" fill="#D80027" />
                                                            <path d="M4.23473 14.7823L0 17.135V14.7823H4.23473Z" fill="#0052B4" />
                                                            <path d="M9.39174 15.4458V19.9998H1.19531L9.39174 15.4458Z" fill="#0052B4" />
                                                            <path d="M6.73561 14.7824L0 18.5244V19.9998L9.39131 14.7824H6.73561Z" fill="#D80027" />
                                                            <path d="M5.54133 9.21723L0 6.13867V9.21723H5.54133Z" fill="#0052B4" />
                                                            <path d="M9.39131 9.21722L0 3.99985V5.47519L6.73561 9.21722H9.39131Z" fill="#0052B4" />
                                                            <path d="M2.50195 3.99985L9.39174 7.82785V3.99985H2.50195Z" fill="#0052B4" />
                                                            <path d="M9.39131 9.21722L0 3.99985V5.47519L6.73561 9.21722H9.39131Z" fill="#F0F0F0" />
                                                            <path d="M9.39131 9.21722L0 3.99985V5.47519L6.73561 9.21722H9.39131Z" fill="#D80027" />
                                                            <path d="M19.7656 9.21731L24.0004 6.86465V9.21731H19.7656Z" fill="#0052B4" />
                                                            <path d="M14.6094 8.55383V3.99988H22.8058L14.6094 8.55383Z" fill="#0052B4" />
                                                            <path d="M17.2651 9.21722L24.0007 5.47519V3.99985L14.6094 9.21722H17.2651Z" fill="#D80027" />
                                                        </svg>
                                                    </span>
                                                    <span class="select-lang">ENG</span>
                                                </div>
                                                <div class="drop-content-mobile">
                                                    <ul class="drop-hover">
                                                        <li class="d-none">
                                                            <span class="select-flug">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M24 3.99997H0V20.0001H24V3.99997Z" fill="#F0F0F0" />
                                                                    <path d="M13.5 3.99985H10.5V10.4998H0V13.4998H10.5V19.9998H13.5V13.4998H24V10.4998H13.5V3.99985Z" fill="#D80027" />
                                                                    <path d="M18.459 14.7824L24.0003 17.861V14.7824H18.459Z" fill="#0052B4" />
                                                                    <path d="M14.6094 14.7824L24.0007 19.9998V18.5244L17.2651 14.7824H14.6094Z" fill="#0052B4" />
                                                                    <path d="M21.4992 19.9998L14.6094 16.1718V19.9998H21.4992Z" fill="#0052B4" />
                                                                    <path d="M14.6094 14.7824L24.0007 19.9998V18.5244L17.2651 14.7824H14.6094Z" fill="#F0F0F0" />
                                                                    <path d="M14.6094 14.7824L24.0007 19.9998V18.5244L17.2651 14.7824H14.6094Z" fill="#D80027" />
                                                                    <path d="M4.23473 14.7823L0 17.135V14.7823H4.23473Z" fill="#0052B4" />
                                                                    <path d="M9.39174 15.4458V19.9998H1.19531L9.39174 15.4458Z" fill="#0052B4" />
                                                                    <path d="M6.73561 14.7824L0 18.5244V19.9998L9.39131 14.7824H6.73561Z" fill="#D80027" />
                                                                    <path d="M5.54133 9.21723L0 6.13867V9.21723H5.54133Z" fill="#0052B4" />
                                                                    <path d="M9.39131 9.21722L0 3.99985V5.47519L6.73561 9.21722H9.39131Z" fill="#0052B4" />
                                                                    <path d="M2.50195 3.99985L9.39174 7.82785V3.99985H2.50195Z" fill="#0052B4" />
                                                                    <path d="M9.39131 9.21722L0 3.99985V5.47519L6.73561 9.21722H9.39131Z" fill="#F0F0F0" />
                                                                    <path d="M9.39131 9.21722L0 3.99985V5.47519L6.73561 9.21722H9.39131Z" fill="#D80027" />
                                                                    <path d="M19.7656 9.21731L24.0004 6.86465V9.21731H19.7656Z" fill="#0052B4" />
                                                                    <path d="M14.6094 8.55383V3.99988H22.8058L14.6094 8.55383Z" fill="#0052B4" />
                                                                    <path d="M17.2651 9.21722L24.0007 5.47519V3.99985L14.6094 9.21722H17.2651Z" fill="#D80027" />
                                                                </svg>
                                                            </span>
                                                            <span class="select-lang">ENG</span>
                                                        </li>
                                                        <li>
                                                            <span class="select-flug">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.00002 19.8619H0.413813C0.185297 19.8619 0 19.6766 0 19.4481V4.55157C0 4.32305 0.185297 4.13776 0.413813 4.13776H8.00002V19.8619Z" fill="#41479B" />
                                                                    <path d="M16.0002 4.13797H8V19.8622H16.0002V4.13797Z" fill="#F5F5F5" />
                                                                    <path d="M23.5862 19.8619H16V4.13779H23.5862C23.8147 4.13779 24 4.32308 24 4.5516V19.4481C24 19.6767 23.8147 19.8619 23.5862 19.8619Z" fill="#FF4B55" />
                                                                </svg>
                                                            </span>
                                                            <span class="select-lang">FRA</span>
                                                        </li>
                                                        <li>
                                                            <span class="select-flug">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M24 3.99988H0V20H24V3.99988Z" fill="#D80027" />
                                                                    <path d="M24 3.99988H0V9.33308H24V3.99988Z" fill="black" />
                                                                    <path d="M24 14.6664H0V19.9996H24V14.6664Z" fill="#FFDA44" />
                                                                </svg>
                                                            </span>
                                                            <span class="select-lang">GER</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Selected value input -->
                                            <input type="hidden" id="selected-language-mobile" class="selected-language-mobile" name="" value="ENG">
                                        </form>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-button">
                            @if (request()->routeIs('home'))
                                <img src="{{ asset('assets/img/home-2/gl-mobile-menu2.svg') }}" alt="">
                            @else
                                <img src="{{ asset('assets/img/icon/gl-mobile-menu.svg') }}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="menu-login-profile d-flex align-items-center">
                        <!-- Login Profile Html -->
                        @if (isset(auth()->user()->id) && auth()->user()->id != '')
                            <div class="main-menu-profile">
                                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <h4 class="userName">{{ auth()->user()->name }}</h4>
                                    <img src="{{ get_user_image(auth()->user()->id) }}" alt="" />
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <span></span>
                                    @if (auth()->user()->role_id == 1)
                                        <li>
                                            <a class="dropdown-item active" href="{{ route('superadmin.dashboard') }}">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.663" height="16.663" viewBox="0 0 16.663 16.663">
                                                        <path id="send"
                                                            d="M17.425,5.136A1.371,1.371,0,0,1,19.159,6.87L14.521,20.785a1.392,1.392,0,0,1-2.656-.076c-.324-1.181-.741-2.622-1.152-3.842-.206-.611-.407-1.155-.59-1.579-.092-.212-.176-.385-.25-.516-.037-.065-.068-.116-.095-.153-.013-.019-.024-.032-.032-.042l-.009-.011,0,0h0l-.015-.013-.042-.032c-.038-.026-.088-.058-.153-.095-.132-.074-.3-.158-.516-.25-.424-.184-.968-.385-1.579-.59-1.22-.411-2.661-.827-3.842-1.152A1.392,1.392,0,0,1,3.51,9.774Zm-4.2,15.216L17.859,6.436,3.943,11.075h0a.062.062,0,0,0,0,.03v0l.006,0c1.189.327,2.66.751,3.916,1.175.627.211,1.212.426,1.687.632a7.112,7.112,0,0,1,.642.312,2.357,2.357,0,0,1,.509.365,2.36,2.36,0,0,1,.365.509,7.121,7.121,0,0,1,.312.642c.206.474.421,1.059.632,1.687.423,1.256.848,2.727,1.175,3.916l0,.006h0l.016,0h.014v0Z"
                                                            transform="translate(-2.569 -5.063)" fill="#676c7d" fill-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                {{ get_phrase('Dashboard') }}
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="dropdown-item" href="{{ route('customer.growup.lms.subscription') }}">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.663" height="16.663" viewBox="0 0 16.663 16.663">
                                                        <path id="send"
                                                            d="M17.425,5.136A1.371,1.371,0,0,1,19.159,6.87L14.521,20.785a1.392,1.392,0,0,1-2.656-.076c-.324-1.181-.741-2.622-1.152-3.842-.206-.611-.407-1.155-.59-1.579-.092-.212-.176-.385-.25-.516-.037-.065-.068-.116-.095-.153-.013-.019-.024-.032-.032-.042l-.009-.011,0,0h0l-.015-.013-.042-.032c-.038-.026-.088-.058-.153-.095-.132-.074-.3-.158-.516-.25-.424-.184-.968-.385-1.579-.59-1.22-.411-2.661-.827-3.842-1.152A1.392,1.392,0,0,1,3.51,9.774Zm-4.2,15.216L17.859,6.436,3.943,11.075h0a.062.062,0,0,0,0,.03v0l.006,0c1.189.327,2.66.751,3.916,1.175.627.211,1.212.426,1.687.632a7.112,7.112,0,0,1,.642.312,2.357,2.357,0,0,1,.509.365,2.36,2.36,0,0,1,.365.509,7.121,7.121,0,0,1,.312.642c.206.474.421,1.059.632,1.687.423,1.256.848,2.727,1.175,3.916l0,.006h0l.016,0h.014v0Z"
                                                            transform="translate(-2.569 -5.063)" fill="#676c7d" fill-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                {{ get_phrase('My Subscription') }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('customer.projects') }}">
                                                <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.0163 14.4526L16.7639 9.70502C16.8918 9.57715 17.0524 9.51178 17.246 9.50879C17.4395 9.50586 17.6031 9.57129 17.7369 9.70502C17.8706 9.83875 17.9375 10.0009 17.9375 10.1915C17.9375 10.3821 17.8706 10.5442 17.7369 10.6779L12.6004 15.8143C12.4336 15.9813 12.2389 16.0647 12.0163 16.0647C11.7938 16.0647 11.5991 15.9813 11.4322 15.8143L8.89867 13.2808C8.77081 13.153 8.70543 12.9922 8.70247 12.7987C8.69949 12.6052 8.76489 12.4416 8.89867 12.3078C9.03241 12.1741 9.19455 12.1072 9.38512 12.1072C9.57567 12.1072 9.73782 12.1741 9.87158 12.3078L12.0163 14.4526ZM2.60643 17.2578C2.14748 17.2578 1.75459 17.0944 1.42775 16.7676C1.10091 16.4407 0.9375 16.0478 0.9375 15.5888V3.23169C0.9375 2.77277 1.10091 2.37982 1.42775 2.05298C1.75459 1.72614 2.14748 1.56274 2.60643 1.56274H6.67403C6.80185 1.11304 7.06314 0.740173 7.45787 0.444275C7.85262 0.148376 8.29498 0.000366211 8.785 0.000366211C9.29395 0.000366211 9.74344 0.148376 10.1335 0.444275C10.5235 0.740173 10.7824 1.11304 10.9102 1.56274H14.9636C15.4225 1.56274 15.8154 1.72614 16.1423 2.05298C16.4691 2.37982 16.6325 2.77277 16.6325 3.23169V6.8714C16.6325 7.06757 16.5661 7.23206 16.4333 7.36481C16.3006 7.49744 16.1361 7.56378 15.9398 7.56378C15.7435 7.56378 15.5791 7.49744 15.4465 7.36469C15.3139 7.23206 15.2477 7.06757 15.2477 6.8714V3.23169C15.2477 3.16071 15.2181 3.09558 15.1589 3.03632C15.0997 2.97717 15.0346 2.94763 14.9636 2.94763H12.9396V4.52771C12.9396 4.76416 12.8599 4.96234 12.7007 5.12231C12.5414 5.28223 12.3441 5.36218 12.1086 5.36218H5.4612C5.22578 5.36218 5.02847 5.28223 4.86925 5.12231C4.71007 4.96234 4.63045 4.76416 4.63045 4.52771V2.94763H2.60643C2.53542 2.94763 2.47029 2.97717 2.4111 3.03632C2.35191 3.09558 2.32233 3.16071 2.32233 3.23169V15.5888C2.32233 15.6599 2.35191 15.725 2.4111 15.7842C2.47029 15.8433 2.53542 15.8729 2.60643 15.8729H7.16937C7.36552 15.8729 7.52998 15.9393 7.66269 16.0721C7.79541 16.2049 7.86177 16.3694 7.86177 16.5657C7.86177 16.762 7.79541 16.9263 7.66269 17.0589C7.52998 17.1915 7.36552 17.2578 7.16937 17.2578H2.60643ZM8.78654 3.05408C9.02342 3.05408 9.22147 2.974 9.38066 2.81378C9.53987 2.65356 9.61948 2.45502 9.61948 2.21808C9.61948 1.98126 9.53935 1.7832 9.3791 1.62402C9.21886 1.46478 9.02032 1.38525 8.78346 1.38525C8.54659 1.38525 8.34854 1.46533 8.18936 1.62555C8.03014 1.78577 7.95052 1.98431 7.95052 2.22125C7.95052 2.45813 8.03065 2.65619 8.19089 2.81537C8.35114 2.97449 8.5497 3.05408 8.78654 3.05408Z"
                                                            fill="#676C7D" />
                                                    </svg>
                                                </span>
                                                {{ get_phrase('My Projects') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('customer.downloads') }}">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.557" height="16.94" viewBox="0 0 19.557 16.94">
                                                        <g id="Layer_2" data-name="Layer 2" transform="translate(-1 -3)">
                                                            <path id="Path_5542" data-name="Path 5542" d="M14.258,26.909a.649.649,0,0,1-.461-.191l-2.606-2.606a.651.651,0,1,1,.921-.921l2.145,2.145L16.4,23.191a.651.651,0,1,1,.921.921l-2.606,2.606A.649.649,0,0,1,14.258,26.909Z"
                                                                transform="translate(-3.485 -6.97)" fill="#676c7d" />
                                                            <path id="Path_5543" data-name="Path 5543" d="M15.652,22.773A.651.651,0,0,1,15,22.121v-8.47a.652.652,0,0,1,1.3,0v8.47A.651.651,0,0,1,15.652,22.773Z" transform="translate(-4.879 -3.485)" fill="#676c7d" />
                                                            <path id="Path_5544" data-name="Path 5544"
                                                                d="M16.962,14.727h-.977a.652.652,0,0,1,0-1.3h.977A2.281,2.281,0,1,0,16.6,8.9a.649.649,0,0,1-.739-.5A5.21,5.21,0,0,0,5.6,8.935a.652.652,0,0,1-.648.58h-.69a1.955,1.955,0,0,0,0,3.909h1.3a.652.652,0,0,1,0,1.3h-1.3a3.258,3.258,0,1,1,0-6.515H4.39a6.513,6.513,0,0,1,12.6-.652,3.583,3.583,0,1,1-.023,7.167Z"
                                                                fill="#676c7d" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                {{ get_phrase('My Downloads') }}
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <span><img src="{{ asset('assets/img/icon/downloads.svg') }}" alt="" /></span>
                                            {{ get_phrase('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <!-- Login Logout Button -->
                            <div class="main-menu-login d-flex align-items-center">
                                <a href="{{ route('login') }}" class="log-in">{{ get_phrase('Log in') }}</a>
                                <a href="{{ route('register') }}" class="log-in active">{{ get_phrase('Sign Up') }}</a>
                            </div>
                            <!-- Mobile Login Button -->
                            <div class="menu-mobile-login">
                                <a href="{{ route('login') }}">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.6286 2.77603C14.6286 1.92161 13.8718 1.26522 13.026 1.38605L2.57703 2.87875C2.57702 2.87875 2.57704 2.87875 2.57703 2.87875C1.88525 2.97763 1.37142 3.57009 1.37142 4.26873V5.59097C1.37142 5.96968 1.06442 6.27668 0.685712 6.27668C0.307004 6.27668 0 5.96968 0 5.59097V4.26873C0 2.88751 1.01572 1.71652 2.38302 1.52112L12.832 0.0284161C14.504 -0.210451 16 1.08705 16 2.77603V14.6753C16 16.3643 14.504 17.6618 12.832 17.4229L2.38308 15.9302C2.38307 15.9302 2.38309 15.9302 2.38308 15.9302C1.0157 15.7349 0 14.5637 0 13.1826V11.8604C0 11.4816 0.307004 11.1746 0.685712 11.1746C1.06442 11.1746 1.37142 11.4816 1.37142 11.8604V13.1826C1.37142 13.8813 1.88527 14.4737 2.57697 14.5726L13.026 16.0652C13.8718 16.1861 14.6286 15.5297 14.6286 14.6753V2.77603ZM7.51513 5.1061C7.78292 4.83831 8.21709 4.83831 8.48488 5.1061L11.6196 8.24078C11.7481 8.36938 11.8204 8.54379 11.8204 8.72566C11.8204 8.90752 11.7481 9.08193 11.6196 9.21053L8.48488 12.3452C8.21709 12.613 7.78292 12.613 7.51513 12.3452C7.24735 12.0774 7.24735 11.6432 7.51513 11.3754L9.47923 9.41137H0.685712C0.307004 9.41137 0 9.10437 0 8.72566C0 8.34696 0.307004 8.03994 0.685712 8.03994H9.47923L7.51513 6.07584C7.24735 5.80806 7.24735 5.37389 7.51513 5.1061Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                            <!-- Language Select -->
                        @endif

                        {{-- @if (isset(auth()->user()->id) && auth()->user()->id != '')
                            @if (auth()->user()->role_id == 1)
                                @php
                                    $all_languages = get_all_language();
                                    $usersinfo = DB::table('users')
                                        ->where('id', auth()->user()->id)
                                        ->first();

                                    $userlanguage = $usersinfo->language;

                                @endphp

                                <div class="adminTable-action">
                                    <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 91px; height: 29px; padding: 0;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="ep0rzf NMm5M" style="width: 17px">
                                            <path
                                                d="M12.87 15.07l-2.54-2.51.03-.03A17.52 17.52 0 0 0 14.07 6H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z">
                                            </path>
                                        </svg>

                                        @if (!empty($userlanguage))
                                            <span style="font-size: 10px;">{{ ucwords($userlanguage) }}</span>
                                        @else
                                            <span style="font-size: 10px;">{{ ucwords(get_settings('language')) }}</span>
                                        @endif
                                    </button>

                                    <ul style="min-width: 0;" class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                        <form method="post" id="languageForm" action="{{ route('superadmin.user_language') }}">
                                            @csrf
                                            @foreach ($all_languages as $all_language)
                                                <li>
                                                    <a class="dropdown-item language-item {{ $all_language->name == $userlanguage ? 'lactive' : '' }}" href="javascript:;" data-language-name="{{ $all_language->name }}">{{ ucwords($all_language->name) }}</a>
                                                </li>
                                            @endforeach
                                            <input type="hidden" name="language" id="selectedLanguageName">
                                        </form>
                                    </ul>
                                </div>
                            @endif
                        @else
                            @php
                                $all_languages = get_all_language();
                            @endphp
                            <div class="adminTable-action">
                                <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 91px; height: 29px; padding: 0;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="ep0rzf NMm5M" style="width: 17px">
                                        <path
                                            d="M12.87 15.07l-2.54-2.51.03-.03A17.52 17.52 0 0 0 14.07 6H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z">
                                        </path>
                                    </svg>

                                    @if (session()->has('language'))
                                        <span style="font-size: 10px;">{{ ucwords(session('language')) }}</span>
                                    @elseif(session('location') == 'Bangladesh')
                                        <span style="font-size: 10px;">{{ get_phrase('Bangla') }}</span>
                                    @else
                                        <span style="font-size: 10px;">{{ ucwords(get_settings('language')) }}</span>
                                    @endif
                                </button>

                                <ul style="min-width: 0;" class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                    <form method="post" id="languageForm" action="{{ route('session_language') }}">
                                        @csrf
                                        @foreach ($all_languages as $all_language)
                                            <li>
                                                <a class="dropdown-item language-item" href="javascript:;" data-language-name="{{ $all_language->name }}">{{ ucwords($all_language->name) }}</a>
                                            </li>
                                        @endforeach
                                        <input type="hidden" name="language" id="selectedLanguageName">
                                    </form>
                                </ul>
                            </div>
                        @endif --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    // JavaScript to handle language selection
    document.addEventListener('DOMContentLoaded', function() {
        let languageLinks = document.querySelectorAll('.language-item');

        languageLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                let languageName = this.getAttribute('data-language-name');
                document.getElementById('selectedLanguageName').value = languageName;
                document.getElementById('languageForm').submit();
            });
        });
    });
</script>
<!-- End Main Header -->
