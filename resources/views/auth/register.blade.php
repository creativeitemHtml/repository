@extends('global.index')
@section('content')

<!-- Start Signup content -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-form-container d-flex align-items-center justify-content-between">
                    <!-- Form Area  -->
                    <div class="main-form-card">
                        <div class="form-header">
                            <h1 class="title">Create Your Account</h1>
                            <p class="info">We’re a team that Guides Each Other</p>
                        </div>
                        <form id="register_form" method="POST" action="{{ route('register') }}" class="main-form-area">
                            @csrf
                            <div class="d-flex flex-column main-form-wrap">
                                <div class="input-wrap">
                                    <label for="name" class="form-label">Name<span>*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Your Fast Name" aria-label="Your Fast Name" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-wrap">
                                    <label for="email" class="form-label">Email<span>*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-wrap">
                                    <label for="password" class="form-label">Password<span>*</span></label>
                                    <div class="password-input-wrap">
                                        <input type="password" class="form-control password-field @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" aria-label="Password" required autocomplete="new-password">
                                        <div class="toggle-icons">
                                            <img src="{{ asset('assets/img/icon/visibility-off.svg') }}" class="password-icon" toggle=".password-field" alt="">
                                            <img src="{{ asset('assets/img/icon/visibility-on.svg') }}" class="password-icon d-none" toggle=".password-field" alt="">
                                        </div>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-wrap">
                                    <label for="password_confirmation" class="form-label">Confirm Password<span>*</span></label>
                                    <div class="password-input-wrap">
                                        <input type="password" class="form-control password-field2" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                        <div class="toggle-icons">
                                            <img src="{{ asset('assets/img/icon/visibility-off.svg') }}" class="password-icon" toggle=".password-field2" alt="">
                                            <img src="{{ asset('assets/img/icon/visibility-on.svg') }}" class="password-icon d-none" toggle=".password-field2" alt="">
                                        </div>
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('password.request') }}" class="forget">Forget your password?</a>
                            <button type="submit" class="submit g-recaptcha" data-sitekey="6LdAAcInAAAAAHLH_eG-CZ_COygmBCgWvY2rayUg" data-callback='onSubmit' data-action='submit'>{{ get_phrase('Register') }}</button>
                        </form>
                        <div class="form-footer">
                            <p class="info">Already have an account?</p>
                            <a href="{{ route('login') }}" class="link">Login</a>
                        </div>
                    </div>
                    <!-- Text and Image -->
                    <div class="form-advice-wrap">
                        <!-- Layout 3 -->
                        <div class="form-advertise-layout-3 form-advertise-layout d-flex align-items-center justify-content-between">
                            <div class="form-advertise-text">
                                <h1 class="title">Web's Building Blocks</h1>
                                <p class="info">Empower Your Ideas with Free HTML Building Websites, Building Dreams</p>
                                <a href="#" class="subs-btn">Try for Free</a>
                            </div>
                            <div class="form-advertise-img">
                                <img src="{{ asset('assets/img/signup/form-layout-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Signup content -->

<script>
    function onSubmit(token) {
        document.getElementById("register_form").submit();
    }
</script>

@endsection
