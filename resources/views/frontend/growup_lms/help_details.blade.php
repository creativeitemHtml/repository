@extends('global.index')
@section('content')
    @include('frontend.growup_lms.lms_header')

    @php
        // $product_img = !empty($product_details->favicon) ? $product_details->favicon : 'favicon.png';
        $current_article = App\Models\Article::where('slug', request()->route()->parameter('article'))->first();
        $documentation_details = App\Models\Documentation::where('article_id', $current_article->id)->first();

        $searched_topic = request()->route()->parameter('topic');
        $searched_article = request()->route()->parameter('article');
    @endphp

    <div class="container pt-40 pb-120">
        <div class="row">
            <div class="col-lg-4">
                <div class="doc-sidebar doc-sidebar-2 p-30 bd-r-5 box-shadow-11">

                    <div class="doc-sidebar-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="doc-s-title d-flex align-items-center g-16">
                                {{-- <div class="icon">
                                <img src="{{ asset('uploads/favicons/products/' . $product_img) }}" alt="" />
                            </div> --}}
                                <div class="content">
                                    <h3 class="fz-20-b-black">{{ $product->name }}</h3>
                                    <span class="cBadge">{{ count($topic->topic_to_article) . ' ' . get_phrase('Articles') }}</span>
                                </div>
                            </div>
                            <a href="{{ route('lms.help') }}" class="doc-back-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                                </svg>
                                {{ get_phrase('Back') }}
                            </a>
                            <!-- offcanvas Button -->
                            <button class="d-lg-none mobile-menu-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
                            </button>
                        </div>
                    </div>


                    <div class="offcanvas my-res-offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header d-lg-none">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">{{ get_phrase('Documentation') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">

                            <!-- Sidebar item -->
                            <ul class="doc-sidebar-item accordion-doc-menu">
                                <li>
                                    <ul class="sidebarMenu">
                                        @foreach ($topic->topic_to_article as $article)
                                            <li class="item">
                                                <a href="{{ url("{$product->slug}/help/{$searched_topic}/{$article->slug}") }}" class="@if ($article->slug == $searched_article) active @endif">{{ $article->article }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>


            <div class="col-lg-8">
                @include('frontend.doc_details_body', ['article_details' => $current_article, 'documentation_details' => $documentation_details])
            </div>
        </div>
    </div>
@endsection
