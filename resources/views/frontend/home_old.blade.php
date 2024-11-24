@extends('global.index')
@section('content')

<!-- Start Banner Area -->
<section class="home-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Vectors -->
                <div class="banner-vaectors">
                    <img class="banner-vaector-1" src="{{ asset('assets/img/home/home-banner-vector-1.svg') }}" alt="">
                    <img class="banner-vaector-2" src="{{ asset('assets/img/home/home-banner-vector-2.svg') }}" alt="">
                </div>
                <!-- Content -->
                <div class="home-banner-area">
                    <h1 class="title-64">{{ get_phrase('Creative Elements') }}</h1>
                    <p class="pera-24">{{ get_phrase('Free Premium UI Components') }}</p>
                    <div class="home-banner-path d-flex align-items-center justify-content-center">
                        <a href="{{ route('elements') }}">
                          {{  get_phrase('Learn More') }}
                          <img src="{{ asset('assets/img/icon/right-blue-angle.svg') }}" alt="">
                        </a>
                        <a href="{{ route('elements_package_pricing') }}">
                          {{ get_phrase('Subscribe') }}
                          <img src="{{ asset('assets/img/icon/right-blue-angle.svg') }}" alt="">
                        </a>
                    </div>
                    <!-- Nav -->
                    <nav class="home-banner-nav">
                        <ul>
                            @foreach($element_categories as $element_category)
                            <li>
                              <a href="{{ route('search_element_products', ['slug' => $element_category->slug]) }}" class="{{ $element_category->slug == 'ui-kits' ? 'active':'' }}">{{ $element_category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Product Area -->
<section class="pb-110">
      <div class="home-product-wrap pb-80">
        <div class="home-product-single home-product-single-1">
          <div class="home-product-inner">
            <h2 class="title-48">{{ get_phrase('Academy LMS') }}</h2>
            <p class="pera-16">{{ get_phrase('Create, Manage, and sell your courses in one place. Academy LMS allows you to create courses and earn money by selling them to your students. Your students can browse through the options and select the best course for them') }}.</p>
            <div class="product-link-path d-flex align-items-center justify-content-center">
              <a href="https://1.envato.market/jGqOZ" target="_blank">
                {{ get_phrase('Learn More') }}
                <img src="{{ asset('assets/img/icon/right-blue-angle.svg') }}" alt="">
              </a>
              <a href="https://1.envato.market/jGqOZ" target="_blank">
                {{ get_phrase('Buy Now') }}
                <img src="{{ asset('assets/img/icon/right-blue-angle.svg') }}" alt="">
              </a>
            </div>
            <div class="product-vactor-wrap">
              <img src="{{ asset('assets/img/home/product-vector-1.svg') }}" alt="">
            </div>
          </div>
        </div>
        <div class="home-product-single home-product-single-2">
          <div class="home-product-inner">
            <h2 class="title-48">{{ get_phrase('Locus') }}</h2>
            <p class="pera-16">{{ get_phrase('Locus is a directory listing website for your real estate business. Create subscription-based packages for your agents and they can list their properties to sell. Buyers can visit properties to buy or rent and contact the agent') }}.</p>
            <div class="product-link-path d-flex align-items-center justify-content-center">
              <a href="https://1.envato.market/locus_creativeitem" target="_blank">
                {{ get_phrase('Learn More') }}
                <img src="{{ asset('assets/img/icon/right-blue-angle.svg') }}" alt="">
              </a>
              <a href="https://1.envato.market/locus_creativeitem" target="_blank">
                {{ get_phrase('Buy Now') }}
                <img src="{{ asset('assets/img/icon/right-blue-angle.svg') }}" alt="">
              </a>
            </div>
            <div class="product-vactor-wrap">
              <img src="{{ asset('assets/img/home/product-vector-2.svg') }}" alt="">
            </div>
          </div>
        </div>
        <div class="home-product-single home-product-single-3">
          <div class="home-product-inner">
            <h2 class="title-48">{{ get_phrase('Sociopro') }}</h2>
            <p class="pera-16">{{ get_phrase('Utilize Sociopro to create a private, secure social network. Sociopro allows you to build a safe social environment where you can choose who you connect with and can share content with your users and earn money from it') }}.</p>
            <div class="product-link-path d-flex align-items-center justify-content-center">
              <a href="https://1.envato.market/15n2Px" target="_blank">
                {{ get_phrase('Learn More') }}
                <img src="{{ asset('assets/img/icon/right-blue-angle.svg') }}" alt="">
              </a>
              <a href="https://1.envato.market/15n2Px" target="_blank">
                {{ get_phrase('Buy Now') }}
                <img src="{{ asset('assets/img/icon/right-blue-angle.svg') }}" alt="">
              </a>
            </div>
            <div class="product-vactor-wrap">
              <img src="{{ asset('assets/img/home/product-vector-3.svg') }}" alt="">
            </div>
          </div>
        </div>
        <div class="home-product-single home-product-single-4">
          <div class="home-product-inner">
            <h2 class="title-48">{{ get_phrase('Ekattor 8') }}</h2>
            <p class="pera-16">{{ get_phrase("Keep track of your school's activity with Ekattor 8 ERP.  Ekattor 8 is designed to assist your schools in administering the responsibilities on a day-to-day basis by reducing the pressure of managing a large amount of data") }}.</p>
            <div class="product-link-path d-flex align-items-center justify-content-center">
              <a href="https://1.envato.market/gb0BLv" target="_blank">
                {{ get_phrase('Learn More') }}
                <img src="{{ asset('assets/img/icon/right-white-angle.svg') }}" alt="">
              </a>
              <a href="https://1.envato.market/gb0BLv" target="_blank">
                {{ get_phrase('Buy Now') }}
                <img src="{{ asset('assets/img/icon/right-white-angle.svg') }}" alt="">
              </a>
            </div>
            <div class="product-vactor-wrap">
              <img src="{{ asset('assets/img/home/product-vector-4.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="{{ route('web_applications') }}" class="view-all-products-2">
            <span class="content">View All Products</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>
        </a>
    </div>
    </section>
    <!-- End Product Area -->


    <!-- Start Why Best Product Area -->
    <section class="why-best-products">
      <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="best-products">
                    <h4 class="title">Why Our Products are the best</h4>
                    <p class="info">We work on products that matter &amp; make the product keeping in mind customers' needs. What you actually want, what's going to reduce your workload, and make your life easier is our first priority.</p>
                </div>
            </div>
        </div>
        <!-- Items -->
        <div class="why-best-items">
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/search-alt.svg') }}" alt="">
                    </div>
                    <h4>Research</h4>
                </div>
                <p class="info">A depth market study is our heart of production. We focus on the solution to people's problems.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/file.svg') }}" alt="">
                    </div>
                    <h4>Documentation</h4>
                </div>
                <p class="info">We properly described every single module of our products which makes our customer's life easy</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/life-ring.svg') }}" alt="">
                    </div>
                    <h4>Customer Support</h4>
                </div>
                <p class="info">Customers can ask us questions anytime, and we are committed to answering them on time.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/refresh.svg') }}" alt="">
                    </div>
                    <h4>Continuous Update</h4>
                </div>
                <p class="info">Our products are updated with new features and bug fixes regularly.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/shield.svg') }}" alt="">
                    </div>
                    <h4>Data Security</h4>
                </div>
                <p class="info">There is no compromise with our customer's data security, even a single bit.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/ruler-triangle.svg') }}" alt="">
                    </div>
                    <h4>Testing</h4>
                </div>
                <p class="info">Every release of our products is adequately examined with multiple levels concerning bugs and user experience.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/head-vr.svg') }}" alt="">
                    </div>
                    <h4>Technology</h4>
                </div>
                <p class="info">Most advanced technologies are used in our products and has always been updated with the latest trends.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/user.svg') }}" alt="">
                    </div>
                    <h4>Customer first</h4>
                </div>
                <p class="info">Customer satisfaction is the heart of our hard work. We do whatever it takes to make them happy.</p>
            </div>
        </div>
      </div>
    </section>
    <!-- End Why Best Product Area -->


    <!-- Start Trusted Area -->
    <section class="trusted-section">
      <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="trusted-title">
                    <h4 class="title">Trusted by <span>24,000</span> individuals <br>agencies and enterprises all over the world.</h4>
                    <p class="info">24-hour customer support, Your privacy is our priority, Always there to help you out</p>
                </div>
            </div>
        </div>
        <div class="trusted-items">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="trusted-item">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/crown.svg') }}" alt="">
                        </div>
                        <h4 class="title">50+</h4>
                        <p class="info">Awesome products</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trusted-item">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/ticket.svg') }}" alt="">
                        </div>
                        <h4 class="title">24K+</h4>
                        <p class="info">Customers</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trusted-item">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/marker.svg') }}" alt="">
                        </div>
                        <h4 class="title">11+</h4>
                        <p class="info">Years of experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trusted-item">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home/shield-check.svg') }}" alt="">
                        </div>
                        <h4 class="title">950+</h4>
                        <p class="info">5 star reviews</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- End Trusted Area -->

@endsection