@extends('global.index')
@section('content')

@include('frontend.elements.header')

@php

use Illuminate\Support\Facades\Auth;
$licenses = ['Free', 'Paid'];

@endphp

<!-- Start Breadcrumb -->
<section class="breadcrumb-three">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-7">
                <div class="breadcrumb-three-content">
                    <div class="content">
                        <ul class="breadcrumb-slug">
                            <li class="items"><a href="#">{{ get_phrase('Creative Elements') }}</a></li>
                            @if(isset($selected_category_details))
                                <li class="items active"><a href="#">{{ $selected_category_details['name'] }}</a></li>
                            @endif
                        </ul>
                        <h1 class="title">{{ $selected_category_details->title }}</h1>
                        <p class="info">
                            {{ $selected_category_details->subtitle }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 d-none d-md-block">
                <div class="breadcrumb-three-img">
                    @if($selected_category_details->slug == 'ui-kits')
                        <img src="{{ asset('assets/img/webp/graphics.png') }}" alt="" />
                    @elseif($selected_category_details->slug == 'components')
                        <img src="{{ asset('assets/img/webp/components.webp') }}" alt="" />
                    @elseif($selected_category_details->slug == 'html')
                        <img src="{{ asset('assets/img/webp/coding.webp') }}" alt="" />
                    @elseif($selected_category_details->slug == 'video')
                        <img src="{{ asset('assets/img/webp/video-player.webp') }}" alt="" />
                    @elseif($selected_category_details->slug == '3d')
                        <img src="{{ asset('assets/img/webp/3d-cube.webp') }}" alt="" />
                    @elseif($selected_category_details->slug == 'graphics')
                        <img src="{{ asset('assets/img/webp/web-graphics.webp') }}" alt="" />
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb -->

<!-- Start Web UI Content -->
<section class="web-ui-content">
    <div class="container">
        @if($selected_category != 'components')
        <form id="filter_form" action="{{ route('search_element_products', ['slug' => $selected_category]) }}" method="GET" class="filter-search">
        @else
        <form id="filter_form" action="{{ route('search_element_products_by_tag', ['slug' => $selected_category, 'tag' => $selected_tag]) }}" method="GET" class="filter-search">
        @endif
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="elementsUI-sidebar-wraper">
                        <div class="elementsUI-sidebar">
                            <!-- Title -->
                            <div class="sidebar-title sidebar-title-2 d-flex justify-content-between align-items-center">
                                <div class="sWrap d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg>
                                    <h4 class="title">{{ get_phrase('Filters') }}</h4>
                                </div>
                                <div class="icon d-sm-none d-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path></svg>
                                </div>
                            </div>
                            <div class="filter-items">
                                <div class="filter-item">
                                    <!-- Title -->
                                    <div class="d-flex justify-content-between align-items-center pb-25">
                                        <div class="icon-title">
                                            <img src="{{ asset('assets/img/icon/dashboard-2.svg') }}" alt="" />
                                            <h4 class="title">{{ get_phrase('Category') }}</h4>
                                        </div>
                                        <a href="#" class="filter-clear">{{ get_phrase('Clear') }}</a>
                                    </div>
                                    <ul class="link-filter-list">
                                        @foreach($element_categories as $element_category)
                                        <li>
                                            <a href="{{ route('search_element_products', ['slug' => $element_category->slug]) }}" class="@if($element_category->slug == $selected_category) active @endif">
                                                <span>{{ $element_category->name }}</span>
                                                <span>{{ count($element_category->elementCategory_to_elementProduct) }}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="filter-item">
                                    <!-- Title -->
                                    <div class="d-flex justify-content-between align-items-center pb-25">
                                        <div class="icon-title">
                                            <img src="{{ asset('assets/img/icon/dashboard-2.svg') }}" alt="" />
                                            <h4 class="title">{{ get_phrase('License') }}</h4>
                                        </div>
                                    </div>
                                    <ul class="filter-list">
                                        @foreach($licenses as $key => $license)
                                        @php $value_check = strtolower($license); @endphp
                                        <li>
                                            <div class="form-check filterCheck">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="license-{{ $key }}"
                                                    name="license"
                                                    value="{{ strtolower($license) }}" onchange="document.getElementById('filter_form').submit()"
                                                    @if($value_check == $selected_license) checked @endif
                                                />
                                                <label class="form-check-label" for="license-{{ $key }}">
                                                    {{ $license }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @if($selected_category_details->slug == 'components')
                                <div class="filter-item filter-item-last">
                                    <!-- Title -->
                                    <div class="d-flex justify-content-between align-items-center pb-25">
                                        <div class="icon-title">
                                            <img src="{{ asset('assets/img/icon/dashboard-2.svg') }}" alt="" />
                                            <h4 class="title">{{ get_phrase('Tags') }}</h4>
                                        </div>
                                    </div>
                                    <ul class="link-filter-list">
                                        @foreach($tags as $tag)
                                        <li>
                                            <a href="{{ route('search_element_products_by_tag', ['slug' => 'components', 'tag' => $tag->slug]) }}" class="@if($tag->slug == $selected_tag) active @endif">
                                                <span>{{ $tag->name }}</span>
                                                <span>{{ $tag->tag_to_elementProduct()->count() }}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Contert -->
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="elementsUI-content">
                        <!-- Products -->
                        <div class="row">
                            @foreach($element_products as $element_product)
                                @php
                                if(isset($element_product->like)) {
                                    $likes = json_decode($element_product->like);
                                } else {
                                    $likes = [];
                                }
                                if(Auth::check()) {
                                    $wishlists = json_decode(auth()->user()->wishlists);
                                }
                                if(empty($wishlists)){
                                    $wishlists = [];
                                }
                                @endphp
                                @if($element_product->product_to_elementCategory->slug != 'components')
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-item-three product-item-add">
                                        <a href="{{ route('element_product_details', ['title' => slugify($element_product->title.'-'.$element_product->id)]) }}" class="product-three-link"></a>
                                        <div class="thumbnil-price">
                                            <img src="{{ element_server_url($element_product->product_id, $element_product->product_to_elementCategory->slug).$element_product->thumbnail }}" alt="" />
                                            <ul class="wishlist-bookmark">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Like">
                                                    <span @if(Auth::check() && in_array(auth()->user()->id, $likes)) class="active" @endif data-id="heart-{{ $element_product->id }}" id="{{ $element_product->id }}" onclick="handleLike(this)">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.98268 15.4327C9.83416 15.4327 9.69447 15.4068 9.56359 15.355C9.43272 15.3032 9.30692 15.2238 9.1862 15.117L8.4378 14.4407C6.91322 13.0935 5.59778 11.8042 4.49149 10.5729C3.38518 9.34161 2.83203 8.08119 2.83203 6.79167C2.83203 5.81517 3.17124 4.99465 3.84966 4.33012C4.52807 3.6656 5.36248 3.33333 6.35286 3.33333C6.93299 3.33333 7.5417 3.47996 8.17899 3.77323C8.81628 4.06651 9.42285 4.64583 9.9987 5.51121C10.6023 4.64583 11.2158 4.06651 11.8392 3.77323C12.4626 3.47996 13.0644 3.33333 13.6445 3.33333C14.6349 3.33333 15.4693 3.6656 16.1477 4.33012C16.8262 4.99465 17.1654 5.81517 17.1654 6.79167C17.1654 8.11325 16.5855 9.39771 15.4258 10.645C14.2661 11.8924 12.9773 13.1522 11.5596 14.4247L10.7952 15.117C10.6745 15.2238 10.546 15.3032 10.4098 15.355C10.2735 15.4068 10.1312 15.4327 9.98268 15.4327Z" fill="#FE2048"/>
                                                        </svg>                            
                                                    </span>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Bookmark">
                                                    <span @if(in_array($element_product->id, $wishlists)) class="active" @endif data-id="wishlist-{{ $element_product->id }}" id="{{ $element_product->id }}" onclick="handleWishList(this)">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 14.7263L6.93652 15.8993C6.48141 16.0726 6.04487 16.0222 5.62692 15.7484C5.20897 15.4745 5 15.1033 5 14.6348V4.34683C5 3.96121 5.13458 3.64033 5.40375 3.3842C5.67292 3.12807 6.01012 3 6.41537 3H13.5846C13.9899 3 14.3271 3.12807 14.5962 3.3842C14.8654 3.64033 15 3.96121 15 4.34683V14.6348C15 15.1033 14.791 15.4745 14.3731 15.7484C13.9551 16.0222 13.5186 16.0726 13.0635 15.8993L10 14.7263ZM10 3.76126H5.8H14.2H10Z" fill="#0A7EFB"/>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content d-flex">
                                            <div class="product-title-author">
                                                <h4 class="product-title">{{ $element_product->title }}</h4>
                                            </div>
                                            @php
                                                try {
                                                    $prices = json_decode($element_product->price, true);
                                                    $currency = strtoupper(session('session_currency'));
                                                    $price = collect($prices)->firstWhere('currency', $currency)['amount'];
                                                    $isJson = (json_last_error() == JSON_ERROR_NONE);
                                                } catch (\Exception $e) {
                                                    $isJson = false;
                                                }
                                            @endphp

                                            @if ($isJson)
                                                <span class="product-price">{{ currency($price) }}</span>
                                            @else
                                                <span class="product-price">{{ currency($element_product->price) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-lg-4 col-md-6">
                                    <div v-else class="single-element-3">
                                        <a href="{{ route('element_product_details', ['title' => slugify($element_product->title.'-'.$element_product->id)]) }}" class="element-card-link"></a>
                                        <img src="{{ element_server_url($element_product->product_id, $element_product->product_to_elementCategory->slug).$element_product->thumbnail }}" alt="">
                                        <p class="card-free">
                                            @if($element_product->price_type == 'paid')
                                                @php
                                                    try {
                                                        $prices = json_decode($element_product->price, true);
                                                        $currency = strtoupper(session('session_currency'));
                                                        $price = collect($prices)->firstWhere('currency', $currency)['amount'];
                                                        $isJson = (json_last_error() == JSON_ERROR_NONE);
                                                    } catch (\Exception $e) {
                                                        $isJson = false;
                                                    }
                                                @endphp

                                                @if ($isJson)
                                                    {{ currency($price) }}
                                                @else
                                                    {{ currency($element_product->price) }}
                                                @endif
                                            @else
                                                {{ get_phrase('Free') }}
                                            @endif
                                        </p>
                                        <div class="card-overlay">
                                            <div class="overlay-copy-see d-flex align-items-center justify-content-between">
                                                <span></span>
                                                <a href="{{ route('element_product_details', ['title' => slugify($element_product->title.'-'.$element_product->id)]) }}" type="button" class="overlay-see" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Preview">
                                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.00192 9.14742C9.87671 9.14742 10.6197 8.84124 11.2308 8.22888C11.8419 7.6165 12.1474 6.87291 12.1474 5.9981C12.1474 5.12331 11.8413 4.38036 11.2289 3.76925C10.6165 3.15814 9.87294 2.85258 8.99813 2.85258C8.12334 2.85258 7.38039 3.15876 6.76928 3.77112C6.15817 4.3835 5.85261 5.12709 5.85261 6.0019C5.85261 6.87669 6.15879 7.61964 6.77115 8.23075C7.38353 8.84186 8.12712 9.14742 9.00192 9.14742ZM9.00003 8C8.44447 8 7.97225 7.80556 7.58336 7.41667C7.19447 7.02778 7.00003 6.55556 7.00003 6C7.00003 5.44444 7.19447 4.97222 7.58336 4.58333C7.97225 4.19444 8.44447 4 9.00003 4C9.55558 4 10.0278 4.19444 10.4167 4.58333C10.8056 4.97222 11 5.44444 11 6C11 6.55556 10.8056 7.02778 10.4167 7.41667C10.0278 7.80556 9.55558 8 9.00003 8ZM9.00003 11.5833C7.30132 11.5833 5.73509 11.1327 4.30134 10.2315C2.86757 9.33038 1.71694 8.14422 0.849422 6.67306C0.779978 6.5673 0.7327 6.45872 0.707589 6.34733C0.682477 6.23596 0.669922 6.12165 0.669922 6.0044C0.669922 5.88715 0.682477 5.77137 0.707589 5.65706C0.7327 5.54274 0.779978 5.4327 0.849422 5.32694C1.71694 3.85578 2.86757 2.66962 4.30134 1.76846C5.73509 0.867278 7.30132 0.416687 9.00003 0.416687C10.6987 0.416687 12.265 0.867278 13.6987 1.76846C15.1325 2.66962 16.2831 3.85578 17.1506 5.32694C17.2201 5.4327 17.2674 5.54128 17.2925 5.65267C17.3176 5.76404 17.3301 5.87835 17.3301 5.9956C17.3301 6.11285 17.3176 6.22863 17.2925 6.34294C17.2674 6.45726 17.2201 6.5673 17.1506 6.67306C16.2831 8.14422 15.1325 9.33038 13.6987 10.2315C12.265 11.1327 10.6987 11.5833 9.00003 11.5833ZM9.00003 10.5C10.5556 10.5 11.9931 10.0972 13.3125 9.29167C14.632 8.48611 15.6459 7.38889 16.3542 6C15.6459 4.61111 14.632 3.51389 13.3125 2.70833C11.9931 1.90278 10.5556 1.5 9.00003 1.5C7.44447 1.5 6.00697 1.90278 4.68753 2.70833C3.36808 3.51389 2.35419 4.61111 1.64586 6C2.35419 7.38889 3.36808 8.48611 4.68753 9.29167C6.00697 10.0972 7.44447 10.5 9.00003 10.5Z" fill="#1C1B1F"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="overlay-categories">
                                                <ul class="d-flex align-items-center">
                                                    @php
                                                        $tags = $element_product->product_to_tag();
                                                        $tagCount = $tags->count();
                                                    @endphp
                                                    @foreach($tags->take(3) as $tag)
                                                    <li>
                                                        <a href="{{ route('search_element_products_by_tag', ['slug' => 'components', 'tag' => $tag->slug]) }}"> 
                                                            {{ $tag->name }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                    @if($tagCount > 3)
                                                        <li><a href="#">+{{ $tagCount - 3 }} more</a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- Pagination -->
                        <div class="web-ui-pagination pt-60">
                            {{ $element_products->appends(request()->all())->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Web UI Content -->

<script type="text/javascript">

  "use strict";

  $(document).on('click', 'span[data-id]', function (e) {
    e.preventDefault()
    // var requested_to = $(this).attr('data-id');
  });

  function handleLike(elem){

    var product_id = elem.id;

    var url = "{{ route('handleLike', ['product_id' => ":product_id"]) }}";
    url = url.replace(":product_id", product_id);

    $.ajax({
      url: url,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        if (!response) {
          window.location.replace("{{ route('login') }}");
        } else {
          if(response.status == 200) {
            if ($(elem).hasClass('active')) {
              $(elem).removeClass('active')
            } else {
              $(elem).addClass('active')
            }
            // toastr.success(response.message);
            $('.custom_success').addClass('active');
            $('.custom_success p').text(response.message);
            setTimeout(function() {
                $('.custom_success').removeClass('active'); 
            }, 5000);

          } else if(response.status == 403) {
            // toastr.error(response.message);
            $('.custom_error').addClass('active');
            $('.custom_error p').text(response.message);
            setTimeout(function() {
                $('.custom_error').removeClass('active'); 
            }, 5000);

          }
        }
      }, 
      error: function(data){
        // toastr.error(data.responseText);
        $('.custom_error').addClass('active');
        $('.custom_error p').text(data.responseText);
        setTimeout(function() {
            $('.custom_error').removeClass('active'); 
        }, 5000);
        
      }
    });
  }

  function handleWishList(elem) {

    var course_id = elem.id;

    var url = "{{ route('handleWishList', ['course_id' => ":course_id"]) }}";
    url = url.replace(":course_id", course_id);

    $.ajax({
      url: url,
      headers: {
			  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  },
      success: function(response) {
        if (!response) {
          window.location.replace("{{ route('login') }}");
        } else {
          if(response.status == 200) {
            if ($(elem).hasClass('active')) {
              $(elem).removeClass('active')
            } else {
              $(elem).addClass('active')
            }
            // toastr.success(response.message);
            $('.custom_success').addClass('active');
            $('.custom_success p').text(response.message);
            setTimeout(function() {
                $('.custom_success').removeClass('active'); 
            }, 5000);

          } else if(response.status == 403) {
            // toastr.error(response.message);
            $('.custom_error').addClass('active');
            $('.custom_error p').text(response.message);
            setTimeout(function() {
                $('.custom_error').removeClass('active'); 
            }, 5000);

          }
        }
      },
      error: function(data){
        // toastr.error(data.responseText);
        $('.custom_error').addClass('active');
        $('.custom_error p').text(data.responseText);
        setTimeout(function() {
            $('.custom_error').removeClass('active'); 
        }, 5000);

      }
    });
  }

</script>

@endsection