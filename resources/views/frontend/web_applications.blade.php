@extends('global.index')
@section('content')

<!-- Start Web Application Product Page -->
<section>
    <div class="container">
        <div class="row justify-content-center padding-bottom-110">
            <!-- Title Area -->
            <div class="col-md-12">
                <div class="web-application-title">
                    <h1 class="text-54">{{ get_phrase('Web Applications') }}</h1>
                    <p class="product-text">{{ get_phrase('Explore the Pinnacle of Web Applications & Revolutionize Your Online Presence With Seamless Solutions, Infinite Possibilities.') }}</p>
                </div>
            </div>
            @foreach($products as $product)
            @if($product->slug != 'elements')
            <!-- Single Application -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ $product->purchase_url }}" class="single-application-link">
                    <div class="single-application">
                        <div class="application-baner">
                            <img src="{{ asset('uploads/thumbnails/products/'.$product->thumbnail) }}" alt="product">
                        </div>
                        <div class="application-details">
                            <div class="app-details-inner">
                                <div class="app-name-download d-flex align-items-center justify-content-between">
                                    <h2 class="text-24">{{ $product->name }}</h2>
                                    <h5 class="download-text d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" id="download"><path fill="#20c997" fill-rule="evenodd" d="M11.372 3.395V13.62l-1.634-1.64-.084-.073a.75.75 0 0 0-.98 1.132l2.917 2.928.002.002a.755.755 0 0 0 .079.068l.003.003a.75.75 0 0 0 .979-.073l2.916-2.928.072-.085a.75.75 0 0 0-.075-.976l-.084-.072a.75.75 0 0 0-.976.074l-1.635 1.64V3.396l-.007-.102a.75.75 0 0 0-1.493.102Zm6.533 17.722a4.425 4.425 0 0 0 4.217-4.42v-4.884l-.005-.209a4.434 4.434 0 0 0-4.429-4.226h-.933l-.102.007a.75.75 0 0 0 .102 1.493h.933l.172.005a2.934 2.934 0 0 1 2.762 2.93v4.884l-.005.172a2.925 2.925 0 0 1-2.92 2.753H6.557l-.172-.005a2.935 2.935 0 0 1-2.763-2.93v-4.885l.005-.172a2.925 2.925 0 0 1 2.92-2.752h.942l.102-.007a.75.75 0 0 0-.102-1.493h-.942l-.214.005a4.425 4.425 0 0 0-4.211 4.419v4.885l.005.209a4.435 4.435 0 0 0 4.43 4.226h11.14l.208-.005Z" clip-rule="evenodd"></path></svg>
                                    <span>{{ $product->number_of_purchase }}</span></h5>
                                </div>
                                <p class="text-15">{{ $product->excerpt }}....</p>
                            </div>
                        </div>
                        <div class="app-buy-price d-flex align-items-center justify-content-between">
                            <h4 class="buy-text d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" id="buy"><path fill="#200E32" fill-rule="evenodd" d="M21.49 6.664a2.073 2.073 0 0 0-1.581-.737H9.164a.758.758 0 0 0-.75.765c0 .423.336.765.75.765h10.745c.235 0 .38.131.447.209a.606.606 0 0 1 .137.481l-.948 6.693c-.076.525-.524.92-1.044.92H7.591a1.055 1.055 0 0 1-1.05-.984L5.578 3.07a.76.76 0 0 0-.62-.69l-2.08-.369a.752.752 0 0 0-.867.625.765.765 0 0 0 .61.884l1.51.267.915 11.118c.112 1.361 1.206 2.388 2.545 2.388H18.5c1.261 0 2.348-.96 2.527-2.232l.95-6.693a2.163 2.163 0 0 0-.489-1.703ZM5.907 20.455c0-.852.68-1.546 1.515-1.546.835 0 1.514.694 1.514 1.546 0 .852-.68 1.545-1.514 1.545-.835 0-1.515-.693-1.515-1.545Zm11.253 0c0-.852.679-1.546 1.514-1.546s1.515.694 1.515 1.546c0 .852-.68 1.545-1.515 1.545-.835 0-1.514-.693-1.514-1.545Zm.488-9.99a.758.758 0 0 1-.75.765h-2.773a.757.757 0 0 1-.75-.766c0-.422.335-.765.75-.765h2.773c.414 0 .75.343.75.765Z" clip-rule="evenodd"></path></svg>                   
                            <span>{{ get_phrase('Buy Now') }}</span>
                            </h4>
                            <h4 class="price-text">${{ $product->price }}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- End Web Application Product Page -->

@endsection