@extends('global.index')
@section('content')
    @include('frontend.growup_lms.lms_header')

    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <div>
                        <p class="lms-notice-badge-warning mb-3 text-center">{{ get_phrase('Features') }}</p>
                        <h1 class="man-title-60px growup-title-60px mb-12px">{{ get_phrase('Turn your Courses into Cash') }}</h1>
                        <p class="man-subtitle3-16px mb-32px">{{ get_phrase('Unlock the power of your expertise with our') }}
                            <span class="cin2-text-dark fw-semibold">{{ get_phrase('all-in-one platform.') }}</span>
                            {{ get_phrase('Boost your business to money while empowering students to build') }}
                            <span class="cin2-text-dark fw-semibold">{{ get_phrase('successful') }}</span> {{ get_phrase('careers.') }}
                        </p>
                        <div class="d-flex align-items-center cg-32px rg-20px flex-wrap">
                            <a href="#" class="btn lms-btn-purple-gradient px-4 py-3 lh-base">{{ get_phrase('Start Selling Today') }}</a>
                            <a href="javascript:void(0)" class="lms2-modal-video-btn" data-bs-toggle="modal" data-bs-target="#video-modal">{{ get_phrase('Watch Video') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <img class="banner" src="{{ asset('assets/img/growup/feature-page-banner.webp') }}" alt="banner">
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="linearbg-img-wrap wow animate__fadeInUp" style="--linear-bg: linear-gradient(180deg, #FF99B0 0%, #F9F6F1 100%);" data-wow-delay=".3s">
                        <div class="linearbg-banner linearbg-banner-right" style="--banner-max-width: 460px;">
                            <img class="banner" src="{{ asset('assets/img/growup/linearbg-banner1.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <p class="lms-notice-badge-warning mb-3 text-center">{{ get_phrase('Quiz') }}</p>
                        <h1 class="man-title-48px mb-3">{{ get_phrase('Test Your Knowledge Through Quizzes') }}</h1>
                        <p class="man-subtitle3-16px mb-32px">{{ get_phrase('Launch your business with a reliable') }}, <span class="cin2-text-dark fw-semibold">{{ get_phrase('ready-to-use') }}</span> {{ get_phrase('website or mobile app—no coding needed, just a few clicks! Enjoy interesting and') }}
                            <span class="cin2-text-dark fw-semibold">{{ get_phrase('interactive learning process') }}</span>
                            {{ get_phrase('that students love.') }}
                        </p>
                        <a href="#" class="btn gr-btn-primary">
                            <span>{{ get_phrase('Get Started') }}</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6 order-2 order-md-1">
                    <div>
                        <p class="lms-notice-badge-warning mb-3 text-center">Ai- generated content</p>
                        <h1 class="man-title-48px mb-3">Fast, Unique, and Engaging AI Content!</h1>
                        <p class="man-subtitle3-16px mb-32px">Don't waste your time and focus on what you love about your business. Create your thinking with <span class="cin2-text-dark fw-semibold">built-in AI tools</span> without delay.</p>
                        <a href="#" class="btn gr-btn-primary">
                            <span>Get Started</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="linearbg-img-wrap wow animate__fadeInUp" style="--linear-bg: linear-gradient(180deg, #FFD8B4 0%, #F9F6F1 100%);" data-wow-delay=".3s">
                        <div class="linearbg-banner" style="--banner-max-width: 490px;">
                            <img class="banner" src="{{ asset('assets/img/growup/linearbg-banner2.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="gr-light-section mb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-32px max-w-750px mx-auto">
                        <h1 class="man-title-48px text-center mb-3">Inspire Growth for Teams and Students</h1>
                        <p class="man-subtitle3-16px text-center">Empower your team and students to <span class="cin2-text-dark fw-semibold">grow together.</span> With the right tools, they can unlock their <span class="cin2-text-dark fw-semibold">potential, build confidence, and drive success.</span>
                            Inspire a future of learning and teamwork today!</p>
                    </div>
                </div>
            </div>
            <div class="row row-30px">
                <div class="col-md-6">
                    <div class="inspire-growth-banner">
                        <img class="banner" src="{{ asset('assets/img/growup/inspire-growth-banner.webp') }}" alt="banner">
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <ul class="d-flex flex-column gap-4 mb-32px">
                            <li class="d-flex align-items-start gap-3">
                                <div class="lms-color-iconbox" style="--bg-color:#fff">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00013 6.66667H5.33087C4.59449 6.66667 3.99581 7.26452 4.00002 8.00089C4 11.3333 4.34125 14 8 14H8.1149C8.04055 13.5251 8.00207 13.0308 8.00205 12.519L8.00013 6.66667Z" fill="#FF9C07" />
                                        <path
                                            d="M14.6667 20.5653V24.0653C13.4285 24.1878 12.4028 24.4651 11.6277 24.7469C11.1086 24.9357 10.7007 25.1269 10.4145 25.2762C10.2713 25.3509 10.1583 25.4153 10.0767 25.4639C10.041 25.4852 9.97216 25.5287 9.93886 25.5498L9.92707 25.5573C9.31436 25.9657 9.1488 26.7936 9.55727 27.4063C9.96418 28.0166 10.7873 28.1833 11.3992 27.7807L11.4019 27.779L12.539 27.2531C13.334 26.964 14.5127 26.6667 16 26.6667C17.4873 26.6667 18.666 26.964 19.461 27.2531L20.5981 27.779L20.6007 27.7807C21.2127 28.1833 22.0358 28.0166 22.4427 27.4063C22.8512 26.7936 22.6856 25.9657 22.0729 25.5573L22.0613 25.5499C22.0281 25.5289 21.9591 25.4852 21.9233 25.4639C21.8417 25.4153 21.7287 25.3509 21.5855 25.2762C21.2993 25.1269 20.8914 24.9357 20.3723 24.7469C19.5972 24.4651 18.5715 24.1878 17.3333 24.0653V20.5654C16.8967 20.6327 16.451 20.6667 16.0002 20.6667C15.5493 20.6667 15.1034 20.6326 14.6667 20.5653Z"
                                            fill="#FF9C07" />
                                        <path d="M23.8894 14H24.0025C27.6612 14 27.9975 11.3333 27.9975 8.00089C28.0017 7.26452 27.403 6.66667 26.6667 6.66667H24.0005L24.0025 12.5181C24.0025 13.0188 23.9656 13.5028 23.8944 13.9683C23.8927 13.9788 23.8911 13.9894 23.8894 14Z" fill="#FF9C07" />
                                        <path d="M22.6671 6.27161L22.6691 12.5185C22.6691 16.7778 19.6114 19.3333 16.0002 19.3333C12.389 19.3333 9.33539 16.7778 9.33539 12.5185L9.33333 6.27161C9.33333 5.01703 10.3283 4 11.5556 4H20.4448C21.6721 4 22.6671 5.01703 22.6671 6.27161Z" fill="#FF9C07" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="man-title2-20px fw-semibold cin2-text-dark mb-2">Team Training</h5>
                                    <p class="man-subtitle3-16px">Try our <span class="cin2-text-dark fw-semibold">plug-and-play</span> team training methods to increase your team members' speed. They’re easy to use, <span class="cin2-text-dark fw-semibold">effective, and designed</span> to enhance team
                                        speed among your organization's members.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <div class="lms-color-iconbox" style="--bg-color:#fff">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.4362 20.8535C23.3295 20.2669 24.5028 20.9069 24.5028 21.9735V23.6935C24.5028 25.3869 23.1828 27.2002 21.5962 27.7335L17.3428 29.1469C16.5962 29.4002 15.3828 29.4002 14.6495 29.1469L10.3962 27.7335C8.79617 27.2002 7.4895 25.3869 7.4895 23.6935V21.9602C7.4895 20.9069 8.66284 20.2669 9.54284 20.8402L12.2895 22.6269C13.3428 23.3335 14.6762 23.6802 16.0095 23.6802C17.3428 23.6802 18.6762 23.3335 19.7295 22.6269L22.4362 20.8535Z"
                                            fill="#FF6666" />
                                        <path
                                            d="M26.6447 8.61345L18.658 3.37345C17.218 2.42679 14.8447 2.42679 13.4047 3.37345L5.378 8.61345C2.80466 10.2801 2.80466 14.0535 5.378 15.7335L7.51133 17.1201L13.4047 20.9601C14.8447 21.9068 17.218 21.9068 18.658 20.9601L24.5113 17.1201L26.338 15.9201V20.0001C26.338 20.5468 26.7913 21.0001 27.338 21.0001C27.8847 21.0001 28.338 20.5468 28.338 20.0001V13.4401C28.8713 11.7201 28.3247 9.72012 26.6447 8.61345Z"
                                            fill="#FF6666" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="man-title2-20px fw-semibold cin2-text-dark mb-2">Student Progress Monitor</h5>
                                    <p class="man-subtitle3-16px">You can try confidently our plug-in-play monitoring system for students which achieves a bridge between traditional and digital education. It is easy to use, effective, and progressive and students love it.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn gr-btn-primary">
                            <span>Get Started</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6 order-2 order-md-1">
                    <div>
                        <p class="lms-notice-badge-warning mb-3 text-center">Watermark</p>
                        <h1 class="man-title-48px mb-3">Keep Your Videos Safe</h1>
                        <p class="man-subtitle3-16px mb-32px">Your valuable videos deserve the best protection. Keep them <span class="cin2-text-dark fw-semibold">secure,</span> accessible only to your <span class="cin2-text-dark fw-semibold">chosen audience,</span> and <span
                                class="cin2-text-dark fw-semibold">safeguard</span> your creative work effortlessly.</p>
                        <a href="#" class="btn gr-btn-primary">
                            <span>Get Started</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="linearbg-img-wrap wow animate__fadeInUp" style="--linear-bg: linear-gradient(180deg, #8CE9FF 0%, #F9F6F1 100%);" data-wow-delay=".3s">
                        <div class="linearbg-banner" style="--banner-max-width: 475px;">
                            <img class="banner" src="{{ asset('assets/img/growup/linearbg-banner3.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="linearbg-img-wrap wow animate__fadeInUp" style="--linear-bg: linear-gradient(180deg, #9A9DFF 0%, #F9F6F1 100%);" data-wow-delay=".3s">
                        <div class="linearbg-banner" style="--banner-max-width: 477px;">
                            <img class="banner" src="{{ asset('assets/img/growup/linearbg-banner4.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <p class="lms-notice-badge-warning mb-3 text-center">Certificate</p>
                        <h1 class="man-title-48px mb-3">Certificate of Course Completion</h1>
                        <p class="man-subtitle3-16px mb-32px">Your learning journey deserves recognition, and our <span class="cin2-text-dark fw-semibold">Certificate of Course</span> Completion reflects that commitment. We’re grateful to provide you with a valuable credential to help advance your
                            career.</p>
                        <a href="#" class="btn gr-btn-primary">
                            <span>Get Started</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6">
                    <div>
                        <h1 class="man-title-48px mb-20px">Engage, Learn, & Access</h1>
                        <div class="mb-32px">
                            <div class="accordion lms2-accordion" id="lms-accordion2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" data-img-src="{{ asset('assets/img/growup/gr-accordion-banner1.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Course Discussion
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#lms-accordion2">
                                        <div class="accordion-body">
                                            <p class="man-subtitle3-16px">Course discussions offer a platform to <span class="cin2-text-dark fw-semibold">ask, share, and explore.</span> Connect with others, enhance knowledge, enrich your learning journey, and finally <span
                                                    class="cin2-text-dark fw-semibold">share skills</span> with each other through this platform.</p>
                                            <img class="d-block d-md-none lms2-accordion-img" src="{{ asset('assets/img/growup/gr-accordion-banner1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/growup/gr-accordion-banner2.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Course discussion
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#lms-accordion2">
                                        <div class="accordion-body">
                                            <p class="man-subtitle3-16px">With offline access, your learning is uninterrupted. <span class="cin2-text-dark fw-semibold">Download lessons, review anytime,</span> and study wherever you are even without the internet, and never miss a moment of progress.
                                            </p>
                                            <img class="d-block d-md-none lms2-accordion-img" src="{{ asset('assets/img/growup/gr-accordion-banner2.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/growup/gr-accordion-banner3.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Offline access
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#lms-accordion2">
                                        <div class="accordion-body">
                                            <p class="man-subtitle3-16px">Live Classes platform offers to <span class="cin2-text-dark fw-semibold">join live classes</span> for <span class="cin2-text-dark fw-semibold">real-time learning.</span> Interact with expert instructors, instantly ask
                                                questions, and share experiences with classmates.</p>
                                            <img class="d-block d-md-none lms2-accordion-img" src="{{ asset('assets/img/growup/gr-accordion-banner3.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn gr-btn-primary">
                            <span>Get Started</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                    <div class="ms-lg-4 ms-md-3">
                        <img id="lms2-accordion-img" class="lms2-accordion-img" src="{{ asset('assets/img/growup/gr-accordion-banner1.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-32px max-w-750px mx-auto">
                        <h1 class="man-title-48px text-center mb-3">Sales Simplified, Success Amplified.</h1>
                        <p class="man-subtitle3-16px text-center">Are you thinking about a hassle-free and secure business? Then why wait? Our innovative and effortless promising software is inspiring you. Watch the demo and choose yours!</p>
                    </div>
                </div>
            </div>
            <div class="row row-30px mb-100px">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gr-color-card max-sm-400px mx-auto h-100" style="--bg-color: #F6D0C4;">
                        <div class="lms-color-iconbox mb-12px" style="--bg-color:#3E1D12">
                            <img src="{{ asset('assets/img/icon/speedometer-white-40.svg') }}" alt="">
                        </div>
                        <h3 class="man-title2-20px fw-semibold cin1-text-dark mb-2">SEO optimization</h3>
                        <p class="man-subtitle-16px cin2-text-dark">Take simple SEO steps to bring big results, & reach the top of rankings.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gr-color-card max-sm-400px mx-auto h-100" style="--bg-color: #D5D1FF;">
                        <div class="lms-color-iconbox mb-12px" style="--bg-color:#3E1D12">
                            <img src="{{ asset('assets/img/icon/sms-white-40.svg') }}" alt="">
                        </div>
                        <h3 class="man-title2-20px fw-semibold cin1-text-dark mb-2">Email Newsletter</h3>
                        <p class="man-subtitle-16px cin2-text-dark">Stay updated! Get the latest business tips, events, and creator inspiration here.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gr-color-card max-sm-400px mx-auto h-100" style="--bg-color: #D7E7FF;">
                        <div class="lms-color-iconbox mb-12px" style="--bg-color:#3E1D12">
                            <img src="{{ asset('assets/img/icon/blogger-white-40.svg') }}" alt="">
                        </div>
                        <h3 class="man-title2-20px fw-semibold cin1-text-dark mb-2">Blogs</h3>
                        <p class="man-subtitle-16px cin2-text-dark">Blogs bring people together & share knowledge, stories, and passions in one place.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gr-color-card max-sm-400px mx-auto h-100" style="--bg-color: #F6D0C4;">
                        <div class="lms-color-iconbox mb-12px" style="--bg-color:#3E1D12">
                            <img src="{{ asset('assets/img/icon/share-white-40.svg') }}" alt="">
                        </div>
                        <h3 class="man-title2-20px fw-semibold cin1-text-dark mb-2">Social Media Sharing</h3>
                        <p class="man-subtitle-16px cin2-text-dark">Share your content instantly, reach followers, build brand loyalty, and inspire action.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6 order-2 order-md-1">
                    <div>
                        <p class="lms-notice-badge-warning mb-3 text-center">Device & access control</p>
                        <h1 class="man-title-48px mb-3">Protect Your Business, Anytime, Anywhere</h1>
                        <p class="man-subtitle3-16px mb-32px">Keep your business <span class="cin2-text-dark fw-semibold">top-notch protection</span> from risks <span class="cin2-text-dark fw-semibold">24/7</span> with our proven and protective solution. Focus on your business with confidence and
                            guarantee is our commitment.</p>
                        <a href="#" class="btn gr-btn-primary">
                            <span>Get Started</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="linearbg-img-wrap wow animate__fadeInUp" style="--linear-bg: linear-gradient(180deg, #FF8C8E 0%, #F9F6F1 100%);" data-wow-delay=".3s">
                        <div class="linearbg-banner linearbg-banner-left linearbg-banner-bottom" style="--banner-max-width: 490px;">
                            <img class="banner" src="{{ asset('assets/img/growup/linearbg-banner5.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="linearbg-img-wrap p-20px wow animate__fadeInUp" style="--linear-bg: linear-gradient(180deg, #B5FFC0 0%, #F9F6F1 100%);" data-wow-delay=".3s">
                        <div class="linearbg-banner mt-4 linearbg-banner-bottom" style="--banner-max-width: 520px;">
                            <img class="banner" src="{{ asset('assets/img/growup/linearbg-banner6.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <p class="lms-notice-badge-warning mb-3 text-center">page builder</p>
                        <h1 class="man-title-48px mb-3">Create Pages in Minutes</h1>
                        <p class="man-subtitle3-16px mb-32px">Create your homepage with ease! Our <span class="cin2-text-dark fw-semibold">self-help tool</span> makes building a professional website simple, letting you <span class="cin2-text-dark fw-semibold">design, customize, and launch</span> a
                            homepage that reflects your vision.</p>
                        <a href="#" class="btn gr-btn-primary">
                            <span>Get Started</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="gr-light-area">
                        <div class="mb-32px">
                            <h1 class="man-title-48px text-center mb-3">Flexible Lesson Types for everyone</h1>
                            <p class="man-subtitle3-16px text-center max-w-726px mx-auto">Our flexible <span class="cin2-text-dark fw-semibold">multi-lesson</span> approach offers diverse formats, enhancing engagement and supporting <span class="cin2-text-dark fw-semibold">various learning
                                    styles</span> to meet every learner’s needs effectively.</p>
                        </div>
                        <div class="box-items-group">
                            <div class="box-item-single text-center">
                                <img class="mb-2" src="{{ asset('assets/img/growup/html-60.svg') }}" alt="">
                                <h5 class="man-title-16px">HTML Player</h5>
                            </div>
                            <div class="box-item-single text-center">
                                <img class="mb-2" src="{{ asset('assets/img/growup/video-60.svg') }}" alt="">
                                <h5 class="man-title-16px">Embeded</h5>
                            </div>
                            <div class="box-item-single text-center">
                                <img class="mb-2" src="{{ asset('assets/img/growup/pdf-61.svg') }}" alt="">
                                <h5 class="man-title-16px">PDF & Document</h5>
                            </div>
                            <div class="box-item-single text-center">
                                <img class="mb-2" src="{{ asset('assets/img/growup/vimeo-60.svg') }}" alt="">
                                <h5 class="man-title-16px">Vimeo</h5>
                            </div>
                            <div class="box-item-single text-center">
                                <img class="mb-2" src="{{ asset('assets/img/growup/youtube-60.svg') }}" alt="">
                                <h5 class="man-title-16px">Youtube</h5>
                            </div>
                            <div class="box-item-single text-center">
                                <img class="mb-2" src="{{ asset('assets/img/growup/drive-60.svg') }}" alt="">
                                <h5 class="man-title-16px">Drive</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="mt-md-2">
                        <p class="lms-notice-badge-warning mb-3 text-center">API & mobile app support</p>
                        <h1 class="man-title-48px mb-3">Reliable API & App Solutions Anytime</h1>
                        <p class="man-subtitle3-16px mb-32px">Get reliable <span class="cin2-text-dark fw-semibold">API and App support</span> round-the-clock. Our expert team ensures seamless performance and quick issue resolution at any time.</p>
                        <div class="d-flex align-items-center flex-wrap rg-20px cg-20px">
                            <a href="#" class="btn gr-btn-primary">
                                <span>Get Started</span>
                                <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                            </a>
                            <a href="#" class="google-play-btn">
                                <img src="{{ asset('assets/img/growup/google-play.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="api-mobile-banner wow animate__fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/img/growup/api-mobile-banner.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row row-30px align-items-center mb-100px">
                <div class="col-md-6">
                    <div class="linearbg-img-wrap wow animate__fadeInUp" style="--linear-bg: linear-gradient(180deg, #FF8C8E 0%, #F9F6F1 100%);" data-wow-delay=".3s">
                        <div class="linearbg-banner" style="--banner-max-width: 475px;">
                            <img class="banner" src="{{ asset('assets/img/growup/linearbg-banner7.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <p class="lms-notice-badge-warning mb-3 text-center">Payment & Report</p>
                        <h1 class="man-title-48px mb-3">Popular Payment Gateways with acknowledgment</h1>
                        <p class="man-subtitle3-16px mb-32px">We offer those payment gateways which is recognized globally. Choose your <span class="cin2-text-dark fw-semibold">trusted payment gateways.</span> Through these options, payments are <span class="cin2-text-dark fw-semibold">easy,
                                reliable, and widely</span> acknowledged by businesses and customers.</p>
                        <a href="#" class="btn gr-btn-primary">
                            <span>Get Started</span>
                            <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="max-w-836px mx-auto">
                        <h1 class="man-title-48px text-center mb-3">Customer response</h1>
                        <p class="man-subtitle3-16px text-center">Our organization positively addresses the <span class="cin2-text-dark fw-semibold">valued customer reactions.</span> There is the team to analyze all the raised issues and provide possible solutions on a top priority basis because of
                            organizational commitment.</p>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block">
                <div class="row row-30px mb-100px mt-32px">
                    <div class="col-lg-4 col-md-6">
                        <div class="gr-single-testimonial mb-30px">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-1.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Robert Johnson</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                        </div>
                        <div class="gr-single-testimonial">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-4.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Hikmet Atceken</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gr-single-testimonial mb-30px">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-2.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Jenny Wilson</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                        </div>
                        <div class="gr-single-testimonial">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-5.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Ragiv Diler</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gr-single-testimonial mb-30px">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-3.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">David Carvajal</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                        </div>
                        <div class="gr-single-testimonial">
                            <div class="d-flex gap-2 align-items-start mb-20px">
                                <div class="img-circle-44px">
                                    <img src="{{ asset('assets/img/growup/user-sm-6.svg') }}" alt="">
                                </div>
                                <div>
                                    <h5 class="man-title-16px fw-bold">Maria Ancelotti</h5>
                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                </div>
                            </div>
                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none">
                <div class="row mb-100px">
                    <div class="col-12">
                        <div>
                            <div class="swiper gr-testimonial">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-1.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Robert Johnson</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-2.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Jenny Wilson</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-3.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">David Carvajal</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-4.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Hikmet Atceken</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-5.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Ragiv Diler</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gr-single-testimonial h-100">
                                            <div class="d-flex gap-2 align-items-start mb-20px">
                                                <div class="img-circle-44px">
                                                    <img src="{{ asset('assets/img/growup/user-sm-6.svg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="man-title-16px fw-bold">Maria Ancelotti</h5>
                                                    <p class="man-subtitle2-14px">CEO at Startup Inc.</p>
                                                </div>
                                            </div>
                                            <p class="man-subtitle-16px cin2-text-dark">I love GrowUp lms software because it has the absolute best user experience for my students and customers. I get compliments on it all the time! I will definitely be ordering again!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center">Customers FAQ</h1>
                </div>
            </div>
            <div class="row mb-100px justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-11">
                    <div>
                        <div class="accordion lms3-accordion" id="lms-qna-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaOne" aria-expanded="true" aria-controls="collapseqnaOne">
                                        Can I use GrowUp LMS at no cost?
                                    </button>
                                </h2>
                                <div id="collapseqnaOne" class="accordion-collapse collapse show" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">Yes! You can start with free plan  of GrowUp LMS at no cost and begin earning right away.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaTwo" aria-expanded="false" aria-controls="collapseqnaTwo">
                                        Can I close my account whenever I want?
                                    </button>
                                </h2>
                                <div id="collapseqnaTwo" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">In short, yes. If your organization is committed to training employees, partners, and customers, you can either enhance traditional methods or replace them entirely. Online training offers benefits like lower costs, reusable content,
                                            flexible scheduling, and detailed reporting, among others.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaThree" aria-expanded="false" aria-controls="collapseqnaThree">
                                        Do I have to provide credit card details to sign up?
                                    </button>
                                </h2>
                                <div id="collapseqnaThree" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">Absolutely! You can share course links directly, enabling users to access the content without registering. However, note that progress made by unregistered users will not be tracked.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaFour" aria-expanded="false" aria-controls="collapseqnaFour">
                                        Does GrowUp LMS take a percentage of my earnings?
                                    </button>
                                </h2>
                                <div id="collapseqnaFour" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">Yes, you can evaluate knowledge through quizzes, surveys, and assignments.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaFive" aria-expanded="false" aria-controls="collapseqnaFive">
                                        Is support included with my plan?
                                    </button>
                                </h2>
                                <div id="collapseqnaFive" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">Yes, GrowUp LMS offers robust communication tools. You can make global announcements visible to all users, send direct messages to individuals or groups, and automate emails for events like recertification or course completion.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaSix" aria-expanded="false" aria-controls="collapseqnaSix">
                                        Will I need a web host?
                                    </button>
                                </h2>
                                <div id="collapseqnaSix" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">No matter your size, GrowUp LMS offers affordable plans for everyone—from solo entrepreneurs to SMBs and growing enterprises. That’s why over 28000  teams rely on GrowUp LMS for their training needs.</p>
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
