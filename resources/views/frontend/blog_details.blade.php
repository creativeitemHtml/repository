@extends('global.index')
@section('content')
    <!-- Start Single Blog Details Area -->
    <section>
        <div class="container">
            <div class="blog-snf-title-wrap">
                <!-- Back -->
                <div class="blog-snf-back">
                    <a href="{{ route('blog') }}">
                        <svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.31659 7.71112C5.56477 7.46176 5.56381 7.05845 5.31446 6.81027L3.07981 4.58639L16.57 4.58639C16.9218 4.58639 17.207 4.3012 17.207 3.94939C17.207 3.59757 16.9218 3.31239 16.57 3.31239L3.07978 3.31239L5.31449 1.0885C5.56384 0.840326 5.5648 0.43701 5.31662 0.187657C5.06842 -0.0617274 4.6651 -0.0626508 4.41575 0.185492L1.08731 3.49788C1.08751 3.49769 1.08709 3.49807 1.08731 3.49788C0.8386 3.74606 0.837231 4.15128 1.08671 4.40029C1.08652 4.40009 1.08693 4.40048 1.08671 4.40029L4.41572 7.71328C4.66504 7.96139 5.06839 7.96053 5.31659 7.71112Z"
                                fill="#212534" />
                        </svg>
                        {{ get_phrase('Back') }}
                    </a>
                </div>
                <!-- Title -->
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <div class="blog-snf-title">
                            <a href="{{ route('blog', ['type' => 'category', 'keyword' => $selected_blog_category->slug]) }}" class="text-16">{{ $selected_blog_category->name }}</a>
                            <h1 class="text-36">{{ $blog_details->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-details-max">
                <!-- Author and Date -->
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <div class="blog-author-time d-flex align-items-center justify-content-center">
                            <div class="blog-author-date d-flex align-items-center">
                                <div class="blog-snf-author d-flex align-items-center">
                                    <div class="blog-snf-author-img">
                                        <img src="{{ get_user_image($blog_details->blogger_id) }}" alt="author">
                                    </div>
                                    <h4 class="text-16">{{ $blog_details->blog_to_user->name }}</h4>
                                </div>
                                <div class="blog-snf-date d-flex align-items-center">
                                    <img src="{{ asset('assets/img/icon/calendar-month.svg') }}" alt="">
                                    <h4 class="text-16">{{ $blog_details->created_at->format('d M Y') }}</h4>
                                </div>
                                <div class="blog-snf-time d-flex align-items-center">
                                    <img src="{{ asset('assets/img/icon/schedule.svg') }}" alt="">
                                    <h4 class="text-16">{{ $blog_details->read_time . ' ' . get_phrase('min read') }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Thumbnail -->
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <!-- banner -->
                        <div class="blog-details-banner">
                            <img src="{{ asset('uploads/blog/banner_image/' . $blog_details->banner) }}" alt="banner">
                        </div>
                    </div>
                </div>
                <!-- Blog Details -->
                <div class="row pb-44">
                    <div class="col-md-2 order-2 order-md-1">
                        <!-- Socila Share Options -->
                        <div class="blog-socila-share">
                            <h3 class="blog-share-title">{{ get_phrase('Share Now') }}</h3>
                            <ul class="blog-share-items">
                                <li><a href="#"><img src="{{ asset('assets/img/icon/reddit.svg') }}" alt=""></a></li>
                                <li>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}" target="_blank">
                                        <img src="{{ asset('assets/img/icon/linkedin.svg') }}" alt="">
                                    </a>
                                </li>
                                <li><a href="#"><img src="{{ asset('assets/img/icon/whatsapp.svg') }}" alt=""></a></li>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}&display=popup" target="_blank">
                                        <img src="{{ asset('assets/img/icon/facebook.svg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/img/icon/skype.svg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://pinterest.com/pin/create/button/?url={{ url()->full() }}&media={{ url('/' . $blog_details->thumbnail) }}&description={{ $blog_details->title }}" target="_blank">
                                        <img src="{{ asset('assets/img/icon/pinterest.svg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/share/url?url={{ urlencode(url()->full()) }}" target="_blank">
                                        <img src="{{ asset('assets/img/icon/telegram-plane.svg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://twitter.com/share?url={{ url()->full() }}" target="_blank">
                                        <img src="{{ asset('assets/img/icon/twiter.svg') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 order-1 order-md-2">
                        <div class="blog-sn-details">
                            <div class="details-table-of-content">
                                <div class="details-third-bottom">
                                    {!! $blog_details->details !!}
                                </div>
                                <div class="blog-details-footer">
                                    <div class="blog-category-area">
                                        <ul class="d-flex flex-wrap">
                                            @foreach ($keywords as $tag)
                                                <li><a href="{{ route('blog', ['type' => 'tag', 'keyword' => trim($tag)]) }}">{{ ucfirst(trim($tag)) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 order-3 order-md-3">
                        <!-- Table of Contents -->
                        <div class="table-content-wrap">
                            <div class="table-content-menu d-none content-menu">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path
                                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                </svg>
                            </div>
                            <div class="table-of-contents">
                                <div class="table-content-title-close d-flex justify-content-between align-items-center">
                                    <h3 class="table-content-title">{{ get_phrase('Table of Contents') }}</h3>
                                    <div class="table-content-close">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99915 11.0625L6.58248 14.4792C6.42971 14.6319 6.2561 14.7049 6.06165 14.6979C5.86721 14.691 5.6936 14.6111 5.54082 14.4583C5.38804 14.3056 5.31165 14.1285 5.31165 13.9271C5.31165 13.7257 5.38804 13.5486 5.54082 13.3958L8.93665 10L5.51998 6.58334C5.36721 6.43056 5.29429 6.25348 5.30123 6.05209C5.30818 5.8507 5.38804 5.67362 5.54082 5.52084C5.6936 5.36806 5.87068 5.29167 6.07207 5.29167C6.27346 5.29167 6.45054 5.36806 6.60332 5.52084L9.99915 8.93751L13.4158 5.52084C13.5686 5.36806 13.7457 5.29167 13.9471 5.29167C14.1485 5.29167 14.3255 5.36806 14.4783 5.52084C14.6311 5.67362 14.7075 5.8507 14.7075 6.05209C14.7075 6.25348 14.6311 6.43056 14.4783 6.58334L11.0617 10L14.4783 13.4167C14.6311 13.5694 14.7075 13.7431 14.7075 13.9375C14.7075 14.1319 14.6311 14.3056 14.4783 14.4583C14.3255 14.6111 14.1485 14.6875 13.9471 14.6875C13.7457 14.6875 13.5686 14.6111 13.4158 14.4583L9.99915 11.0625Z"
                                                fill="#212534" />
                                        </svg>
                                    </div>
                                </div>
                                <nav class="navbar content-nav">
                                    <ul class="table-content-list nav-pills">
                                        @foreach ($h2Tags as $index => $tag)
                                            <li class="nav-item">
                                                <a href="#list-item-{{ $index + 1 }}" class="nav-link">{{ $tag }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Single Blog Details Area -->

    <!-- Start Related Topic Section -->
    <section>
        <div class="container">
            <div class="row pb-44 justify-content-center">
                <div class="col-md-12">
                    <div class="featured-title">
                        <h2 class="text-24">{{ get_phrase('Related Topic') }}</h2>
                    </div>
                </div>
                @foreach ($related_blogs->take(6) as $related)
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <a href="{{ route('blog_details', ['slug' => $related->slug]) }}" class="featured-single-link">
                            <div class="featured-single">
                                <div class="featured-single-banner">
                                    <img src="{{ asset('uploads/blog/thumbnail_image/' . $related->thumbnail) }}" alt="banner">
                                </div>
                                <div class="featured-single-details">
                                    <div class="d-flex align-items-center justify-content-between featured-single-date">
                                        <p class="text-15">{{ $related->created_at->format('d M, Y') }}</p>
                                        <p class="text-15">{{ $related->read_time }} Min read</p>
                                    </div>
                                    <h2 class="text-20">{{ strlen($related->title) < 65 ? $related->title : substr($related->title, 0, 65) . '...' }}</h2>
                                    <p class="blog-p">{{ strlen($related->excerpt) < 130 ? $related->excerpt : substr($related->excerpt, 0, 130) . '...' }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Related Topic Section -->
@endsection
