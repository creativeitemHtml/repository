@if (Auth::check() && !empty($lms_company) && !is_null($check_verification))
    <div class="ci1-card max-w-490px w-100">
        <div class="ci1-card-body p-30px">
            <h3 class="man-title-26px mb-30px">Already Registerd</h3>
            <div class="d-flex justify-content-center mt-3">
                <a href="https://lms.creativeitem.com/{{ $lms_company->company_slug }}" class="video-sign-up" target="_blank">
                    Go To Your LMS Site
                    <img src="{{ asset('assets/img/icon/right-white-arrow.svg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
@else
    <div class="ci1-card max-w-490px w-100" id="register_form">
        <div class="ci1-card-body p-30px">
            <h3 class="man-title-26px mb-30px">Sign Up For LMS</h3>
            <form id="project-form" action="{{ route('lms.company_lms_register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-20px">
                    <label for="company_name" class="form-label mb-12px ci1-form-label">{{ get_phrase('Company Name') }}*</label>
                    <input type="text" class="form-control ci1-form-control" id="company_name" name="company_name" placeholder="Your Company Title">
                </div>
                @if (Auth::check())
                    <div class="mb-20px">
                        <label for="email" class="form-label mb-12px ci1-form-label">{{ get_phrase('Your Email') }}*</label>
                        <input type="email" class="form-control ci1-form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                    </div>
                @else
                    <div class="mb-20px">
                        <label for="email" class="form-label mb-12px ci1-form-label">{{ get_phrase('Your Email') }}*</label>
                        <input type="email" class="form-control ci1-form-control" id="email" name="email" value="" placeholder="Your Email Address">
                    </div>
                @endif

                <div class="mb-50px">
                    <label for="password" class="form-label mb-12px ci1-form-label">{{ get_phrase('Password') }}*</label>
                    <input type="password" class="form-control ci1-form-control" id="password" name="password" placeholder="Enter password" autocomplete="current-password" required>
                    <!-- <div class="toggle-icons">
                    <img src="{{ asset('assets/img/icon/visibility-off.svg') }}" class="password-icon" toggle=".password-field" alt="">
                    <img src="{{ asset('assets/img/icon/visibility-on.svg') }}" class="password-icon d-none" toggle=".password-field" alt="">
                </div> -->
                </div>
                <button type="submit" class="btn btn-primary-ci1 d-flex align-items-center gap-1 px-30px">
                    <span>Submit</span>
                    <img src="{{ asset('assets/img/home-2/arrow-right-white-24.svg') }}" alt="icon">
                </button>
            </form>
        </div>
    </div>
@endif



<script type="text/javascript">
    "use script";

    function companyRegister() {
        let url = "{{ route('lms.company_lms_register') }}";
        let formData = new FormData(document.getElementById('project-form'));

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                $('#register_form').html(response);
            },
            error: function(xhr) {
                // Handle error here
                console.error(xhr.responseText);
            }
        });
    }

    function verifyEmail() {
        // Get all input values
        const inputs = document.querySelectorAll('.verify-input');
        let verificationCode = '';
        inputs.forEach(input => {
            verificationCode += input.value;
        });

        // Create form data
        let formData = new FormData(document.getElementById('verify-form'));
        formData.append('verification_code', verificationCode);

        // Make AJAX request
        $.ajax({
            url: "{{ route('lms.company_email_verify') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#register_form').html(response);
            },
            error: function(xhr) {
                // Handle error here
                console.error(xhr.responseText);
            }
        });
    }
</script>
