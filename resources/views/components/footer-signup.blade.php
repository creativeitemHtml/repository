<section>
    <div class="container">
        <div class="row mb-100px">
            <div class="col-12">
                <div class="gr-subscribe-area">
                    <div class="gr-subscribe-content">
                        <h2 class="man-title-48px text-white mb-32px">{{ get_phrase('Take the leap - Sign up today!') }}</h2>
                        <form action="{{ route('register.company.form', 'growup-lms') }}" method="post">@csrf
                            <div class="position-relative max-w-503px">
                                <input type="email" name="email" class="form-control gr-subscribe2-input" placeholder="Enter your email">
                                <button type="submit" class="btn gr-btn-white gr-subscribe2-btn">{{ get_phrase('Get Started') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="gr-subscribe-img">
                        <img src="{{ asset('assets/img/lms/lms-signup-banner.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
