@extends('global.index')
@section('content')

@include('frontend.elements.header')

<!-- Start Breadcrumb -->
<section class="breadcrumb-two">
    <div class="breadcrumb-two-graphic-1">
        <img src="{{ asset('assets/img/banner-graphic-1.png') }}" alt="" />
    </div>
    <div class="container">
        <div class="breadcrumb-two-content">
            <div class="content">
                <h4 class="title">{{ get_phrase('Checkout Success') }}</h4>
                <p class="info">
                {{ get_phrase('Element subscription checkout success') }}
                </p>
            </div>
            <a href="{{ route('elements') }}" class="breadcrumb-two-back">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                {{ get_phrase('Back') }}
            </a>
        </div>
    </div>
</section>
<!-- End Breadcrumb -->

<!-- Start Checkout Wraper -->
<section class="checkout-wrap pt-60 pb-100">
    <div class="container">
        <!-- Checout Success -->
        <div class="checout-success-wrap">
            <h4 class="d-flex g-20 fz-18-sb-black pb-40">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg> {{ get_phrase('Checkout Success') }}
            </h4>
            <div class="checkout-success">
                <img src="{{ asset('assets/img/admin-customer/checkout-success.png') }}" alt="">
                <h4>{{ get_phrase('Subscription Confirmed') }}</h4>
                <div class="checout-btns d-flex flex-wrap justify-content-center g-20">
                    <a href="{{ route('customer.subscription_details') }}" class="btn-1">{{ get_phrase('Review Order') }}</a>
                    <a href="{{ route('elements') }}" class="btn-2">{{ get_phrase('Start Download') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Wraper -->

@endsection