<!-- Start Element Header -->
<section class="element-menu-section ">
    <div class="element-menu-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="element-menu-wrap d-flex justify-content-between align-items-center">

                        <div class="element-logo">
                            <a href="{{ route('lms.home') }}"><img src="{{ asset('assets/img/growup/logo-dark-beta.svg') }}" alt="logo" width="145px"></a>
                        </div>

                        <div class="element-menu-area">
                            <nav class="element-desktop-nav">
                                <ul class="d-flex align-items-center justify-content-between">
                                    <li><a href="{{ route('lms.home') }}" class="{{ Route::currentRouteName() == 'lms.home' ? 'active' : '' }}">{{ get_phrase('Home') }}</a></li>
                                    <li><a href="{{ route('lms.features') }}" class="{{ Route::currentRouteName() == 'lms.features' ? 'active' : '' }}">{{ get_phrase('Features') }}</a></li>
                                    <li><a href="{{ route('lms.solutions') }}" class="{{ Route::currentRouteName() == 'lms.solutions' ? 'active' : '' }}">{{ get_phrase('Solutions') }}</a></li>
                                    <li><a href="{{ route('lms.pricing') }}" class="{{ Route::currentRouteName() == 'lms.pricing' ? 'active' : '' }}">{{ get_phrase('Pricing') }}</a></li>
                                    <li><a href="{{ route('lms.help') }}" class="{{ Route::currentRouteName() == 'lms.help' ? 'active' : '' }}">{{ get_phrase('Help Center') }}</a></li>
                                    <li class="list-button">
                                        <div class="element-sm-btn-2 mt-3 mt-lg-0">
                                            <a href="{{ route('register.company', 'growup-lms') }}" class="unlimited-btn w-100 justify-content-center">{{ get_phrase('Start For Free') }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="element-sm-btn mt-3 mt-lg-0">
                            <a href="{{ route('register.company', 'growup-lms') }}" class="unlimited-btn w-100 justify-content-center">{{ get_phrase('Start For Free') }}</a>
                        </div>

                        <div class="element-menu-button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
