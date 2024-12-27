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
                                <div class="max-w-458px w-100">
                                    <div class="gr-user-access-content">
                                        <div class="mb-40px">
                                            <h1 class="man-title-36px mb-3">Verify your email</h1>
                                            <p class="man-subtitle-16px cin2-text-dark">Enter the 5 digit code sent to your email</p>
                                        </div>

                                        <form action="{{ route('email.verification.process', request()->route()->parameter('saas_product')) }}" method="post">
                                            <input type="hidden" name="pin" id="pin">
                                            @csrf
                                            <div class="gr-verify-code-wrap mb-20px d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between">
                                                <input type="tel" maxlength="1" pattern="[0-9]" class="form-control gr-verify-input" required autofocus>
                                                <input type="tel" maxlength="1" pattern="[0-9]" class="form-control gr-verify-input" required>
                                                <input type="tel" maxlength="1" pattern="[0-9]" class="form-control gr-verify-input" required>
                                                <input type="tel" maxlength="1" pattern="[0-9]" class="form-control gr-verify-input" required>
                                                <input type="tel" maxlength="1" pattern="[0-9]" class="form-control gr-verify-input" required>
                                            </div>
                                            <button type="submit" class="btn gr-btn-purple-gradient w-100 mb-12px">Verify</button>

                                            <p class="man-subtitle2-14px text-center">Didn’t receive the email?
                                                <a href="{{ route('resend.verification.code', request()->route()->parameter('saas_product')) }}" class="fw-semibold cin2-text-dark">
                                                    Click to resend
                                                </a>
                                            </p>

                                        </form>

                                    </div>
                                </div>
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
            const inputs = $('.gr-verify-input');
            const pinField = $('#pin');

            inputs.on('input', function() {
                const $this = $(this);
                const value = $this.val();
                if (value.length === 1) {
                    $this.next('.gr-verify-input').focus();
                }
                updatePinField();
            });

            inputs.on('keydown', function(e) {
                const $this = $(this);
                if (e.key === 'Backspace' && $this.val() === '') {
                    $this.prev('.gr-verify-input').focus();
                }
            });

            function updatePinField() {
                const pin = inputs.map(function() {
                    return $(this).val();
                }).get().join('');
                pinField.val(pin);
            }
        });
    </script>
@endpush
