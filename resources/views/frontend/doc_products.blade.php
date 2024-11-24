@extends('global.index')
@section('content')

<!-- Start Banner & Search -->
<section class="hero-banner pt-40">
    <div class="container">
        <div class="hero-banner-wrap text-center">
            <h1 class="fz-60-b-black fz-sm-40-sb-black pb-20">
                {{ get_phrase('Search Documentation') }}
            </h1>
            <p class="fz-18-m-black-2 w-lg-50 mx-auto px-lg-4 pb-50">
                 {{ get_phrase('Here you will find all the information you need to get started with our products, including installation, user guides, tutorials, troubleshooting, FAQs, and more.') }}
            </p>
            <!-- Search -->
        </div>
    </div>
</section>
<!-- End Banner & Search -->

<!-- Start Documentation Item -->
<section class="documentation-item pb-120">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{ route('documentation_details', ['product_slug' => $product->slug ]) }}" class="doc-item" style="border-color: {{ $product->color_code }};">
                        <div style="background-color: {{ $product->color_code }}20;" class="doc-item-icon">
                            <img src="{{ asset('uploads/favicons/products/' . ($product->favicon ?: 'favicon.png')) }}" alt="" />
                        </div>
                        <div class="content">
                            <div class="doc-item-name">{{ $product->name }}</div>
                            <p class="doc-item-article">{{ count($product->product_to_article) . ' ' . get_phrase('Articles') }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Documentation Item -->

<!-- Start Contact -->
<section class="contact-section pb-120">
    <div class="container">
        <div class="contact-one-wrap d-flex justify-content-between align-items-center flex-wrap g-20">
            <div class="content">
                <h2 class="fz-44-eb-black fz-sm-30-sb-black pb-20">
                    {{ get_phrase('Still need any help?') }}
                </h2>
                <p class="fz-16-m-black">
                    {{ get_phrase('Whether you have a question, need assistance with a product, or are experiencing technical difficulties, our team of experts is ready to assist you.') }}
                </p>
            </div>
            <a href="javascript:;" onclick="support()" class="btn-main btn-contact-one">{{ get_phrase('Contact Us') }}</a>
        </div>
    </div>
</section>
<!-- End Contact -->

@endsection