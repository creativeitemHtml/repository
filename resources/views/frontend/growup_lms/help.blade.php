@extends('global.index')
@section('content')
    @include('frontend.growup_lms.lms_header')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="help-center-title-area">
                        <h1 class="man-title-48px fw-extrabold text-center mb-12px">{{ get_phrase('Help Center') }}</h1>
                        <p class="mb-20px man-subtitle-16px text-capitalize ci2-text-secondary text-center">{{ get_phrase('Advice and answers from the GrowUp Lms Team') }}</p>
                        {{-- <form action="{{ route('lms.help') }}">
                            <div class="search-input-wrap position-relative max-w-440px mx-auto">
                                <label for="help-center-search" class="cin1-search-label">
                                    <img src="{{ asset('assets/img/icon/search-gray-20.svg') }}" alt="">
                                </label>
                                <input type="search" name="search" class="form-control cin1-search-input pe-5" id="help-center-search" value="{{ request()->query('search') }}" placeholder="{{ get_phrase('Search for help') }}...">

                                @if (request()->query('search'))
                                    <a href="{{ route('lms.help') }}" class="remove-search-help">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="18" height="18">
                                            <path fill="#706c81" d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row row-30px mb-100px">
                @if (count($topics) > 0)
                    @foreach ($topics as $topic)
                        <div class="col-md-4 col-sm-6">
                            <a href="{{ route('lms.help', $topic->slug) }}" class="cin1-service-item">
                                <div class="text-center">
                                    <span class="cin1-service-icon mb-3">
                                        @if ($topic->thumbnail)
                                            @php
                                                $svg_path = public_path('uploads/thumbnails/topic_thumbnails/' . $topic->thumbnail);
                                                $icon = file_exists($svg_path) ? file_get_contents($svg_path) : null;
                                            @endphp

                                            @if ($icon)
                                                {!! $icon !!}
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path fill="#595C6D"
                                                        d="m17,13.5c0,.276-.224.5-.5.5H7.5c-.276,0-.5-.224-.5-.5s.224-.5.5-.5h9c.276,0,.5.224.5.5Zm-3.5,3.5h-6c-.276,0-.5.224-.5.5s.224.5.5.5h6c.276,0,.5-.224.5-.5s-.224-.5-.5-.5Zm8.5-7.015v9.515c0,2.481-2.019,4.5-4.5,4.5H6.5c-2.481,0-4.5-2.019-4.5-4.5V4.5C2,2.019,4.019,0,6.5,0h5.515c1.735,0,3.368.676,4.597,1.904l3.484,3.485c1.228,1.227,1.904,2.859,1.904,4.596Zm-6.096-7.375c-.551-.55-1.2-.959-1.904-1.231v5.12c0,.827.673,1.5,1.5,1.5h5.121c-.273-.704-.682-1.354-1.232-1.904l-3.484-3.485Zm5.096,7.375c0-.335-.038-.663-.096-.985h-5.404c-1.379,0-2.5-1.122-2.5-2.5V1.096c-.323-.058-.651-.096-.985-.096h-5.515c-1.93,0-3.5,1.57-3.5,3.5v15c0,1.93,1.57,3.5,3.5,3.5h11c1.93,0,3.5-1.57,3.5-3.5v-9.515Z" />
                                                </svg>
                                            @endif
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                                <path fill="#595C6D"
                                                    d="m17,13.5c0,.276-.224.5-.5.5H7.5c-.276,0-.5-.224-.5-.5s.224-.5.5-.5h9c.276,0,.5.224.5.5Zm-3.5,3.5h-6c-.276,0-.5.224-.5.5s.224.5.5.5h6c.276,0,.5-.224.5-.5s-.224-.5-.5-.5Zm8.5-7.015v9.515c0,2.481-2.019,4.5-4.5,4.5H6.5c-2.481,0-4.5-2.019-4.5-4.5V4.5C2,2.019,4.019,0,6.5,0h5.515c1.735,0,3.368.676,4.597,1.904l3.484,3.485c1.228,1.227,1.904,2.859,1.904,4.596Zm-6.096-7.375c-.551-.55-1.2-.959-1.904-1.231v5.12c0,.827.673,1.5,1.5,1.5h5.121c-.273-.704-.682-1.354-1.232-1.904l-3.484-3.485Zm5.096,7.375c0-.335-.038-.663-.096-.985h-5.404c-1.379,0-2.5-1.122-2.5-2.5V1.096c-.323-.058-.651-.096-.985-.096h-5.515c-1.93,0-3.5,1.57-3.5,3.5v15c0,1.93,1.57,3.5,3.5,3.5h11c1.93,0,3.5-1.57,3.5-3.5v-9.515Z" />
                                            </svg>
                                        @endif
                                    </span>
                                    <h4 class="mb-1 cin1-service-title">{{ $topic->topic }}</h4>
                                    <p class="cin1-service-subtitle">{{ count($topic->topic_to_article) }} {{ get_phrase('Article') }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    <div class="col-12 d-flex justify-content-center">
                        {{ $topics->links('pagination::bootstrap-4') }}
                    </div>
                @else
                    <div class="no-subscription mt-60 d-flex gap-3 flex-column justify-content-start align-items-lg-center">
                        <img src="{{ asset('assets/img/admin-customer/subscription-status-2.png') }}" alt="" />
                        <h4 class="title fs-5">{{ get_phrase('No data found.') }}</h4>
                    </div>
                @endif

            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row mb-32px justify-content-center">
                <div class="col-lg-8">
                    <div>
                        <h1 class="man-title-48px text-center">Customers FAQ</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-100px">
                <div class="col-lg-10 col-xl-9">
                    <div class="ci-accordion-2">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Can I use GrowUp LMS at no cost?</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p class="man-subtitle-4">Yes! You can start with free plan  of GrowUp LMS at no cost and begin earning right away.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I close my account whenever I want?</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p class="man-subtitle-4">Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do I have to provide credit card details to sign up?</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p class="man-subtitle-4">Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Does GrowUp LMS take a percentage of my earnings?</button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p class="man-subtitle-4">Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Is support included with my plan?</button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p class="man-subtitle-4">Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Will I need a web host?</button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p class="man-subtitle-4">Lorem Ipsum available, but the majority have suffered alteration some injected humour randomised words which do look slightly believable If you are going to use a passage</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-footer-signup />
@endsection
