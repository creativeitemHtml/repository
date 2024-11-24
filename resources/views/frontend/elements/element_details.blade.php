@extends('global.index')
@section('content')

@include('frontend.elements.header')

@php
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;
use App\Models\ElementProductPayment;
use App\Models\ElementDownload;

$slug = $selected_product->product_to_elementCategory->slug;

$today = strtotime('now');

if(isset($selected_product->like)) {
    $likes = json_decode($selected_product->like);
} else {
    $likes = [];
}

if(Auth::check()) {
  $wishlists = json_decode(auth()->user()->wishlists);
  $current_subscription = Subscription::where('user_id', auth()->user()->id)->latest()->first();
  $is_purchased = ElementProductPayment::where('user_id', auth()->user()->id)->where('element_product_id', $selected_product->id)->latest()->first();
}
if(empty($wishlists)){
  $wishlists = [];
}

$preview_thumbnails = get_screenshots($selected_product->product_to_elementCategory->slug, $selected_product->product_id);

$preview_thumbnails = json_decode($preview_thumbnails);

if(Auth::check() && auth()->user()->role_id == 6) {
  $today_date = now()->format('Y-m-d');

  $remaining_download_limit = $current_subscription->subscription_to_package->download_limit - ElementDownload::where('user_id', auth()->user()->id)->whereDate('created_at', $today_date)->count();
}

@endphp

