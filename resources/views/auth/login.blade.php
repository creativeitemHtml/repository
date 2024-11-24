@extends('global.index')
@section('content')

<!-- Start Login content -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-form-container d-flex align-items-center justify-content-between">
                    <!-- Form Area  -->
                    <div class="main-form-card">
                        <div class="form-header">
                            <h1 class="title">Welcome Back!</h1>
                            <p class="info">We’re a team that Guides Each Other</p>
                        </div>
                        <form id="login_form" method="POST" action="{{ route('login') }}" class="main-form-area">
                            @csrf
                            <div class="d-flex flex-column main-form-wrap">
                                <div class="input-wrap">
                                    <label for="email" class="form-label">{{ get_phrase('Email') }}<span>*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="username@gmail.com" autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-wrap">
                                    <label for="password" class="form-label">{{ get_phrase('Password') }}<span>*</span></label>
                                    <div class="password-input-wrap">
                                        <input type="password" class="form-control password-field @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" placeholder="Enter password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="toggle-icons">
                                            <img src="{{ asset('assets/img/icon/visibility-off.svg') }}" class="password-icon" toggle=".password-field" alt="">
                                            <img src="{{ asset('assets/img/icon/visibility-on.svg') }}" class="password-icon d-none" toggle=".password-field" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('password.request') }}" class="forget">{{ get_phrase('Forget your password') }}?</a>
                            <button type="submit" class="submit g-recaptcha" data-sitekey="6LdAAcInAAAAAHLH_eG-CZ_COygmBCgWvY2rayUg" data-callback='onSubmit' data-action='submit'>{{ get_phrase('Log In') }}</button>
                        </form>
                        <div class="form-footer">
                            <p class="info">Don’t have an account?</p>
                            <a href="{{ route('register') }}" class="link">Create an Account</a>
                        </div>
                    </div>
                    <!-- Text and Image -->
                    <div class="form-advice-wrap">
                    <!-- Layout 2 -->
                        <div class="form-advertise-layout-2 form-advertise-layout d-flex align-items-center justify-content-between">
                            <div class="form-advertise-text">
                                <h1 class="title">Access to Endless <span class="blue-text">Creative Elements</span></h1>
                                <p class="info">Unleash Your Imagination with Unlimited Access to Premium Assets via Elements Subscription.</p>
                                <a href="#" class="subs-btn">Subscription</a>
                            </div>
                            <div class="form-advertise-img">
                                <img src="{{ asset('assets/img/signup/form-layout-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login content -->


<script>
    function onSubmit(token) {
        document.getElementById("login_form").submit();
    }
</script>

@endsection