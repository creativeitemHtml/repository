@extends('global.index')
@section('content')

@include('frontend.elements.header')

@php
isset($product) ? "" : $product ="";
@endphp


<!-- Start Breadcrumb -->
<section class="breadcrumb-section">
    <div class="breadcrumb-one-graphic-1">
    <img src="{{ asset('assets/img/banner-graphic-1.png') }}" alt="" />
    </div>
    <div class="breadcrumb-one-graphic-2">
    <img src="{{ asset('assets/img/banner-graphic-2.png') }}" alt="" />
    </div>
    <div class="container">
    <div class="row">
        <div class="col-auto offset-3">
        <h3 class="breadcrumb-title">{{ get_phrase($page_title) }}</h3>
        </div>
    </div>
    </div>
</section>
<!-- End Breadcrumb -->

<!-- Start Elements -->
<section class="elements-section breadcrumb-under">
    <div class="container">
        <!-- Start Textual Inputs -->
        <div class="row">
            <!-- Left side -->
            <div class="col-lg-3">
                <div class="el_sideber_left">
                    <!-- Admin Info -->
                    <div class="admin_user_info d-flex flex-column align-items-center">
                        <div class="user_img">
                            <img src="{{ get_user_image(auth()->user()->id) }}" alt="" />
                        </div>
                        <div class="user_details d-flex flex-column align-items-center">
                            <h3 class="title">{{ auth()->user()->name }}</h3>
                            <p class="info">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <!-- Start Tab -->
                    <div class="l_sidebar_tab_2 d-flex flex-row flex-lg-column flex-wrap">
                        <div class="sidebar_customer_panel">
                            <h5 class="tab_title">My Customer Panel</h5>
                            <div class="l_sidebarMenu_2">
                                <ul class="nav-links">
                                    <!-- Sidebar menu -->
                                    <li class="nav-links-li">
                                        <a href="{{ route('element_products') }}" class="nav-item {{ $product }} d-flex justify-content-between align-items-center">
                                            <!-- Icon & Text -->
                                            <div class="icon-link d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <i class="fa-solid fa-people-carry-box"></i>
                                                </div>
                                                <span class="link_name">{{ get_phrase('Products') }}</span>
                                            </div>
                                            <!-- Notification -->
                                            <div class="nav-item-notify-2">
                                                <span>{{ $element_products_count->count() }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- category manager -->
                                    <li class="nav-links-li">
                                        <a href="{{ route('element_products') }}" class="nav-item d-flex justify-content-between align-items-center">
                                            <!-- Icon & Text -->
                                            <div class="icon-link d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <i class="fa-solid fa-people-carry-box"></i>
                                                </div>
                                                <span class="link_name">{{ get_phrase('Category manager') }}</span>
                                            </div>
                                            <!-- Notification -->
                                            <div class="nav-item-notify-2">
                                                <span>{{ $element_products_count->count() }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- price manager -->
                                    <li class="nav-links-li">
                                        <a href="{{ route('element_products') }}" class="nav-item d-flex justify-content-between align-items-center">
                                            <!-- Icon & Text -->
                                            <div class="icon-link d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <i class="fa-solid fa-people-carry-box"></i>
                                                </div>
                                                <span class="link_name">{{ get_phrase('Price manager') }}</span>
                                            </div>
                                            <!-- Notification -->
                                            <div class="nav-item-notify-2">
                                                <span>{{ $element_products_count->count() }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- subscription report -->
                                    <li class="nav-links-li">
                                        <a href="{{ route('superadmin.subscription_list') }}" class="nav-item d-flex justify-content-between align-items-center">
                                            <!-- Icon & Text -->
                                            <div class="icon-link d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <i class="fa-solid fa-people-carry-box"></i>
                                                </div>
                                                <span class="link_name">{{ get_phrase('Subscription Report') }}</span>
                                            </div>
                                            <!-- Notification -->
                                            <div class="nav-item-notify-2">
                                                <span>{{ $subscriptions->count() }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('logout') }}" class="sidebarLogoutBtn" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- Right side -->
            <div class="col-lg-9">
                @include('backend.superadmin.elements.'.$file_name)
            </div>
        </div>
        <!-- End Textual Inputs -->
    </div>
</section>
<!-- End Elements -->

@endsection