<!-- Start Main Content -->
<section class="elDetails pt-30 pb-100">
    <div class="container">
        <!-- Title -->
        <div class="elDetails-title d-flex justify-content-between align-items-start flex-wrap g-20">
            <div class="content">
                <h1 class="title">{{ $selected_product->title }}</h1>
                <p class="info">
                    {{ $selected_product->summary }}
                </p>
            </div>
            <a href="{{ url()->previous() }}" class="breadcrumb-two-back">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                Back
            </a>
        </div>
        <!-- Preview & Sidebar -->
        <div class="elDetails-preview-sidebar pb-50">
            <div class="row">
                <!-- Preview -->
                <div class="col-lg-8">
                    <!-- Slider -->
                    <div class="preview-wrap">
                        @if($selected_product->product_to_elementCategory->slug != 'components')
                        <div class="swiperSlider-control">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        @endif
                        @php $thumbnails = json_decode($selected_product->preview_thumbnails, true); @endphp
                        <div class="swiper elSlider-main">
                            <div class="swiper-wrapper">
                                @foreach($thumbnails as $thumbnail)
                                <div class="swiper-slide">
                                    <img src="{{ element_server_url($selected_product->product_id, $selected_product->product_to_elementCategory->slug).$thumbnail }}" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @if($selected_product->product_to_elementCategory->slug != 'components')
                        <div thumbsSlider="" class="swiper elSlider-thumb">
                            <div class="swiper-wrapper">
                                @foreach($thumbnails as $thumbnail)
                                <div class="swiper-slide">
                                    <img src="{{ element_server_url($selected_product->product_id, $selected_product->product_to_elementCategory->slug).$thumbnail }}"/>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="elDetails-live-about">
                        <!-- Button -->
                        <div class="d-flex justify-content-center align-items-center flex-wrap g-10 pb-30">
                            <div class="venobox-img-wrap">

                                @if($selected_product->product_to_elementCategory->slug == 'ui-kits' || $selected_product->product_to_elementCategory->slug == 'laravel-themes')
                                    <a class="my-image-links live-preview-btn" data-gall="gallery01" href="{{ $preview_thumbnails[0]->src }}">{{ get_phrase('Screenshots') }}</a>
                                    @foreach($preview_thumbnails as $thumbnail)
                                        <a class="my-image-links" data-gall="gallery01" href="{{ $thumbnail->src }}"></a>
                                    @endforeach
                                @endif

                                @if($selected_product->product_to_elementCategory->slug == 'html')
                                    <a href="https://demo.creativeitem.com/iframe-element/index.php?marketplace=creativeelement&product={{ $selected_product->product_id }}" target="_blank" class="live-preview-btn">{{ get_phrase('Preview') }}</a>
                                @endif

                            </div>
                            <a href="javascript:;" 
                               class="el-save-btn {{ in_array($selected_product->id, $wishlists) ? 'active' : '' }}" 
                               data-id="wishlist-{{ $selected_product->id }}" id="{{ $selected_product->id }}" 
                               onclick="handleWishList(this)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 14.7263L6.93652 15.8993C6.48141 16.0726 6.04487 16.0222 5.62692 15.7484C5.20897 15.4745 5 15.1033 5 14.6348V4.34683C5 3.96121 5.13458 3.64033 5.40375 3.3842C5.67292 3.12807 6.01012 3 6.41537 3H13.5846C13.9899 3 14.3271 3.12807 14.5962 3.3842C14.8654 3.64033 15 3.96121 15 4.34683V14.6348C15 15.1033 14.791 15.4745 14.3731 15.7484C13.9551 16.0222 13.5186 16.0726 13.0635 15.8993L10 14.7263ZM10 3.76126H5.8H14.2H10Z" fill="#0A7EFB"></path>
                                </svg>
                                @if(Auth::check() && in_array($selected_product->id, $wishlists)) 
                                    {{ get_phrase('Saved') }} 
                                @else
                                    {{ get_phrase('Save') }}
                                @endif
                            </a>
                            @if(!empty($selected_product->previewUrl))
                            <a class="live-preview-btn" target="_blank" href="{{ $selected_product->previewUrl}}">{{ get_phrase('Preview') }}</a>
                            @else
                            @endif
                        </div>
                        <!-- About -->
                        <div class="elDetails-about">
                            <h2 class="title">{{ get_phrase('About') }}</h2>
                            <div class="elDetails-about-wrap">
                                <p>{!! $selected_product->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="elDetails-sidebar">
                        <!-- Items Summary -->
                        <div class="el-summary-items">
                            <!-- Favourite -->
                            <div class="el-summary-item"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="Liked by"
                                data-id="heart-{{ $selected_product->id }}"
                                id="bookmark{{ $selected_product->id }}"
                                onclick="handleLike(this, '{{$selected_product->id}}')"
                            >
                                <div class="icon" id="{{ $selected_product->id }}">
                                    @if(Auth::check() && in_array(auth()->user()->id, $likes))
                                        <img clas="img" src="{{ asset('assets/img/icon/heart-fill.svg') }}" alt="" />
                                    @else
                                        <img clas="img" src="{{ asset('assets/img/icon/heart.svg') }}" alt="" />
                                    @endif
                                </div>
                                <span>{{ count($likes) }}</span>
                            </div>
                            <!-- Downloads -->
                            <div class="el-summary-item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Downloaded">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/download.svg') }}" alt="" />
                                </div>
                                <span>{{ $selected_product->download }}</span>
                            </div>
                            <!-- Share -->
                            <div class="el-summary-item shareDropdown">
                                <button class="shareDropdown-button">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/share.svg') }}" alt="" />
                                    </div>
                                    <span>{{ get_phrase('Share') }}</span>
                                </button>
                                <ul class="shareDropdown-menu">
                                    <li class="shareDropdown-content">
                                        <div class="copyInput">
                                            <input type="text" id="link-input" class="form-control" value="{{ url()->current() }}" />
                                            <a href="{{ url()->current() }}" class="linkCopy" >
                                                <img src="{{ asset('assets/img/icon/link.svg') }}" alt="" />
                                            </a>
                                            <button class="copyBtn" id="copy-button">
                                                <img id="copy-image" src="{{ asset('assets/img/icon/duplicate.svg') }}" alt="" />
                                                {{ get_phrase('Copy') }}
                                            </button>
                                            <div class="copy-overlay">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                                                <p>{{ get_phrase('Copied') }}</p>
                                            </div>
                                        </div>
                                        <ul class="shareDropdown-social">
                                            @php $url = url()->current(); @endphp
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}&display=popup" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                                                    {{ get_phrase('Facebook') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://twitter.com/share?url={{ $url }}" title="Click to share this post on Twitter" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                                                    {{ get_phrase('Twitter') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://pinterest.com/pin/create/button/?url={{ $url }}&media={{ element_server_url($selected_product->product_id, $selected_product->product_to_elementCategory->slug).$selected_product->thumbnail }}&description={{ $selected_product->title }}" rel="me" title="Pinterest" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
                                                    {{ get_phrase('Pinterest') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ $url }}" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                                                    {{ get_phrase('Linkedin') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Price -->
                        <div class="elitem-price p-30 bd-r-10 box-shadow-13 mb-30">
                            @php
                                try {
                                    $prices = json_decode($selected_product->price, true);
                                    $currency = strtoupper(session('session_currency'));
                                    $price = collect($prices)->firstWhere('currency', $currency)['amount'];
                                    $isJson = (json_last_error() == JSON_ERROR_NONE);
                                } catch (\Exception $e) {
                                    $isJson = false;
                                }
                            @endphp
                            @if ($isJson)
                                <h4 class="price">Price : <span>{{ currency($price) }}</span></h4>
                            @else
                                <h4 class="price">Price : <span>{{ currency($selected_product->price) }}</span></h4>
                            @endif
                            @if(Auth::check())
                                
                                @if ((isset($current_subscription) &&  ($current_subscription->subscription_to_package->interval == 'lifetime' || $current_subscription->expire_date > $today)))
                                    @if($current_subscription->payment_method == 'stripe' || $current_subscription->status == 'approved')
                                    
                                    <a href="{{ route('customer.download_link_generate', ['product_id' => $selected_product->id]) }}" class="el-btn-buy mb-12" target="_blank">Download</a>
                                    <div class="elitem-allFile">
                                        <img src="{{ asset('assets/img/icon/download.svg') }}" alt="" />
                                        <p>
                                            {{ get_phrase('Download limit left') }}{{ $remaining_download_limit }} {{ get_phrase('out of') }} {{ $current_subscription->subscription_to_package->download_limit }} {{ get_phrase('times') }}
                                        </p>
                                    </div>
                                    @else
                                    <a href="#" class="el-btn-buy mb-12" target="_blank">{{ get_phrase('Pending') }}</a>
                                    @endif
                                
                                @elseif(null !== $is_purchased && $is_purchased->status == 'pending' || $current_subscription->status == 'pending')
                                <a href="#" class="el-btn-buy mb-12" target="_blank">{{ get_phrase('Pending') }}</a>
                                <span class="seperate">{{ get_phrase('or') }}</span>
                                <a href="{{ route('elements_package_pricing') }}" class="el-btn-subscribe mb-20">{{ get_phrase('Subscribe') }}</a>
                                @else

                                <a href="javascript:;" class="el-btn-buy mb-12" onclick="elementCheckoutModal('{{ route('element_buy_now', ['product_id' => $selected_product->id]) }}) }}')">{{ get_phrase('Buy Now') }}</a>
                                <span class="seperate">{{ get_phrase('or') }}</span>
                                <a href="{{ route('elements_package_pricing') }}" class="el-btn-subscribe mb-20">{{ get_phrase('Subscribe') }}</a>
                                <div class="elitem-allFile">
                                    <img src="{{ asset('assets/img/icon/unlock.svg') }}" alt="" />
                                    <p>{{ get_phrase('Unlock all file for $4.5/month') }}</p>
                                </div>
                                @endif
                            @else
                                <a href="javascript:;" class="el-btn-buy mb-12" onclick="elementCheckoutModal('{{ route('element_buy_now', ['product_id' => $selected_product->id]) }}) }}')">{{ get_phrase('Buy Now') }}</a>
                                <span class="seperate">or</span>
                                <a href="{{ route('elements_package_pricing') }}" class="el-btn-subscribe mb-20">{{ get_phrase('Subscribe') }}</a>
                                <div class="elitem-allFile">
                                <img src="{{ asset('assets/img/icon/unlock.svg') }}" alt="" />
                                <p>{{ get_phrase('Unlock all file for $4.5/month') }}</p>
                                </div>
                            @endif
                        </div>
                        <!-- Specification -->
                        <div class="el-specification py-30 bd-r-10 box-shadow-13">
                            <h4 class="el-sp-title">{{ get_phrase('Specification') }}</h4>
                            <div class="el-sp-table px-30">
                                <table class="table eTable">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="el_table_title">
                                                <img src="{{ asset('assets/img/icon/dashboard-2.svg') }}" alt="" />
                                                    <p>{{ get_phrase('Category') }} :</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="el_table_info">
                                                    <p>{{ $selected_category->name }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="el_table_title">
                                                    <img src="{{ asset('assets/img/icon/calendar-minus.svg') }}" alt="" />
                                                    <p>{{ get_phrase('Published') }} :</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="el_table_info">
                                                    <p>{{ $selected_product->created_at }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="el_table_title">
                                                    <img src="{{ asset('assets/img/icon/add-folder.svg') }}" alt="" />
                                                    <p>{{ get_phrase('File type') }} :</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="el_table_info">
                                                    <p>{{ $selected_product->file_types }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="el_table_title">
                                                    <img src="{{ asset('assets/img/icon/add-folder.svg') }}" alt="" />
                                                    <p>{{ get_phrase('File size') }} :</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="el_table_info">
                                                    <p>{{ $selected_product->file_size }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- More Items -->
        <div class="elDetails-more-items pb-50">
            <div class="d-flex justify-content-between align-items-center flex-wrap g-20 pb-16">
            <h4 class="fz-24-eb-black">{{ get_phrase('More Items') }}</h4>
                <a href="{{ route('search_element_products', ['slug' => $selected_product->product_to_elementCategory->slug]) }}" class="view-all-btn">
                    View all{{ get_phrase('') }}
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                </a>
            </div>
            <div class="row justify-content-center">
                @foreach($more_products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-item-three product-item-add">
                        <a href="{{ route('element_product_details', ['title' => slugify($product->title.'-'.$product->id)]) }}" class="product-three-link"></a>
                        <div class="thumbnil-price">
                            <img src="{{ element_server_url($product->product_id, $product->product_to_elementCategory->slug).$product->thumbnail }}" alt="" />
                            <ul class="wishlist-bookmark">
                                <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Like">
                                    <span class="active" href="#">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.98268 15.4327C9.83416 15.4327 9.69447 15.4068 9.56359 15.355C9.43272 15.3032 9.30692 15.2238 9.1862 15.117L8.4378 14.4407C6.91322 13.0935 5.59778 11.8042 4.49149 10.5729C3.38518 9.34161 2.83203 8.08119 2.83203 6.79167C2.83203 5.81517 3.17124 4.99465 3.84966 4.33012C4.52807 3.6656 5.36248 3.33333 6.35286 3.33333C6.93299 3.33333 7.5417 3.47996 8.17899 3.77323C8.81628 4.06651 9.42285 4.64583 9.9987 5.51121C10.6023 4.64583 11.2158 4.06651 11.8392 3.77323C12.4626 3.47996 13.0644 3.33333 13.6445 3.33333C14.6349 3.33333 15.4693 3.6656 16.1477 4.33012C16.8262 4.99465 17.1654 5.81517 17.1654 6.79167C17.1654 8.11325 16.5855 9.39771 15.4258 10.645C14.2661 11.8924 12.9773 13.1522 11.5596 14.4247L10.7952 15.117C10.6745 15.2238 10.546 15.3032 10.4098 15.355C10.2735 15.4068 10.1312 15.4327 9.98268 15.4327Z" fill="#FE2048"/>
                                    </svg>                            
                                    </span>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Bookmark">
                                    <span href="#">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 14.7263L6.93652 15.8993C6.48141 16.0726 6.04487 16.0222 5.62692 15.7484C5.20897 15.4745 5 15.1033 5 14.6348V4.34683C5 3.96121 5.13458 3.64033 5.40375 3.3842C5.67292 3.12807 6.01012 3 6.41537 3H13.5846C13.9899 3 14.3271 3.12807 14.5962 3.3842C14.8654 3.64033 15 3.96121 15 4.34683V14.6348C15 15.1033 14.791 15.4745 14.3731 15.7484C13.9551 16.0222 13.5186 16.0726 13.0635 15.8993L10 14.7263ZM10 3.76126H5.8H14.2H10Z" fill="#0A7EFB"/>
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="content d-flex">
                            <div class="product-title-author">
                                <h4 class="product-title">{{ $product->title }}</h4>
                            </div>
                            @php
                                try {
                                    $prices = json_decode($product->price, true);
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
                                <span class="product-price">{{ currency($product->price) }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Main Content -->

<script>
    
    "use strict";

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

    function handleRandomWishList(elem) {

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

    function handleLike(elem, product_id){


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
                        if(response.is_liked == 1){
                            $("#bookmark"+product_id+" img").attr('src', '{{ asset("assets/img/icon/heart-fill.svg") }}');
                            $("#bookmark"+product_id+" span").text(response.total_likes);
                        } else {
                            $("#bookmark"+product_id+" img").attr('src', '{{ asset("assets/img/icon/heart.svg") }}');
                            $("#bookmark"+product_id+" span").text(response.total_likes);
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