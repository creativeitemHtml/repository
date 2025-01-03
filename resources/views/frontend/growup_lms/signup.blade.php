@extends('global.index')

@section('content')
    @include('frontend.growup_lms.lms_header')

    <main class="gr-user-access-main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="gr-user-access-inner">
                        <div class="max-w-458px w-100">

                            <div class="gr-user-access-content">
                                <div class="mb-32px">
                                    <h1 class="man-title-36px mb-3">{{ get_phrase('Try GrowUp Lms for free') }}</h1>
                                    <p class="man-subtitle-16px lh-1 cin2-text-dark">{{ get_phrase('No credit card required') }}</p>
                                </div>
                                <form action="{{ route('register.company', 'growup-lms') }}" method="post" id="growup-signup" enctype="multipart/form-data">@csrf
                                    <div class="mb-3">
                                        <p class="gr-input-value-text ci2-input-value-text mb-2">www.creativeitem.com/<span class="company-name">{{ old('company_name') }}</span></p>
                                        <input type="text" class="form-control gr-form-control" name="company_name" value="{{ old('company_name') }}" id="type-company-name" placeholder="Your company name*" required>
                                    </div>


                                    @guest
                                        <div class="mb-3">
                                            <input type="text" class="form-control gr-form-control" name="email" @isset($email) value="{{ $email }}" @else value="{{ old('email') }}" @endisset placeholder="Your Email Address*" required>
                                        </div>
                                        <div class="mb-32px">
                                            <div class="input-password-wrap">
                                                <div class="password-icons lock toggle-password" toggle=".password-field1">
                                                    <img class="eye-unlock" src="assets/img/icon/eye-gray-18.svg" alt="">
                                                    <img class="eye-lock" src="assets/img/icon/eye-slash-gray-18.svg" alt="">
                                                </div>
                                                <input type="password" id="password1" class="form-control gr-form-control password-field1" name="password" placeholder="Password*" required>
                                            </div>
                                        </div>
                                    @endguest


                                    <div class="mb-3">
                                        <div class="form-check gr-form-check">
                                            <input class="form-check-input gr-form-check-input" type="checkbox" name="policy" value="0" id="flexCheckDefault" required>
                                            <label class="form-check-label gr-form-check-label" for="flexCheckDefault">
                                                {{ get_phrase('I agree to the') }} <a href="#" class="cin2-text-dark fw-semibold">{{ get_phrase('Terms of Service') }}</a> and <a href="#" class="cin2-text-dark fw-semibold">Privacy Policy</a>.
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn gr-btn-purple-gradient w-100 disabled">
                                        <span>{{ get_phrase('Free Sign Up') }}</span>
                                        <img src="{{ asset('assets/img/icon/angle-right-white-24.svg') }}" alt="icon">
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="gr-user-access-banner"></div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')
    <script>
        $(document).ready(function() {
            $($('input[name="policy"]')).on('click', function() {
                $('button[type="submit"]').addClass('disabled')
                $(this).val($(this).is(':checked') ? '1' : '0');
                $(this).is(':checked') ? $('button[type="submit"]').removeClass('disabled') : $('button[type="submit"]').addClass('disabled');
            });

            $('#growup-signup').on('submit', function(e) {
                if (!$('input[name="policy"]').is(':checked')) {
                    e.preventDefault();
                    toastr.warning('Please agree to our privacy policy and continue.');
                }
            });

            $('#type-company-name').on('input', function() {
                $('.company-name').text($(this).val());
            });
        });
    </script>
@endpush
