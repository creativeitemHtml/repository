@extends('global.index')
@section('content')
    <!-- Start Blog Trending Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="blog-section-title">
                        <h1 class="text-54">{{ get_phrase('Creativeitem Blog') }}</h1>
                        <p class="blog-p">{{ get_phrase('Crafting Stories, Igniting Ideas: Your Premier Source for Creativity Where Imagination Meets Innovation. ') }}</p>
                    </div>
                    <!-- Blog search -->
                    <div class="blog-search">
                        <form action="{{ route('blog') }}" class="d-flex align-items-center">
                            <input type="search" class="form-control" placeholder="Search…" id="search" name="search">
                            <button type="submit">
                                <img src="{{ asset('assets/img/new-icons-images/white-search.svg') }}" alt="">
                                {{ get_phrase('Search') }}
                            </button>
                        </form>
                    </div>
                    <!-- Blog Nav Area -->
                    <div class="blog-nav-area">
                        <nav>
                            <ul class="d-flex align-items-center justify-content-center">
                                @foreach ($blog_categories as $blog_category)
                                    <li><a href="{{ route('blog', ['type' => 'category', 'keyword' => $blog_category->slug]) }}">{{ $blog_category->name }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row pb-24">
                <!-- Trending Left -->
                <div class="col-md-6">
                    <a href="{{ route('blog_details', ['slug' => $latest_blog->slug]) }}" class="trending-top-link">
                        <div class="trending-top-article">
                            <div class="trending-top-banner">
                                <img src="{{ asset('uploads/blog/thumbnail_image/' . $latest_blog->thumbnail) }}" alt="banner">
                            </div>
                            <div class="article-date">
                                <p class="text-15">{{ $latest_blog->created_at->format('d M, Y') }}</p>
                            </div>
                            <div class="trending-top-details">
                                <h1 class="text-24">{{ $latest_blog->title }}</h1>
                                <p class="blog-p">{{ $latest_blog->excerpt }}....</p>
                            </div>
                            <div class="blog-read-more">
                                <h3 class="d-flex align-items-center text-15">
                                    <span>{{ get_phrase('Read More') }}</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.1442 7.80381L6.81147 17.1269C6.673 17.2654 6.49897 17.333 6.28937 17.3298C6.07975 17.3266 5.90572 17.2558 5.76727 17.1173C5.6288 16.9788 5.55957 16.8064 5.55957 16.6C5.55957 16.3936 5.6288 16.2212 5.76727 16.0827L15.0904 6.74998H6.89417C6.68167 6.74998 6.50355 6.67808 6.3598 6.53428C6.21606 6.39046 6.1442 6.21226 6.1442 5.99968C6.1442 5.78708 6.21606 5.60899 6.3598 5.46541C6.50355 5.32182 6.68167 5.25003 6.89417 5.25003H16.7403C16.9964 5.25003 17.2111 5.33665 17.3843 5.50988C17.5575 5.68311 17.6441 5.89777 17.6441 6.15386V16C17.6441 16.2125 17.5722 16.3906 17.4284 16.5344C17.2846 16.6781 17.1064 16.75 16.8938 16.75C16.6812 16.75 16.5032 16.6781 16.3596 16.5344C16.216 16.3906 16.1442 16.2125 16.1442 16V7.80381Z"
                                            fill="#212534" />
                                    </svg>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Trending Right -->
                <div class="col-md-6">
                    <div class="trending-child-wrap">
                        @foreach ($latest_three as $latest)
                            <!-- Trending Child Single -->
                            <a href="{{ route('blog_details', ['slug' => $latest->slug]) }}" class="trending-child-link">
                                <div class="trending-child-single d-flex">
                                    <div class="trending-child-banner">
                                        <img src="{{ asset('uploads/blog/thumbnail_image/' . $latest->thumbnail) }}" alt="banner">
                                    </div>
                                    <div class="trending-child-details">
                                        <p class="text-15">{{ $latest->created_at->format('d M, Y') }}</p>
                                        <h2 class="text-20">{{ strlen($latest_blog->title) < 62 ? $latest_blog->title : substr($latest_blog->title, 0, 62) . '...' }}</h2>
                                        <div class="blog-read-more">
                                            <h4 class="d-flex align-items-center text-15">
                                                <span>{{ get_phrase('Read More') }}</span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.1442 7.80381L6.81147 17.1269C6.673 17.2654 6.49897 17.333 6.28937 17.3298C6.07975 17.3266 5.90572 17.2558 5.76727 17.1173C5.6288 16.9788 5.55957 16.8064 5.55957 16.6C5.55957 16.3936 5.6288 16.2212 5.76727 16.0827L15.0904 6.74998H6.89417C6.68167 6.74998 6.50355 6.67808 6.3598 6.53428C6.21606 6.39046 6.1442 6.21226 6.1442 5.99968C6.1442 5.78708 6.21606 5.60899 6.3598 5.46541C6.50355 5.32182 6.68167 5.25003 6.89417 5.25003H16.7403C16.9964 5.25003 17.2111 5.33665 17.3843 5.50988C17.5575 5.68311 17.6441 5.89777 17.6441 6.15386V16C17.6441 16.2125 17.5722 16.3906 17.4284 16.5344C17.2846 16.6781 17.1064 16.75 16.8938 16.75C16.6812 16.75 16.5032 16.6781 16.3596 16.5344C16.216 16.3906 16.1442 16.2125 16.1442 16V7.80381Z"
                                                        fill="#212534" />
                                                </svg>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Trending Section -->

    <!-- Start Featured Section -->
    @if (count($featured_blogs) > 0)
        <section>
            <div class="container">
                <div class="row pb-60 justify-content-center">
                    <div class="col-md-12">
                        <div class="featured-title">
                            <h2 class="text-24">{{ get_phrase('Featured Topic') }}</h2>
                        </div>
                    </div>
                    @foreach ($featured_blogs as $featured)
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <a href="{{ route('blog_details', ['slug' => $featured->slug]) }}" class="featured-single-link">
                                <div class="featured-single">
                                    <div class="featured-single-banner">
                                        <img src="{{ asset('uploads/blog/thumbnail_image/' . $featured->thumbnail) }}" alt="banner">
                                    </div>
                                    <div class="featured-single-details">
                                        <div class="d-flex align-items-center justify-content-between featured-single-date">
                                            <p class="text-15">{{ $featured->created_at->format('d M, Y') }}</p>
                                            <p class="text-15">{{ $featured->read_time }} Min read</p>
                                        </div>
                                        <h2 class="text-20">{{ strlen($featured->title) < 65 ? $featured->title : substr($featured->title, 0, 65) . '...' }}</h2>
                                        <p class="blog-p">{{ strlen($featured->excerpt) < 130 ? $featured->excerpt : substr($featured->excerpt, 0, 130) . '...' }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            {{ $featured_blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End Featured Section -->
@endsection
