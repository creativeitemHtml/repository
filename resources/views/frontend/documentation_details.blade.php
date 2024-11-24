@extends('global.index')
@section('content')

@php 

$product_img = !empty($product_details->favicon) ? $product_details->favicon : 'favicon.png';
$articles = $product_details->product_to_article;

@endphp

<!-- Start Main Content -->
<section class="pt-80 pb-120">
    <div class="container">
        <div class="row">
            <!-- Left side -->
            <div class="col-lg-4">
                <div class="doc-sidebar doc-sidebar-2 p-30 bd-r-5 box-shadow-11">
                    <!-- Doc title -->
                    <div class="doc-sidebar-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="doc-s-title d-flex align-items-center g-16">
                                <div class="icon">
                                    <img src="{{ asset('uploads/favicons/products/'.$product_img) }}" alt="" />
                                </div>
                                <div class="content">
                                    <h3 class="fz-20-b-black">{{ $product_details->name }}</h3>
                                    <span class="cBadge">{{ count($articles).' '.get_phrase('Articles') }}</span>
                                </div>
                            </div>
                            <a href="{{ route('docs') }}" class="doc-back-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                                {{ get_phrase('Back') }}
                            </a>
                            <!-- offcanvas Button -->
                            <button class="d-lg-none mobile-menu-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
                            </button>
                        </div>
                    </div>
                    <!-- offcanvas -->
                    <div class="offcanvas my-res-offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header d-lg-none">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">{{ get_phrase('Documentation') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <!-- Search -->
                            <form action="" class="sidebar-search d-flex justify-content-start align-items-center mb-20">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <path
                                        id="Search_icon"
                                        data-name="Search icon"
                                        d="M2,7A4.951,4.951,0,0,1,7,2a4.951,4.951,0,0,1,5,5,4.951,4.951,0,0,1-5,5A4.951,4.951,0,0,1,2,7Zm12.3,8.7a.99.99,0,0,0,1.4-1.4l-3.1-3.1A6.847,6.847,0,0,0,14,7,6.957,6.957,0,0,0,7,0,6.957,6.957,0,0,0,0,7a6.957,6.957,0,0,0,7,7,6.847,6.847,0,0,0,4.2-1.4Z"
                                        fill="#797c8b"
                                    />
                                    </svg>
                                </span>
                                <input type="text" placeholder="Search documentation" class="form-control"/>
                                <input type="submit" value="" class="sidebar-search-submit">
                            </form>
                            <!-- Sidebar item -->
                            <ul class="doc-sidebar-item accordion-doc-menu">
                                @foreach($topics as $topic)
                                @php $articles = $topic->topic_to_article; @endphp
                                <li class="doc-sidebar-li @if($article_details->topic_id == $topic->id) active @endif">
                                    <p class="doc-badge-outline">{{ $topic->topic }}</p>
                                    <ul class="sidebarMenu" @if($article_details->topic_id == $topic->id) style="display: block;" @endif>
                                        @foreach($articles as $article)
                                        <li class="item">
                                            <a href="{{ route('documentation_details', ['product_slug' => $product_slug, 'article_slug' => $article->slug]) }}" class="@if($article->slug == $article_slug) active @endif">{{ $article->article }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- offcanvas -->
                </div>
            </div>
            <!-- Right side -->
            <div class="col-lg-8">
                @include('frontend.doc_details_body')
            </div>
        </div>
    </div>
</section>
<!-- End Main Content -->

@endsection