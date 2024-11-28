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
                        <form action="">
                            <div class="search-input-wrap position-relative max-w-440px mx-auto">
                                <label for="help-center-search" class="cin1-search-label">
                                    <img src="{{ asset('assets/img/icon/search-gray-20.svg') }}" alt="">
                                </label>
                                <input type="search" class="form-control cin1-search-input" id="help-center-search" placeholder="{{ get_phrase('Search for help') }}...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row row-30px mb-100px">
                @foreach ($topics as $topic)
                    <div class="col-md-4 col-sm-6">
                        <a href="javascript:void(0)" class="cin1-service-item">
                            <div class="text-center">
                                <span class="cin1-service-icon mb-3">
                                    <img src="{{ asset($topic->thumbnail) }}" alt="">
                                </span>
                                <h4 class="mb-1 cin1-service-title">{{ $topic->topic }}</h4>
                                <p class="cin1-service-subtitle">{{ count($topic->topic_to_article) }} {{ get_phrase('Article') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
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


    <section>
        <div class="container">
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="help-request-area">
                        <h4 class="man-title-48px fw-semibold text-white mb-32px text-center">{{ get_phrase('Need more help?') }}</h4>
                        <div class="text-center">
                            <a href="#" class="btn cin1-btn-outline-white">{{ get_phrase('Submit a request') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
