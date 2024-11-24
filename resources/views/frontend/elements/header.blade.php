@php

use App\Models\ElementCategory;
use App\Models\Subscription;

$element_categories = ElementCategory::where('parent_id', NULL)->where('status', 1)->orderBy('order', 'asc')->get();

$today = strtotime('now');

if(Auth::check()) {
  $current_subscription = Subscription::where('user_id', auth()->user()->id)->latest()->first();
}

@endphp

<!-- Start Element Header -->
<section class="element-menu-section ">
    <div class="element-menu-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="element-menu-wrap d-flex justify-content-between align-items-center">
                        <!-- Logo -->
                        <div class="element-logo">
                            <a href="{{ route('elements') }}"><img src="{{ asset('assets/img/new-icons-images/element-logo.svg') }}" alt="logo"></a>
                        </div>
                        <!-- Menu -->
                        <div class="element-menu-area">
                            <nav class="element-desktop-nav">
                                <ul class="d-flex align-items-center align-items-center">
                                    @foreach($element_categories as $element_category)
                                    @php
                                    $sub_categories = ElementCategory::where('parent_id', $element_category->id)->where('status', 1)->get();
                                    $currentUrl = request()->url();
                                    $lastSegment = basename($currentUrl);
                                    @endphp
                                    <li>
                                        <a href="{{ route('search_element_products', ['slug' => $element_category->slug]) }}" class="@if($element_category->slug == $lastSegment) active @endif">
                                            {{ $element_category->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                    <li>
                                        <a href="{{ route('elements_package_pricing') }}" class="@if($lastSegment == 'pricing') active @endif">{{ get_phrase('Pricing') }}</a>
                                    </li>
                                    <!-- <li><a href="#" class="border-none">Pricing</a></li> -->
                                    @if($lastSegment == 'elements')
                                    <li class="el-have-search">
                                        <a href="javascript:void(0);" class="search-show-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                        </a>
                                        <!-- Search Bar  -->
                                        <div class="menu-search-antry">
                                            <form id="search-form" action="{{ route('search_element_products', ['slug' => 'ui-kits']) }}" class="d-flex align-items-center">
                                                <select name="" id="selectOption" class="nice-select" onchange="updateFormAction()">
                                                    @foreach($element_categories as $element_category)
                                                    <option value="{{ $element_category->slug }}">{{ $element_category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="search-input-after">
                                                    <input type="search" name="search" id="search" class="form-control form-control-2">
                                                </div>
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                                    {{ get_phrase('Search') }}
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                        <!-- Unlimited Button -->
                        <div class="element-sm-btn d-flex align-items-center">
                            @if((isset($current_subscription) && $current_subscription->expire_date < $today) || empty($current_subscription) || !auth()->user())
                            <div class="element-menu-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                            </div>
                            <a href="{{ route('elements_package_pricing') }}" class="unlimited-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.6164 17.25L20.2316 18.9187C20.1529 19.2592 19.8499 19.5 19.5004 19.5H4.50039C4.15089 19.5 3.84789 19.2592 3.76914 18.9187L3.38439 17.25H20.6164ZM22.4816 9.16874L20.9629 15.75H3.03789L1.51914 9.16874C1.45239 8.87849 1.56339 8.57549 1.80264 8.39774C2.04264 8.21999 2.36439 8.20124 2.62239 8.34899L7.26414 11.0017L11.3756 4.83449C11.5099 4.63349 11.7319 4.50899 11.9726 4.49999C12.2156 4.48949 12.4444 4.59899 12.5921 4.78949L17.4139 10.989L21.3341 8.37599C21.5899 8.20649 21.9236 8.20799 22.1764 8.38274C22.4299 8.55749 22.5499 8.86949 22.4816 9.16874Z" fill="white"/>
                                </svg>
                                <span>Get Unlimited <span class="hide-text">Downloads</span></span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Element Header -->

<script>
    function updateFormAction() {
        var selectedValue = $('#selectOption').val(); // Get the selected value
        var newAction = "{{ route('search_element_products', ['selectedValue']) }}";
        newAction = newAction.replace('selectedValue', selectedValue);
        
        $('#search-form').attr('action', newAction); // Update the form's action
    }
</script>