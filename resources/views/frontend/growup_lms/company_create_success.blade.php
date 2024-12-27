@extends('global.index')

@php

@endphp

@section('content')
    @include('frontend.growup_lms.lms_header')

    <main class="gr-user-access-main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="gr-user-access-inner">
                        <div class="max-w-458px w-100">

                            <div class="gr-user-access-content">
                                <div class="mb-3 text-center">
                                    <img src="{{ asset('assets/img/icon/verified-120.svg') }}" alt="">
                                </div>
                                <h3 class="text-center mb-3 man-title-26px">Congratulations! {{ auth()->user()->name }}</h3>
                                <p class="man-subtitle-16px cin2-text-dark text-center mb-4 pb-1">Company Create Successfully!</p>
                                <a href="#" class="btn gr-btn-purple-gradient w-100">Explore Application</a>
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
