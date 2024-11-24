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
                            <input type="search" class="form-control" placeholder="Search…" id="search" name="search" value="{{ $searched_word }}">
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
                                    <li>
                                        <a href="{{ route('blog', ['type' => 'category', 'keyword' => $blog_category->slug]) }}" class="{{ $selected_category_slug == $blog_category->slug ? 'active' : '' }}">{{ $blog_category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Trending Section -->

    <!-- Start Related Section -->
    @if (count($related_blogs) > 0)
        <section>
            <div class="container">
                <div class="row pb-60 justify-content-center">
                    @foreach ($related_blogs as $related)
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

                <div class="col-12 mb-5">
                    <div class="d-flex justify-content-center">
                        {{ $related_blogs->links() }}
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End Featured Section -->
@endsection
