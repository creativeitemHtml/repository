<style>
    .main-menu-header {
        padding: 11px;
    }
</style>

<!-- Start Main Header -->
<header class="main-menu-header">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-12">
                <div class="main-menu-wrap d-flex justify-content-between align-items-center">
                    <div class="menu-logo">
                        <a href="{{ route('home') }}" class="desk-menu-logo">
                            <img src="{{ asset('assets/img/logo-white.svg') }}" alt="logo" />
                        </a>
                        <a href="{{ route('home') }}" class="mobile-menu-logo">
                            <img src="{{ asset('assets/img/logo-icon.svg') }}" alt="logo" />
                        </a>
                    </div>
                    <div class="main-menu-area">
                        <!-- Mobile Menu -->
                        <div class="main-mobile-menu">
                            <div class="mobile-logo-area d-flex justify-content-between">
                                <a href="{{ route('home') }}" class="mobile-menu-logo">
                                    <img src="{{ asset('assets/img/logo-icon.svg') }}" alt="logo" />
                                </a>
                                <div class="mobile-menu-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                                </div>
                            </div>
                            <nav class="mobile-menu-nav">
                                <ul class="mobile-menu-ul">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Login</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-button">
                            <img src="{{ asset('assets/img/icon/gl-mobile-menu.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="menu-login-profile d-flex align-items-center">
                        <!-- Login Profile Html -->
                        @if(Auth::check())
                        <div class="main-menu-profile">
                            <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <h4 class="userName">{{ auth()->user()->name }}</h4>
                                <img src="{{ get_user_image(auth()->user()->id) }}" alt="" />
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <span></span>
                                <li>
                                    <a class="dropdown-item active" href="{{ route('superadmin.dashboard') }}">
                                        <span><img src="{{ asset('assets/img/icon/dashboard-2.svg') }}" alt=""/></span>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span><img src="{{ asset('assets/img/icon/downloads.svg') }}" alt=""/></span>
                                        Logout
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
                            <a href="{{ route('login') }}" class="log-in">Log in</a>
                            <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
                        </div>
                        <!-- Mobile Login Button -->
                        <div class="menu-mobile-login">
                            <a href="#">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6286 2.77603C14.6286 1.92161 13.8718 1.26522 13.026 1.38605L2.57703 2.87875C2.57702 2.87875 2.57704 2.87875 2.57703 2.87875C1.88525 2.97763 1.37142 3.57009 1.37142 4.26873V5.59097C1.37142 5.96968 1.06442 6.27668 0.685712 6.27668C0.307004 6.27668 0 5.96968 0 5.59097V4.26873C0 2.88751 1.01572 1.71652 2.38302 1.52112L12.832 0.0284161C14.504 -0.210451 16 1.08705 16 2.77603V14.6753C16 16.3643 14.504 17.6618 12.832 17.4229L2.38308 15.9302C2.38307 15.9302 2.38309 15.9302 2.38308 15.9302C1.0157 15.7349 0 14.5637 0 13.1826V11.8604C0 11.4816 0.307004 11.1746 0.685712 11.1746C1.06442 11.1746 1.37142 11.4816 1.37142 11.8604V13.1826C1.37142 13.8813 1.88527 14.4737 2.57697 14.5726L13.026 16.0652C13.8718 16.1861 14.6286 15.5297 14.6286 14.6753V2.77603ZM7.51513 5.1061C7.78292 4.83831 8.21709 4.83831 8.48488 5.1061L11.6196 8.24078C11.7481 8.36938 11.8204 8.54379 11.8204 8.72566C11.8204 8.90752 11.7481 9.08193 11.6196 9.21053L8.48488 12.3452C8.21709 12.613 7.78292 12.613 7.51513 12.3452C7.24735 12.0774 7.24735 11.6432 7.51513 11.3754L9.47923 9.41137H0.685712C0.307004 9.41137 0 9.10437 0 8.72566C0 8.34696 0.307004 8.03994 0.685712 8.03994H9.47923L7.51513 6.07584C7.24735 5.80806 7.24735 5.37389 7.51513 5.1061Z" fill="white"/>
                            </svg>                      
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Main Header -->