@extends('global.index')
@section('content')
    <!-- Start Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-one-graphic-1">
            <img src="{{ asset('assets/img/banner-graphic-1.png') }}" alt="" />
        </div>
        <div class="breadcrumb-one-graphic-2">
            <img src="{{ asset('assets/img/banner-graphic-2.png') }}" alt="" />
        </div>
    </section>
    <!-- End Breadcrumb -->


    <!-- offcanvas -->
    <div class="mobile-admin-offcanvas">
        <div class="container">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <!-- Admin Info -->
                    <div class="user ps-3 pt-3">
                        <div class="avatar"><img src="{{ get_user_image(auth()->user()->id) }}" alt="" /></div>
                        <div class="info">
                            <h3>{{ auth()->user()->name }}</h3>
                            <p>{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="col-lg-3 ">
                        <div class="el_sideber_left el_sideber_left-2">
                            <!-- Start Tab -->
                            <div class="l_sidebar_tab_2 d-flex flex-column flex-wrap">
                                <div class="sidebar_customer_panel">
                                    <div class="l_sidebarMenu l_sidebarMenu-2">
                                        <ul class="nav-links accordion-menu">

                                            <li class="nav-links-li-2 px-0 {{ request()->routeIs('customer.dashboard') ? 'active-submenu' : '' }}">
                                                <a href="{{ route('customer.dashboard') }}" class="nav-item d-flex align-items-center">
                                                    <div class="sidebar_icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="18" height="18">
                                                            <path d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z" />
                                                            <path d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                                                            <path d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z" />
                                                            <path d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                                                        </svg>
                                                    </div>
                                                    <span class="link-name">{{ get_phrase('Dashboard') }}</span>
                                                </a>
                                            </li>


                                            <li class="nav-links-li-2 px-0 {{ request()->routeIs(['customer.subscription_details', 'customer.purchase_history', 'customer.wishlists', 'customer.downloads', 'customer.purchase_invoice']) ? 'active-submenu' : '' }}">
                                                <a href="javascript:void(0);" class="nav-item nav-item-have-sub d-flex align-items-center">
                                                    <div class="sidebar_icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20">
                                                            <path
                                                                d="M19.9,3.091A4,4,0,0,0,14.9.153L13.176.646A2.981,2.981,0,0,0,12,1.3,2.981,2.981,0,0,0,10.824.646L9.1.153A4,4,0,0,0,4.105,3.091,5,5,0,0,0,0,8v7a5.006,5.006,0,0,0,5,5h6v2H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2H13V20h6a5.006,5.006,0,0,0,5-5V8A5,5,0,0,0,19.9,3.091ZM13,3.531a1,1,0,0,1,.725-.961l1.725-.493A2,2,0,0,1,18,4V7.938a2.006,2.006,0,0,1-1.45,1.921L13,10.873ZM6.8,2.4A1.993,1.993,0,0,1,8.55,2.077l1.725.493A1,1,0,0,1,11,3.531v7.342L7.45,9.859A2.006,2.006,0,0,1,6,7.938V4A1.987,1.987,0,0,1,6.8,2.4ZM22,15a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V8A3,3,0,0,1,4,5.184V7.938a4.014,4.014,0,0,0,2.9,3.845l3.451.987a6.019,6.019,0,0,0,3.3,0l3.451-.987A4.014,4.014,0,0,0,20,7.938V5.184A3,3,0,0,1,22,8Z" />
                                                        </svg>

                                                    </div>
                                                    <span class="link-name">{{ get_phrase('GrowUp Lms') }}</span>
                                                </a>
                                                <ul class="sideBar-sub"
                                                    style="display: {{ request()->routeIs('customer.subscription_details') || request()->routeIs(['customer.purchase_history', 'customer.purchase_invoice']) || request()->routeIs('customer.wishlists') || request()->routeIs('customer.downloads') ? 'block' : 'none' }}">
                                                    <li><a href="{{ route('customer.subscription_details') }}" class="{{ request()->routeIs('customer.subscription_details') ? 'active' : '' }}">{{ get_phrase('Subscription Details') }}</a></li>
                                                    <li><a href="{{ route('customer.purchase_history') }}" class="{{ request()->routeIs(['customer.purchase_history', 'customer.purchase_invoice']) ? 'active' : '' }}">{{ get_phrase('Purchase History') }}</a></li>
                                                </ul>
                                            </li>


                                            <li class="nav-links-li-2 px-0 {{ request()->routeIs('customer.projects') || request()->routeIs('customer.project_create') || request()->routeIs('customer.project_details') || request()->routeIs('customer.milestone_invoice') ? 'active-submenu' : '' }}">
                                                <a href="{{ route('customer.projects') }}" class="nav-item d-flex align-items-center">
                                                    <div class="sidebar_icon">
                                                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                                            <path
                                                                d="m19,1H5C2.243,1,0,3.243,0,6v12c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5V6c0-2.757-2.243-5-5-5Zm3,17c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V6c0-1.654,1.346-3,3-3h14c1.654,0,3,1.346,3,3v12Zm-3-11c0,.552-.448,1-1,1h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1Zm-11,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm11,5c0,.552-.448,1-1,1h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1Zm-11,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm11,5c0,.552-.448,1-1,1h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1Zm-11,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Z" />
                                                        </svg>
                                                    </div>
                                                    <span class="link-name">{{ get_phrase('My Projects') }}</span>
                                                </a>
                                            </li>


                                            <li class="nav-links-li-2 px-0 {{ request()->routeIs('customer.profile') ? 'active-submenu' : '' }}">
                                                <a href="{{ route('customer.profile') }}" class="nav-item d-flex align-items-center">
                                                    <div class="sidebar_icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="20" height="20">
                                                            <path d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM7,22V21a5,5,0,0,1,10,0v1Zm15-3a3,3,0,0,1-3,3V21A7,7,0,0,0,5,21v1a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H19a3,3,0,0,1,3,3Z" />
                                                            <path d="M12,4a4,4,0,1,0,4,4A4,4,0,0,0,12,4Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,10Z" />
                                                        </svg>

                                                    </div>
                                                    <span class="link-name">{{ get_phrase('Account') }}</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <a href="{{ route('logout') }}" class="sidebarLogoutBtn" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <path
                                            d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
                                    </svg>
                                    <span>{{ get_phrase('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas -->

    <!-- Start Elements -->
    <section class="elements-section elements-section-2 breadcrumb-under">
        <div class="container">
            <!-- Start Textual Inputs -->
            <div class="row justify-content-center">
                <!-- Left side -->
                <div class="col-lg-3 admin-d-none">
                    <div class="el_sideber_left el_sideber_left-2">
                        <!-- Admin Info -->

                        <div class="user">
                            <div class="avatar"><img src="{{ get_user_image(auth()->user()->id) }}" alt="" /></div>
                            <div class="info">
                                <h3>{{ auth()->user()->name }}</h3>
                                <p>{{ auth()->user()->email }}</p>
                            </div>
                        </div>


                        <!-- Start Tab -->
                        <div class="l_sidebar_tab_2 d-flex flex-column flex-wrap">
                            <div class="sidebar_customer_panel">
                                <div class="l_sidebarMenu l_sidebarMenu-2">
                                    <ul class="nav-links accordion-menu">


                                        <li class="nav-links-li-2 {{ request()->routeIs('customer.dashboard') ? 'active-submenu' : '' }}">
                                            <a href="{{ route('customer.dashboard') }}" class="nav-item d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="18" height="18">
                                                        <path d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z" />
                                                        <path d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                                                        <path d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z" />
                                                        <path d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                                                    </svg>
                                                </div>
                                                <span class="link-name">{{ get_phrase('Dashboard') }}</span>
                                            </a>
                                        </li>


                                        <li class="nav-links-li-2 {{ request()->routeIs(['customer.growup.lms.subscription', 'customer.growup.lms.purchase.history', 'customer.wishlists', 'customer.downloads', 'customer.purchase_invoice']) ? 'active-submenu' : '' }}">
                                            <a href="javascript:void(0);" class="nav-item nav-item-have-sub d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20">
                                                        <path
                                                            d="M19.9,3.091A4,4,0,0,0,14.9.153L13.176.646A2.981,2.981,0,0,0,12,1.3,2.981,2.981,0,0,0,10.824.646L9.1.153A4,4,0,0,0,4.105,3.091,5,5,0,0,0,0,8v7a5.006,5.006,0,0,0,5,5h6v2H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2H13V20h6a5.006,5.006,0,0,0,5-5V8A5,5,0,0,0,19.9,3.091ZM13,3.531a1,1,0,0,1,.725-.961l1.725-.493A2,2,0,0,1,18,4V7.938a2.006,2.006,0,0,1-1.45,1.921L13,10.873ZM6.8,2.4A1.993,1.993,0,0,1,8.55,2.077l1.725.493A1,1,0,0,1,11,3.531v7.342L7.45,9.859A2.006,2.006,0,0,1,6,7.938V4A1.987,1.987,0,0,1,6.8,2.4ZM22,15a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V8A3,3,0,0,1,4,5.184V7.938a4.014,4.014,0,0,0,2.9,3.845l3.451.987a6.019,6.019,0,0,0,3.3,0l3.451-.987A4.014,4.014,0,0,0,20,7.938V5.184A3,3,0,0,1,22,8Z" />
                                                    </svg>

                                                </div>
                                                <span class="link-name">{{ get_phrase('GrowUp Lms') }}</span>
                                            </a>
                                            <ul class="sideBar-sub"
                                                style="display: {{ request()->routeIs('customer.growup.lms.subscription') || request()->routeIs(['customer.growup.lms.purchase.history', 'customer.purchase_invoice']) || request()->routeIs('customer.wishlists') || request()->routeIs('customer.downloads') ? 'block' : 'none' }}">
                                                <li><a href="{{ route('customer.growup.lms.subscription') }}" class="{{ request()->routeIs('customer.growup.lms.subscription') ? 'active' : '' }}">{{ get_phrase('Subscription Details') }}</a></li>
                                                <li><a href="{{ route('customer.growup.lms.purchase.history') }}" class="{{ request()->routeIs(['customer.growup.lms.purchase.history', 'customer.purchase_invoice']) ? 'active' : '' }}">{{ get_phrase('Purchase History') }}</a></li>
                                            </ul>
                                        </li>


                                        <li class="nav-links-li-2 {{ request()->routeIs('customer.projects') || request()->routeIs('customer.project_create') || request()->routeIs('customer.project_details') || request()->routeIs('customer.milestone_invoice') ? 'active-submenu' : '' }}">
                                            <a href="{{ route('customer.projects') }}" class="nav-item d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                                        <path
                                                            d="m19,1H5C2.243,1,0,3.243,0,6v12c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5V6c0-2.757-2.243-5-5-5Zm3,17c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V6c0-1.654,1.346-3,3-3h14c1.654,0,3,1.346,3,3v12Zm-3-11c0,.552-.448,1-1,1h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1Zm-11,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm11,5c0,.552-.448,1-1,1h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1Zm-11,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm11,5c0,.552-.448,1-1,1h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1Zm-11,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Z" />
                                                    </svg>
                                                </div>
                                                <span class="link-name">{{ get_phrase('My Projects') }}</span>
                                            </a>
                                        </li>


                                        <li class="nav-links-li-2 {{ request()->routeIs('customer.profile') ? 'active-submenu' : '' }}">
                                            <a href="{{ route('customer.profile') }}" class="nav-item d-flex align-items-center">
                                                <div class="sidebar_icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="20" height="20">
                                                        <path d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM7,22V21a5,5,0,0,1,10,0v1Zm15-3a3,3,0,0,1-3,3V21A7,7,0,0,0,5,21v1a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H19a3,3,0,0,1,3,3Z" />
                                                        <path d="M12,4a4,4,0,1,0,4,4A4,4,0,0,0,12,4Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,10Z" />
                                                    </svg>

                                                </div>
                                                <span class="link-name">{{ get_phrase('Account') }}</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <a href="{{ route('logout') }}" class="sidebarLogoutBtn w-100" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.375 14.1667V15C7.375 17.015 8.485 18.125 10.5 18.125H15.5C17.515 18.125 18.625 17.015 18.625 15V5C18.625 2.985 17.515 1.875 15.5 1.875H10.5C8.485 1.875 7.375 2.985 7.375 5V5.83333C7.375 6.17833 7.655 6.45833 8 6.45833C8.345 6.45833 8.625 6.17833 8.625 5.83333V5C8.625 3.68583 9.18583 3.125 10.5 3.125H15.5C16.8142 3.125 17.375 3.68583 17.375 5V15C17.375 16.3142 16.8142 16.875 15.5 16.875H10.5C9.18583 16.875 8.625 16.3142 8.625 15V14.1667C8.625 13.8217 8.345 13.5417 8 13.5417C7.655 13.5417 7.375 13.8217 7.375 14.1667ZM2.42332 10.2392C2.35999 10.0867 2.35999 9.91416 2.42332 9.76166C2.45499 9.68499 2.50081 9.61583 2.55831 9.55833L5.05831 7.05833C5.30248 6.81417 5.69834 6.81417 5.9425 7.05833C6.18667 7.3025 6.18667 7.69834 5.9425 7.9425L4.50915 9.37584H13.8333C14.1783 9.37584 14.4583 9.65584 14.4583 10.0008C14.4583 10.3458 14.1783 10.6258 13.8333 10.6258H4.50915L5.9425 12.0592C6.18667 12.3033 6.18667 12.6992 5.9425 12.9433C5.82084 13.065 5.66081 13.1267 5.50081 13.1267C5.34081 13.1267 5.18084 13.0658 5.05917 12.9433L2.55917 10.4433C2.50084 10.3842 2.45499 10.315 2.42332 10.2392Z"
                                        fill="white" />
                                </svg>
                                <span>{{ get_phrase('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="col-lg-9">
                    <!-- Main Content -->
                    @if (isset($sub_folder) && $sub_folder != '')
                        @include('backend.customer.' . $sub_folder . '.' . $file_name)
                    @else
                        @include('backend.customer.' . $file_name)
                    @endif
                </div>
            </div>
            <!-- End Textual Inputs -->
        </div>
    </section>
    <!-- End Elements -->
@endsection
