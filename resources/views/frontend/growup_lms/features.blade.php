@extends('global.index')
@section('content')
    @include('frontend.creative_lms.lms_header')

    <!-- Hero Title Area Start -->
    <section>
        <div class="container">
            <div class="row lms-get-started-section feature">
                <div class="col-12">
                    <div>
                        <p class="lms-notice-badge-warning mx-auto mb-12px text-center">Experience robust features of GrowUp LMS</p>
                        <h1 class="mb-3 man-title-48px text-center">Design for impact. Learn for life.</h1>
                        <p class="mb-32px man-subtitle3-16px text-center">Combine your expertise with our cutting-edge tools to build impactful learning solutions that students will find irresistable.</p>
                        {{-- <div class="row">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 d-flex justify-content-center justify-content-sm-start align-items-center">

                            </div>
                        </div> --}}

                        <div class="d-sm-flex justify-content-center align-items-center gap-3">
                            <div class="d-flex d-sm-block">
                                <a href="#" class="btn lms-btn-purple-gradient px-4 feature">
                                    <span>Get Started Free</span>
                                    <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="icon">
                                </a>
                            </div>
                            <div class="mt-3 mt-sm-0 d-flex d-sm-block justify-content-center">
                                <a href="#" class="lms-video-modal-btn" data-bs-toggle="modal" data-bs-target="#video-modal">Watch demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Title Area End -->


    <!-- Slider Area Start -->
    <section class="mb-100px">
        <!-- Swiper -->
        <div class="swiper swiper-auto lms-swiper-side-shadow">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="lms-user-slide">
                        <img src="{{ asset('assets/img/lms/lms-slide-user1.webp') }}" alt="user">
                        <div class="lms-user-slide-details">
                            <h4 class="mb-1 lms-user-slide-name">Graham Cochane</h4>
                            <p class="lms-user-slide-info">Author, Speaker, Entrepreneur</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lms-user-slide">
                        <img src="{{ asset('assets/img/lms/lms-slide-user2.webp') }}" alt="user">
                        <div class="lms-user-slide-details">
                            <h4 class="mb-1 lms-user-slide-name">Graham Cochane</h4>
                            <p class="lms-user-slide-info">Author, Speaker, Entrepreneur</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lms-user-slide">
                        <img src="{{ asset('assets/img/lms/lms-slide-user3.webp') }}" alt="user">
                        <div class="lms-user-slide-details">
                            <h4 class="mb-1 lms-user-slide-name">Roberto White</h4>
                            <p class="lms-user-slide-info">Photographer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lms-user-slide">
                        <img src="{{ asset('assets/img/lms/lms-slide-user4.webp') }}" alt="user">
                        <div class="lms-user-slide-details">
                            <h4 class="mb-1 lms-user-slide-name">Dominique Sara</h4>
                            <p class="lms-user-slide-info">13k Followers</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lms-user-slide">
                        <img src="{{ asset('assets/img/lms/lms-slide-user5.webp') }}" alt="user">
                        <div class="lms-user-slide-details">
                            <h4 class="mb-1 lms-user-slide-name">Steven Marsh</h4>
                            <p class="lms-user-slide-info">Music Artist</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lms-user-slide">
                        <img src="{{ asset('assets/img/lms/lms-slide-user1.webp') }}" alt="user">
                        <div class="lms-user-slide-details">
                            <h4 class="mb-1 lms-user-slide-name">Graham Cochane</h4>
                            <p class="lms-user-slide-info">Author, Speaker, Entrepreneur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->


    <!-- Design Course Area Start -->
    <section>
        <div class="container">
            <div class="row align-items-center mb-100px justify-content-between">
                <div class="col-lg-6 col-xl-5">
                    <div>
                        <h1 class="man-title-48px mb-32px"><span class="skin-color">Design</span> outstanding courses</h1>
                        <ul class="d-flex flex-column gap-4 mb-32px">
                            <li class="d-flex align-items-start gap-3">
                                <div class="lms-color-iconbox" style="--bg-color:#FFF5E6">
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
                                    <h5 class="lms-iconlist-title mb-12px">Spark success</h5>
                                    <p class="lms-iconlist-subtitle">Transform your knowledge into engaging learning experiences with GrowUp LMS</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <div class="lms-color-iconbox" style="--bg-color:#FFEFEF">
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
                                    <h5 class="lms-iconlist-title mb-12px">LMS Essentials</h5>
                                    <p class="lms-iconlist-subtitle">Explore our tools, courses, communities, live lessons, events, memberships, AI quizzes, and downloads.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <div class="lms-color-iconbox" style="--bg-color:#EBF6E2">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.0663 2.9467C20.5197 2.40003 19.573 2.77336 19.573 3.53336V8.1867C19.573 10.1334 21.2263 11.7467 23.2397 11.7467C24.5063 11.76 26.2663 11.76 27.773 11.76C28.533 11.76 28.933 10.8667 28.3997 10.3334C26.4797 8.40003 23.0397 4.92003 21.0663 2.9467Z"
                                            fill="#19B363" />
                                        <path
                                            d="M27.3333 13.5866H23.4799C20.3199 13.5866 17.7466 11.0133 17.7466 7.85329V3.99996C17.7466 3.26663 17.1466 2.66663 16.4133 2.66663H10.7599C6.65325 2.66663 3.33325 5.33329 3.33325 10.0933V21.9066C3.33325 26.6666 6.65325 29.3333 10.7599 29.3333H21.2399C25.3466 29.3333 28.6666 26.6666 28.6666 21.9066V14.92C28.6666 14.1866 28.0666 13.5866 27.3333 13.5866ZM15.3333 23.6666H9.99992C9.45325 23.6666 8.99992 23.2133 8.99992 22.6666C8.99992 22.12 9.45325 21.6666 9.99992 21.6666H15.3333C15.8799 21.6666 16.3333 22.12 16.3333 22.6666C16.3333 23.2133 15.8799 23.6666 15.3333 23.6666ZM17.9999 18.3333H9.99992C9.45325 18.3333 8.99992 17.88 8.99992 17.3333C8.99992 16.7866 9.45325 16.3333 9.99992 16.3333H17.9999C18.5466 16.3333 18.9999 16.7866 18.9999 17.3333C18.9999 17.88 18.5466 18.3333 17.9999 18.3333Z"
                                            fill="#19B363" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="lms-iconlist-title mb-12px">Effortless learning everywhere</h5>
                                    <p class="lms-iconlist-subtitle">Enjoy seamless learning across all devices and captivate your audience with ease.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn cin3-btn-outline-secondary py-3 px-32px">Course creation features</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="w-100 wow animate__fadeInRight" data-wow-delay=".3s">
                        <!-- video -->
                        <div class="lms2-video-wrap">
                            <div class="plyr__video-embed" id="player-2">
                                <iframe src="https://www.youtube.com/embed/5YHAVhEJ9TM?si=GrmhAZyUahBciHUm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Design Course Area End -->


    <!-- Advanced Learning Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center max-w-858px mx-auto">Experience advanced <span class="skin-color">learning</span> frameworks</h1>
                </div>
            </div>
            <div class="row mb-100px">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="lms-icon-card h-100">
                        <p class="text-center lms-icon-card-title mb-12px">Interactive visual content</p>
                        <div class="lms-color-iconbox-circle mb-32px mx-auto" style="--bg-color:#EFF9FE">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.6667 34.1667C21.6667 34.6269 22.0398 35 22.5 35H30C32.7614 35 35 32.7614 35 30V22.5C35 22.0398 34.6269 21.6667 34.1667 21.6667H22.5C22.0398 21.6667 21.6667 22.0398 21.6667 22.5V34.1667Z" fill="#25B2FB" />
                                <path d="M34.1667 18.3333C34.6269 18.3333 35 17.9602 35 17.5V10C35 7.23858 32.7614 5 30 5H22.5C22.0398 5 21.6667 5.3731 21.6667 5.83333V17.5C21.6667 17.9602 22.0398 18.3333 22.5 18.3333H34.1667Z" fill="#25B2FB" />
                                <path d="M18.3333 5.83333C18.3333 5.3731 17.9602 5 17.5 5H10C7.23858 5 5 7.23858 5 10V30C5 32.7614 7.23858 35 10 35H17.5C17.9602 35 18.3333 34.6269 18.3333 34.1667V5.83333Z" fill="#25B2FB" />
                            </svg>
                        </div>
                        <p class="man-subtitle3-16px text-center">Create engaging interactive videos that captivate your learners from start to finish.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="lms-icon-card h-100">
                        <p class="text-center lms-icon-card-title mb-12px">AI assistance</p>
                        <div class="lms-color-iconbox-circle mb-32px mx-auto" style="--bg-color:#E8FCF2">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5 6.66667C12.5 5.74619 11.7538 5 10.8333 5C9.91286 5 9.16667 5.74619 9.16667 6.66667V9.16667H6.66667C5.74619 9.16667 5 9.91286 5 10.8333C5 11.7538 5.74619 12.5 6.66667 12.5H9.16667V15C9.16667 15.9205 9.91286 16.6667 10.8333 16.6667C11.7538 16.6667 12.5 15.9205 12.5 15V12.5H15C15.9205 12.5 16.6667 11.7538 16.6667 10.8333C16.6667 9.91286 15.9205 9.16667 15 9.16667H12.5V6.66667Z"
                                    fill="#19B363" />
                                <path
                                    d="M22.3499 8.80258C22.1093 8.17692 21.2241 8.17692 20.9834 8.80258L17.7167 17.2962C17.6423 17.4895 17.4895 17.6423 17.2962 17.7167L8.80258 20.9834C8.17692 21.2241 8.17692 22.1093 8.80258 22.3499L17.2962 25.6167C17.4895 25.691 17.6423 25.8438 17.7167 26.0371L20.9834 34.5308C21.2241 35.1564 22.1093 35.1564 22.3499 34.5308L25.6167 26.0371C25.691 25.8438 25.8438 25.691 26.0371 25.6167L34.5308 22.3499C35.1564 22.1093 35.1564 21.2241 34.5308 20.9834L26.0371 17.7167C25.8438 17.6423 25.691 17.4895 25.6167 17.2962L22.3499 8.80258Z"
                                    fill="#19B363" />
                            </svg>
                        </div>
                        <p class="man-subtitle3-16px text-center">You supply the expertise; AI amplifies the impact.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="lms-icon-card h-100">
                        <p class="text-center lms-icon-card-title mb-12px">Live sessions</p>
                        <div class="lms-color-iconbox-circle mb-32px mx-auto" style="--bg-color:#F4F3FF">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5393 11.2127C11.2091 10.5813 11.2401 9.52646 10.6087 8.85672C9.97724 8.18698 8.92242 8.15593 8.25268 8.78737C5.22979 11.6374 3.33594 15.6017 3.33594 20C3.33594 24.3984 5.22979 28.3627 8.25268 31.2127C8.92242 31.8442 9.97724 31.8131 10.6087 31.1434C11.2401 30.4736 11.2091 29.4188 10.5393 28.7874C8.13328 26.5189 6.66927 23.4122 6.66927 20C6.66927 16.5879 8.13328 13.4812 10.5393 11.2127Z"
                                    fill="#7E6FFF" />
                                <path
                                    d="M31.7525 8.78737C31.0828 8.15593 30.028 8.18698 29.3965 8.85672C28.7651 9.52647 28.7961 10.5813 29.4659 11.2127C31.8719 13.4812 33.3359 16.5879 33.3359 20C33.3359 23.4122 31.8719 26.5189 29.4659 28.7874C28.7961 29.4188 28.7651 30.4736 29.3965 31.1434C30.028 31.8131 31.0828 31.8442 31.7525 31.2127C34.7754 28.3627 36.6693 24.3984 36.6693 20C36.6693 15.6017 34.7754 11.6374 31.7525 8.78737Z"
                                    fill="#7E6FFF" />
                                <path
                                    d="M14.782 15.2127C15.4517 14.5813 15.4828 13.5265 14.8513 12.8567C14.2199 12.187 13.1651 12.1559 12.4953 12.7874C10.5582 14.6137 9.33594 17.1638 9.33594 20C9.33594 22.8363 10.5582 25.3864 12.4953 27.2127C13.1651 27.8442 14.2199 27.8131 14.8513 27.1434C15.4828 26.4736 15.4517 25.4188 14.782 24.7874C13.4617 23.5426 12.6693 21.8501 12.6693 20C12.6693 18.15 13.4617 16.4575 14.782 15.2127Z"
                                    fill="#7E6FFF" />
                                <path
                                    d="M27.5099 12.7874C26.8401 12.1559 25.7853 12.187 25.1539 12.8567C24.5224 13.5265 24.5535 14.5813 25.2232 15.2127C26.5435 16.4575 27.3359 18.15 27.3359 20C27.3359 21.8501 26.5435 23.5426 25.2232 24.7874C24.5535 25.4188 24.5224 26.4736 25.1539 27.1434C25.7853 27.8131 26.8401 27.8442 27.5099 27.2127C29.447 25.3864 30.6693 22.8363 30.6693 20C30.6693 17.1638 29.447 14.6137 27.5099 12.7874Z"
                                    fill="#7E6FFF" />
                                <path
                                    d="M23.7526 20C23.7526 18.9645 23.3329 18.027 22.6543 17.3484C21.9756 16.6698 21.0381 16.25 20.0026 16.25C18.9671 16.25 18.0296 16.6698 17.351 17.3484C16.6723 18.027 16.2526 18.9645 16.2526 20C16.2526 21.0356 16.6723 21.9731 17.351 22.6517C18.0296 23.3303 18.9671 23.75 20.0026 23.75C21.0381 23.75 21.9756 23.3303 22.6543 22.6517C23.3329 21.9731 23.7526 21.0356 23.7526 20Z"
                                    fill="#7E6FFF" />
                            </svg>
                        </div>
                        <p class="man-subtitle3-16px text-center">Unlock the full potential of human connection with dynamic live meetings.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="lms-icon-card h-100">
                        <p class="text-center lms-icon-card-title mb-12px">Assessment builder</p>
                        <div class="lms-color-iconbox-circle mb-32px mx-auto" style="--bg-color:#FFF2F0">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5 10C5 7.23858 7.23858 5 10 5C10.9205 5 11.6667 5.74619 11.6667 6.66667C11.6667 7.58714 10.9205 8.33333 10 8.33333C9.07953 8.33333 8.33333 9.07953 8.33333 10C8.33333 10.9205 7.58714 11.6667 6.66667 11.6667C5.74619 11.6667 5 10.9205 5 10ZM13.3333 6.66667C13.3333 5.74619 14.0795 5 15 5H18.3333C19.2538 5 20 5.74619 20 6.66667C20 7.58714 19.2538 8.33333 18.3333 8.33333H15C14.0795 8.33333 13.3333 7.58714 13.3333 6.66667ZM21.6667 6.66667C21.6667 5.74619 22.4129 5 23.3333 5C26.0948 5 28.3333 7.23858 28.3333 10C28.3333 10.9205 27.5871 11.6667 26.6667 11.6667C25.7462 11.6667 25 10.9205 25 10C25 9.07953 24.2538 8.33333 23.3333 8.33333C22.4129 8.33333 21.6667 7.58714 21.6667 6.66667ZM6.66667 13.3333C7.58714 13.3333 8.33333 14.0795 8.33333 15V18.3333C8.33333 19.2538 7.58714 20 6.66667 20C5.74619 20 5 19.2538 5 18.3333V15C5 14.0795 5.74619 13.3333 6.66667 13.3333ZM6.66667 21.6667C7.58714 21.6667 8.33333 22.4129 8.33333 23.3333C8.33333 24.2538 9.07953 25 10 25C10.9205 25 11.6667 25.7462 11.6667 26.6667C11.6667 27.5871 10.9205 28.3333 10 28.3333C7.23858 28.3333 5 26.0948 5 23.3333C5 22.4129 5.74619 21.6667 6.66667 21.6667Z"
                                    fill="#FF5F4A" />
                                <path d="M35 18.3333V31.6667C35 33.5076 33.5076 35 31.6667 35H18.3333C16.4924 35 15 33.5076 15 31.6667V25V18.3333C15 16.4924 16.4924 15 18.3333 15H25H31.6667C33.5076 15 35 16.4924 35 18.3333Z" fill="#FF5F4A" />
                            </svg>
                        </div>
                        <p class="man-subtitle3-16px text-center">Design seamless and effective online exams and self-assessments.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="lms-icon-card h-100">
                        <p class="text-center lms-icon-card-title mb-12px">E-commerce portal</p>
                        <div class="lms-color-iconbox-circle mb-32px mx-auto" style="--bg-color:#F1F6FF">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.3367 11.8169L33.2421 24.1647C33.8448 28.071 31.2979 31.6667 27.9283 31.6667H12.0665C8.69686 31.6667 6.14996 28.071 6.75274 24.1647L8.65813 11.8169C8.96941 9.79966 10.4605 8.33337 12.2006 8.33337H27.7942C29.5343 8.33337 31.0254 9.79966 31.3367 11.8169ZM16.6473 15.5977C16.5171 14.6864 15.6729 14.0533 14.7617 14.1835C13.8505 14.3136 13.2173 15.1579 13.3475 16.0691C14.4534 23.8104 25.5414 23.8104 26.6473 16.0691C26.7775 15.1579 26.1443 14.3136 25.2331 14.1835C24.3219 14.0533 23.4777 14.6864 23.3475 15.5977C22.7867 19.5231 17.2081 19.5231 16.6473 15.5977Z"
                                    fill="#5275FF" />
                            </svg>
                        </div>
                        <p class="man-subtitle3-16px text-center">Transform your learning with our LMS eCommerce portal, where education meets seamless online sales.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="lms-icon-card h-100">
                        <p class="text-center lms-icon-card-title mb-12px">SCORM</p>
                        <div class="lms-color-iconbox-circle mb-32px mx-auto" style="--bg-color:#EAF5FF">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M31.6643 3.33337H16.6643C14.6959 3.33337 12.9933 4.47072 12.1776 6.12408C12.0504 6.38196 12.2504 6.66671 12.538 6.66671H23.3312C28.854 6.66671 33.3312 11.1439 33.3312 16.6667V27.4595C33.3312 27.7471 33.616 27.9471 33.8738 27.8199C35.527 27.0042 36.6643 25.3016 36.6643 23.3334V8.33337C36.6643 5.57195 34.4257 3.33337 31.6643 3.33337Z"
                                    fill="#4392FF" />
                                <path d="M8.33073 18.3334C9.2512 18.3334 9.9974 17.5872 9.9974 16.6667C9.9974 15.7462 9.2512 15 8.33073 15C7.41025 15 6.66406 15.7462 6.66406 16.6667C6.66406 17.5872 7.41025 18.3334 8.33073 18.3334Z" fill="#4392FF" />
                                <path d="M13.3307 18.3334C14.2512 18.3334 14.9974 17.5872 14.9974 16.6667C14.9974 15.7462 14.2512 15 13.3307 15C12.4103 15 11.6641 15.7462 11.6641 16.6667C11.6641 17.5872 12.4103 18.3334 13.3307 18.3334Z" fill="#4392FF" />
                                <path d="M19.9974 16.6667C19.9974 17.5872 19.2512 18.3334 18.3307 18.3334C17.4103 18.3334 16.6641 17.5872 16.6641 16.6667C16.6641 15.7462 17.4103 15 18.3307 15C19.2512 15 19.9974 15.7462 19.9974 16.6667Z" fill="#4392FF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.4974 10H24.1641C26.9255 10 29.9974 13.0719 29.9974 15.8334V31.6667C29.9974 35.3486 27.0126 38.3334 23.3307 38.3334H8.33073C4.64883 38.3334 1.66406 35.3486 1.66406 31.6667V15.8334C1.66406 13.0719 4.73597 10 7.4974 10ZM26.6641 19.1667C26.6641 19.6269 26.291 20 25.8307 20H5.83073C5.37049 20 4.9974 19.6269 4.9974 19.1667V16.6667C4.9974 14.8258 6.48978 13.3334 8.33073 13.3334H23.3307C25.1717 13.3334 26.6641 14.8258 26.6641 16.6667V19.1667Z"
                                    fill="#4392FF" />
                            </svg>
                        </div>
                        <p class="man-subtitle3-16px text-center">Effortlessly upload SCORM/HTML5 packages and activities with ease.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Advanced Learning Area End -->


    <!-- Elevate Brand Area Start -->
    <section>
        <div class="container">
            <div class="row mb-100px align-items-center">
                <div class="col-md-6">
                    <div class="pe-lg-3 pe-xl-4">
                        <h1 class="man-title-48px mb-32px"><span class="skin-color">Elevate</span> your brand with precision and impact.</h1>
                        <p class="man-subtitle3-16px mb-32px">Make your business stand out with a fully branded <span class="cin2-text-dark fw-semibold">website and mobile app.</span> Select from a range of stunning templates and launch your site in just a few clicks—<span
                                class="cin2-text-dark fw-semibold">no coding required!</span></p>
                        <a href="#" class="btn cin3-btn-outline-secondary svg-stroke px-32px py-3 d-flex align-items-center gap-2">
                            <span>Learn more</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.90625 19.92L15.4263 13.4C16.1963 12.63 16.1963 11.37 15.4263 10.6L8.90625 4.08" stroke="#212534" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wow animate__fadeInRight" data-wow-delay=".3s">
                        <img class="w-100" src="{{ asset('assets/img/lms/feature-elevate-banner.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Elevate Brand Area End -->


    <!-- Boost Revenue Area Start -->
    <section>
        <div class="container">
            <div class="row mb-100px align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="wow animate__fadeInLeft" data-wow-delay=".3s">
                        <img class="w-100" src="{{ asset('assets/img/lms/feature-revenue-banner.webp') }}" alt="banner">
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div>
                        <h1 class="man-title-48px mb-32px">Boost <span class="skin-color">revenue</span> by selling</h1>
                        <p class="man-subtitle3-16px mb-32px">You provide the expertise, and we deliver the tools. With our seamless marketing and e-commerce features, <span class="fw-semibold cin2-text-dark">promoting and selling your learning products</span> is a breeze—no annoying sales tactics
                            required.</p>
                        <a href="#" class="btn cin3-btn-outline-secondary svg-stroke px-32px py-3 d-flex align-items-center gap-2">
                            <span>Product features</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.90625 19.92L15.4263 13.4C16.1963 12.63 16.1963 11.37 15.4263 10.6L8.90625 4.08" stroke="#212534" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Boost Revenue Area End -->



    <!-- Easy Management Area Start -->
    <section>
        <div class="container">
            <div class="row align-items-center mb-100px">
                <!-- Left -->
                <div class="col-md-6">
                    <div>
                        <h1 class="man-title-48px mb-32px">Easy <span class="skin-color">management</span></h1>
                        <!-- Accordion -->
                        <div>
                            <div class="accordion lms2-accordion" id="lms-accordion2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" data-img-src="{{ asset('assets/img/lms/management-banner1.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Integrations
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#lms-accordion2">
                                        <div class="accordion-body">
                                            <p class="man-subtitle-16px cin2-text-dark">Seamlessly integrate with your favorite tools and tech stack—AI makes it effortless!</p>
                                            <img class="d-block d-md-none lms2-accordion-img" src="{{ asset('assets/img/lms/management-banner1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/lms/management-banner2.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Efficient administration
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#lms-accordion2">
                                        <div class="accordion-body">
                                            <p class="man-subtitle-16px cin2-text-dark">Boost efficiency with automated employee training software that operates on your rules and your schedule.</p>
                                            <img class="d-block d-md-none lms2-accordion-img" src="{{ asset('assets/img/lms/management-banner2.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/lms/management-banner3.webp') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Custom user access
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#lms-accordion2">
                                        <div class="accordion-body">
                                            <p class="man-subtitle-16px cin2-text-dark">Grant each user the right level of access they need.</p>
                                            <img class="d-block d-md-none lms2-accordion-img" src="{{ asset('assets/img/lms/management-banner3.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right -->
                <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                    <div class="ps-xl-5 ps-lg-4 ms-xl-3 ms-lg-2 wow animate__fadeInRight" data-wow-delay=".3s">
                        <img id="lms2-accordion-img" class="lms2-accordion-img" src="{{ asset('assets/img/lms/management-banner1.webp') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Easy Management Area End -->


    <!-- Testimonial Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-20px">What Our <span class="skin-color">Customers</span> Say</h1>
                    <p class="man-subtitle3-16px text-center max-w-750px mx-auto">We’ve made it easier than ever to create, manage, and grow a profitable their coaching business that achieves transformational client results.</p>
                </div>
            </div>
        </div>
        <div class="lms-main-testimonial-area mb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="lms-testimonial-space">
                            <!-- Swiper -->
                            <div class="swiper lms2-swiper lms2-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column flex-sm-row lms2-single-slider">
                                            <div class="lms2-slider-img">
                                                <img src="{{ asset('assets/img/lms/lms-main-slider-banner-1.svg') }}" alt="banner">
                                            </div>
                                            <div class="lms2-slider-details">
                                                <img class="lms2-slider-quote" src="{{ asset('assets/img/lms/quote-up-blue-72.svg') }}" alt="">
                                                <p class="lms2-slider-comment">Great job, I will definitely be ordering again! LookScout is worth much more than I paid. I would like to personally thank you.</p>
                                                <h5 class="man-subtitle-16px mb-2px fw-bold cin2-text-dark">Robert Johnson</h5>
                                                <p class="man-subtitle3-16px">CEO at Startup Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->


    <!-- QNA Area Start -->
    <section>
        <div class="container">
            <div class="row mb-32px">
                <div class="col-12">
                    <h1 class="man-title-48px text-center mb-20px">GrowUp LMS FAQ</h1>
                    <p class="man-subtitle3-16px text-center">Your quick guide to all things regarding GrowUp LMS—features, pricing, and more!</p>
                </div>
            </div>
            <div class="row mb-100px justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-11">
                    <div>
                        <div class="accordion lms3-accordion" id="lms-qna-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaOne" aria-expanded="true" aria-controls="collapseqnaOne">
                                        What is GrowUp LMS?
                                    </button>
                                </h2>
                                <div id="collapseqnaOne" class="accordion-collapse collapse show" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">GrowUp LMS is a Learning Management System designed to streamline and enhance the process of creating, managing, and delivering educational content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaTwo" aria-expanded="false" aria-controls="collapseqnaTwo">
                                        What if I lack time for course development?
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
                                        Can I share my courses with non-registered users?
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
                                        Can I design quizzes and surveys?
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
                                        Can I interact with my users?
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
                                        Is GrowUp LMS suitable for my company?
                                    </button>
                                </h2>
                                <div id="collapseqnaSix" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">No matter your size, GrowUp LMS offers affordable plans for everyone—from solo entrepreneurs to SMBs and growing enterprises. That’s why over 28000  teams rely on GrowUp LMS for their training needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseqnaSeven" aria-expanded="false" aria-controls="collapseqnaSeven">
                                        Is there really need of an lms to train my members?
                                    </button>
                                </h2>
                                <div id="collapseqnaSeven" class="accordion-collapse collapse" data-bs-parent="#lms-qna-accordion">
                                    <div class="accordion-body">
                                        <p class="man-subtitle3-16px">An LMS can greatly enhance training by providing structured, scalable, and trackable learning experiences, but it’s not the only option. Traditional methods can work, but an LMS offers added benefits like flexible access, detailed
                                            reporting, and easier management.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- QNA Area End -->


    <!-- Blue Signup Area Start -->
    <section class="wow animate__fadeInUp" data-wow-delay=".3s">
        <div class="container">
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="lms-signup-area">
                        <div class="lms-signup-content">
                            <h2 class="man-title-48px text-white mb-32px">Take the leap - Sign up today!</h2>
                            <a href="#" class="btn cin1-btn-outline-white">Start your free trial</a>
                        </div>
                        <div class="lms-signup-img">
                            <img src="{{ asset('assets/img/lms/lms-signup-banner.webp') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blue Signup Area End -->


    <!-- Start Video Modal Area -->
    <div class="modal fade lms2-video-modal" id="video-modal" tabindex="-1" aria-labelledby="video-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="man-title-28px" id="video-modalLabel">Video title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="lms2-video-wrap">
                        <div class="plyr__video-embe" id="player">
                            <iframe src="https://www.youtube.com/embed/5YHAVhEJ9TM?si=GrmhAZyUahBciHUm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Modal Area -->
@endsection
