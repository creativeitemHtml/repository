@extends('global.index')

@section('content')
    <main class="gr-user-access-main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="gr-user-access-inner">
                        <div class="max-w-458px w-100">
                            <a href="{{ route('lms.home') }}" class="gr-user-access-page-logo mb-3">
                                <img src="{{ asset('assets/img/growup-logo.svg') }}" alt="">
                            </a>
                            <div class="gr-user-access-content">
                                <div class="mb-32px">
                                    <h1 class="man-title-36px mb-3">{{ get_phrase('Try GrowUp Lms for free') }}</h1>
                                    <p class="man-subtitle-16px lh-1 cin2-text-dark">{{ get_phrase('No credit card required') }}</p>
                                </div>
                                <form action="{{ route('lms.company_lms_register') }}" method="post" enctype="multipart/form-data">@csrf
                                    <div class="mb-3">
                                        <p class="gr-input-value-text ci2-input-value-text mb-2">
                                            www.creativeitem.com/
                                            <span class="company-name"></span>
                                        </p>
                                        <input type="email" class="form-control gr-form-control" name="company_name" id="type-company-name" placeholder="Your company name*">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control gr-form-control" name="email" @auth value="{{ auth()->user()->email }}" @endauth id="" placeholder="Your Email Address*">
                                    </div>
                                    <div class="mb-32px">
                                        <div class="input-password-wrap">
                                            <div class="password-icons lock toggle-password" toggle=".password-field1">
                                                <img class="eye-unlock" src="assets/img/icon/eye-gray-18.svg" alt="">
                                                <img class="eye-lock" src="assets/img/icon/eye-slash-gray-18.svg" alt="">
                                            </div>
                                            <input type="password" id="password1" class="form-control gr-form-control password-field1" name="password" placeholder="Password*">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check gr-form-check">
                                            <input class="form-check-input gr-form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label gr-form-check-label" for="flexCheckDefault">
                                                {{ get_phrase('I agree to the') }} <a href="#" class="cin2-text-dark fw-semibold">{{ get_phrase('Terms of Service') }}</a> and <a href="#" class="cin2-text-dark fw-semibold">Privacy Policy</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn gr-btn-purple-gradient w-100">
                                        <span>{{ get_phrase('Free Sign Up') }}</span>
                                        <img src="{{ asset('assets/img/icon/angle-right-white-24.svg') }}" alt="icon">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="gr-user-access-banner">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')
    <script>
        $('#type-company-name').on('input', function() {
            $('.company-name').text($(this).val());
        });
    </script>
@endpush
