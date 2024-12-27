@extends('global.index')
@section('content')
    @include('frontend.growup_lms.lms_header')

    <section>
        <div class="container">
            <div class="row mt-60px mb-60px">
                <div class="col-12">
                    <div class="max-w-736px mx-auto">
                        <p class="lms-notice-badge-warning mx-auto mb-12px text-center">Experience robust features of GrowUp LMS</p>
                        <h1 class="mb-3 man-title-48px text-center">Design for impact. Learn for life.</h1>
                        <p class="mb-32px man-subtitle2-20px text-center">Combine your expertise with our cutting-edge tools to build impactful learning solutions that students will find irresistable.</p>
                        <div class="d-flex align-items-center justify-content-center cg-32px rg-20px flex-wrap">
                            <a href="{{ route('register.company.form', 'growup-lms') }}" class="btn lms-btn-purple-gradient px-4">
                                <span>Get Started Free</span>
                                <img src="{{ asset('assets/img/icon/arrow-right-white-24.svg') }}" alt="icon">
                            </a>
                            <a href="#" class="lms-video-modal-btn" data-bs-toggle="modal" data-bs-target="#video-modal">Watch demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-card-main d-flex padding-bottom-110">
                        <div class="services-card-left">
                            <div class="mb-36px">
                                <h2 class="man-title-48px">Easy Course Selling Made Simple your Business</h2>
                            </div>
                            <div class="services-card-inner">
                                <div class="white-service-info-card">
                                    <div class="white-service-card-details">
                                        <h4 class="title">Teacher Expertise</h4>
                                        <p class="info">Teacher Expertise can become an unparalleled income source. GrowUp LMS is helping teachers to implement the learning culture to make money. Try to explore!</p>
                                    </div>
                                    <div class="white-service-card-img">
                                        <img src="{{ asset('assets/img/lms/through-learning-1.webp') }}" alt="">
                                    </div>
                                </div>

                                <div class="black-service-info-card">
                                    <div class="black-service-card-details">
                                        <h4 class="title">Webinars and Training Session</h4>
                                        <p class="info">Host live webinars and training sessions for your students to provide more insightful knowledge and demonstrate your skills in real-time.</p>
                                    </div>
                                    <div class="black-service-card-img">
                                        <img src="{{ asset('assets/img/lms/through-learning-2.webp') }}" alt="">
                                    </div>
                                </div>

                                <div class="white-service-info-card">
                                    <div class="white-service-card-details">
                                        <h4 class="title">Extended photography</h4>
                                        <p class="info">You can use our platform to develop intern photographers into professionals. This platform ensures benefits for both the intern and you.</p>
                                    </div>
                                    <div class="white-service-card-img">
                                        <img src="{{ asset('assets/img/lms/through-learning-3.webp') }}" alt="">
                                    </div>
                                </div>

                                <div class="black-service-info-card">
                                    <div class="black-service-card-details">
                                        <h4 class="title">Online Coaching</h4>
                                        <p class="info">Create private online coaching sessions and share your experience as a coach to guide your students achieve their personal goals.</p>
                                    </div>
                                    <div class="black-service-card-img">
                                        <img src="{{ asset('assets/img/lms/through-learning-4.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right -->
                        <div class="services-card-right">
                            <div class="services-card-inner">

                                <div class="black-service-info-card">
                                    <div class="black-service-card-img">
                                        <img src="{{ asset('assets/img/lms/through-learning-5.webp') }}" alt="">
                                    </div>
                                    <div class="black-service-card-details service-card-details-bottom">
                                        <h4 class="title">Student Development</h4>
                                        <p class="info">Student development can significantly impact success through an inspiring and interactive education system. Engage with an impactful learning culture. Only education can succeed in your dream.</p>
                                    </div>
                                </div>

                                <div class="white-service-info-card">
                                    <div class="white-service-card-details">
                                        <h4 class="title">Teach Program writing</h4>
                                        <p class="info">Use your programming skills to stand out! Teach others, inspire loyal learners, and grow your brand. Turn your expertise into a powerful tool to build trust and boost your income.</p>
                                    </div>
                                    <div class="white-service-card-img">
                                        <img src="{{ asset('assets/img/lms/through-learning-6.webp') }}" alt="">
                                    </div>
                                </div>

                                <div class="black-service-info-card">
                                    <div class="black-service-card-details">
                                        <h4 class="title">Podcasts</h4>
                                        <p class="info">Start your podcast journey with GrowUp LMS and feature your detailed discussions on your technical and professional skills to your audience.</p>
                                    </div>
                                    <div class="black-service-card-img">
                                        <img src="{{ asset('assets/img/lms/through-learning-7.webp') }}" alt="">
                                    </div>
                                </div>

                                <div class="white-service-info-card">
                                    <div class="white-service-card-details">
                                        <h4 class="title">Subscription Services</h4>
                                        <p class="info">Subscribe to premium services that provide you unique access to a ton of worthwhile tools, information, and continuous assistance.</p>
                                    </div>
                                    <div class="white-service-card-img">
                                        <img src="{{ asset('assets/img/lms/through-learning-8.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="lms-best-section">
        <div class="container">
            <div class="row justify-content-center mcg-30 mrg-70">
                <div class="col-md-6">
                    <div>
                        <h2 class="man-title-48px">GrowUp LMS is the Best problem solver for Everyone! </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="problem-solver-single d-flex">
                        <div class="problem-solver-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path
                                    d="M16.4286 28.6673H20.617C23.9596 28.6673 26.6693 25.6826 26.6693 22.0007V9.40793C26.6693 8.59055 26.0067 7.92793 25.1893 7.92793C24.3719 7.92793 23.7093 8.59055 23.7093 9.40793V14.8006C23.7093 15.0952 23.4705 15.334 23.1759 15.334C22.8814 15.334 22.6426 15.0952 22.6426 14.8007V6.74475C22.6426 5.92545 21.9784 5.26127 21.1591 5.26127C20.3398 5.26127 19.6756 5.92545 19.6756 6.74475V13.4673C19.6756 13.7619 19.4369 14.0007 19.1423 14.0007C18.8477 14.0007 18.609 13.7619 18.609 13.4673V4.81716C18.609 3.99803 17.9449 3.33398 17.1258 3.33398C16.3066 3.33398 15.6426 3.99803 15.6426 4.81716V14.8007C15.6426 15.0952 15.4038 15.334 15.1093 15.334C14.8147 15.334 14.5759 15.0952 14.5759 14.8007V8.14744C14.5759 7.32999 13.9133 6.66732 13.0958 6.66732C12.2784 6.66732 11.6157 7.32999 11.6157 8.14744L11.6157 19.334L7.95063 17.2177C6.90809 16.6157 5.60398 17.2434 5.37014 18.4598C5.26406 19.0116 5.40772 19.5836 5.75975 20.0108L10.5901 25.8736C12.0511 27.6468 14.1838 28.6673 16.4286 28.6673Z"
                                    fill="#0A7EFB" />
                            </svg>
                        </div>
                        <div class="problem-solver-details2">
                            <h4 class="title">Learn Interactively</h4>
                            <p class="info">Our approach includes interactive elements, real-world scenarios, and hands-on experiences that resonate with your trainees. We believe that effective training goes beyond imparting knowledge—it's about making learning meaningful. This step ensures that the
                                training doesn't just tick boxes but truly adds value to your organization.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="problem-solver-single d-flex">
                        <div class="problem-solver-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path
                                    d="M25.4392 14.2646C25.179 14.5256 24.7563 14.5259 24.4957 14.2653L17.7374 7.50693C17.477 7.24658 17.477 6.82447 17.7374 6.56412L19.4826 4.81884C20.5744 3.72705 22.3446 3.72705 23.4363 4.81884L27.1812 8.56371C28.2743 9.65677 28.2728 11.4294 27.178 12.5207L25.4392 14.2646Z"
                                    fill="#0A7EFB" />
                                <path
                                    d="M5.04507 20.0679L4.02153 26.2091C3.84777 27.2517 4.75162 28.1555 5.79418 27.9818L11.9354 26.9583C12.3481 26.8895 12.7401 26.7378 13.0888 26.5148C13.399 26.3164 13.3963 25.8868 13.1359 25.6264L6.37688 18.8674C6.11653 18.6071 5.68692 18.6044 5.48854 18.9145C5.26556 19.2632 5.11386 19.6552 5.04507 20.0679Z"
                                    fill="#0A7EFB" />
                                <path
                                    d="M8.26242 16.0391C8.00207 16.2994 8.00207 16.7215 8.26242 16.9819L15.0215 23.7409C15.2818 24.0012 15.7039 24.0012 15.9643 23.7409L22.6107 17.0945C22.871 16.8341 22.871 16.412 22.6107 16.1517L15.8517 9.39263C15.5913 9.13228 15.1692 9.13228 14.9088 9.39263L8.26242 16.0391Z"
                                    fill="#0A7EFB" />
                                <path d="M18.6667 25.3333C17.9303 25.3333 17.3333 25.9303 17.3333 26.6667C17.3333 27.403 17.9303 28 18.6667 28H26.6667C27.403 28 28 27.403 28 26.6667C28 25.9303 27.403 25.3333 26.6667 25.3333H18.6667Z" fill="#0A7EFB" />
                            </svg>
                        </div>
                        <div class="problem-solver-details2">
                            <h4 class="title">Create Training Programs</h4>
                            <p class="info">Our approach includes interactive elements, real-world scenarios, and hands-on experiences that resonate with your trainees. We believe that effective training goes beyond imparting knowledge—it's about making learning meaningful. This step ensures that the
                                training doesn't just tick boxes but truly adds value to your organization.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="problem-solver-single d-flex">
                        <div class="problem-solver-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22.6667 4H9.33333C6.38781 4 4 6.38781 4 9.33333V22.6667C4 25.6122 6.38781 28 9.33333 28H22.6667C25.6122 28 28 25.6122 28 22.6667V9.33333C28 6.38781 25.6122 4 22.6667 4ZM21.4287 10.1715C21.7022 9.48777 22.4781 9.15521 23.1619 9.4287C23.8456 9.70218 24.1781 10.4781 23.9046 11.1619L21.7049 16.6612C21.1805 17.9722 19.7252 18.6472 18.3857 18.2007L12.7711 16.3291L10.5713 21.8285C10.2978 22.5122 9.52186 22.8448 8.83815 22.5713C8.15443 22.2978 7.82188 21.5219 8.09537 20.8381L10.2951 15.3388C10.8195 14.0278 12.2748 13.3528 13.6143 13.7993L19.2289 15.6709L21.4287 10.1715Z"
                                    fill="#0A7EFB" />
                            </svg>
                        </div>
                        <div class="problem-solver-details2">
                            <h4 class="title">Monitor Your Progress</h4>
                            <p class="info">Our approach includes interactive elements, real-world scenarios, and hands-on experiences that resonate with your trainees. We believe that effective training goes beyond imparting knowledge—it's about making learning meaningful. This step ensures that the
                                training doesn't just tick boxes but truly adds value to your organization.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="problem-solver-single d-flex">
                        <div class="problem-solver-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M26.6159 9.23913L22.7593 5.38259C21.6353 4.25859 20.0182 3.77641 18.45 4.09768C17.1037 4.3735 16.001 5.34811 15.5607 6.65155L15.1596 7.83868C14.6765 9.2689 15.0401 10.8412 16.099 11.9001L20.0983 15.8994C21.1572 16.9583 22.7295 17.3219 24.1597 16.8388L25.3468 16.4378C26.6503 15.9975 27.625 14.8948 27.9008 13.5483C28.222 11.9801 27.7398 10.3631 26.6159 9.23913ZM22.3406 8.72581C21.8199 8.20511 20.9757 8.20511 20.455 8.72581C19.9343 9.24651 19.9343 10.0907 20.455 10.6114L21.3868 11.5433C21.9075 12.064 22.7517 12.064 23.2724 11.5433C23.7931 11.0226 23.7931 10.1783 23.2724 9.65764L22.3406 8.72581Z"
                                    fill="#0A7EFB" />
                                <path
                                    d="M10.5891 17.6824L13.8782 14.3933C14.1386 14.1329 14.5607 14.1329 14.821 14.3933L17.6056 17.1778C17.8659 17.4382 17.8659 17.8603 17.6056 18.1206L8.66864 27.0575C8.14794 27.5782 7.30373 27.5782 6.78303 27.0575L4.94131 25.2158C4.42061 24.6951 4.42061 23.8509 4.94131 23.3302L5.87966 22.3918L6.81129 23.3235C7.33199 23.8442 8.17621 23.8442 8.69691 23.3235C9.21761 22.8028 9.21761 21.9585 8.69691 21.4378L7.76528 20.5062L8.70348 19.568L10.101 20.9656C10.6217 21.4863 11.466 21.4863 11.9867 20.9656C12.5073 20.4449 12.5073 19.6006 11.9866 19.0799L10.5891 17.6824Z"
                                    fill="#0A7EFB" />
                            </svg>
                        </div>
                        <div class="problem-solver-details2">
                            <h4 class="title">Get Easy Access to Materials</h4>
                            <p class="info">Our approach includes interactive elements, real-world scenarios, and hands-on experiences that resonate with your trainees. We believe that effective training goes beyond imparting knowledge—it's about making learning meaningful. This step ensures that the
                                training doesn't just tick boxes but truly adds value to your organization.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="problem-solver-single d-flex">
                        <div class="problem-solver-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.0013 2.66699C20.5322 2.66699 24.5353 4.92702 26.9448 8.38128C27.8447 9.67155 28.5224 11.1284 28.9221 12.6964C28.9758 12.9069 29.0244 13.1193 29.0679 13.3337C29.2428 14.1953 29.3346 15.0871 29.3346 16.0003C29.3346 16.4503 29.3123 16.8951 29.2688 17.3337C29.1289 18.7431 28.7694 20.088 28.2252 21.3337H21.1666C21.0064 20.7108 20.7364 20.132 20.3786 19.6191C20.0656 19.1703 19.6854 18.772 19.2525 18.4386C19.2805 18.3908 19.3058 18.3408 19.3282 18.2885L21.2267 13.8586C21.5168 13.1817 21.2033 12.3979 20.5264 12.1078C19.8496 11.8177 19.0658 12.1313 18.7757 12.8081L16.8771 17.2381C16.8548 17.2902 16.8361 17.3429 16.8208 17.3959C16.5536 17.3547 16.2799 17.3333 16.0013 17.3333C14.1889 17.3333 12.5876 18.2374 11.6239 19.6191C11.2661 20.132 10.9961 20.7108 10.8359 21.3337H3.77742C3.23317 20.088 2.87374 18.7431 2.7338 17.3337C2.69026 16.8951 2.66797 16.4503 2.66797 16.0003C2.66797 15.0871 2.75978 14.1953 2.93468 13.3337C2.97819 13.1193 3.02684 12.9069 3.08049 12.6964C3.48023 11.1284 4.15786 9.67155 5.05785 8.38128C7.46727 4.92702 11.4704 2.66699 16.0013 2.66699ZM17.3347 6.66699C17.3347 5.93061 16.7377 5.33366 16.0014 5.33366C15.265 5.33366 14.668 5.93061 14.668 6.66699V7.33366C14.668 8.07004 15.265 8.66699 16.0014 8.66699C16.7377 8.66699 17.3347 8.07004 17.3347 7.33366V6.66699ZM10.3445 8.45785C9.8238 7.93715 8.97958 7.93715 8.45888 8.45785C7.93818 8.97855 7.93818 9.82277 8.45888 10.3435L8.93029 10.8149C9.45098 11.3356 10.2952 11.3356 10.8159 10.8149C11.3366 10.2942 11.3366 9.44996 10.8159 8.92926L10.3445 8.45785ZM23.5438 10.3435C24.0645 9.82277 24.0645 8.97855 23.5438 8.45785C23.0231 7.93715 22.1789 7.93715 21.6582 8.45785L21.1868 8.92926C20.6661 9.44995 20.6661 10.2942 21.1868 10.8149C21.7075 11.3356 22.5517 11.3356 23.0724 10.8149L23.5438 10.3435ZM6.66797 14.667C5.93159 14.667 5.33464 15.264 5.33464 16.0004C5.33464 16.7368 5.93159 17.3337 6.66797 17.3337H7.33464C8.07101 17.3337 8.66797 16.7368 8.66797 16.0004C8.66797 15.264 8.07101 14.667 7.33464 14.667H6.66797ZM24.668 14.667C23.9316 14.667 23.3346 15.264 23.3346 16.0004C23.3346 16.7368 23.9316 17.3337 24.668 17.3337H25.3346C26.071 17.3337 26.668 16.7368 26.668 16.0004C26.668 15.264 26.071 14.667 25.3346 14.667H24.668Z"
                                    fill="#0A7EFB" />
                                <path d="M5.33366 24.0003C7.38715 26.7342 10.4671 28.653 14.0013 29.1847C14.6537 29.2828 15.3216 29.3337 16.0013 29.3337C16.681 29.3337 17.3489 29.2828 18.0013 29.1847C21.5355 28.653 24.6154 26.7342 26.6689 24.0003H5.33366Z" fill="#0A7EFB" />
                            </svg>
                        </div>
                        <div class="problem-solver-details2">
                            <h4 class="title">See Your Performance Improvement</h4>
                            <p class="info">Our approach includes interactive elements, real-world scenarios, and hands-on experiences that resonate with your trainees. We believe that effective training goes beyond imparting knowledge—it's about making learning meaningful. This step ensures that the
                                training doesn't just tick boxes but truly adds value to your organization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-44px">
                        <h2 class="man-title-48px">All tools in one place</h2>
                    </div>
                </div>
            </div>
            <div class="row padding-bottom-80">
                <div class="col-md-12">
                    <div class="one-place-grid one-place-grid-1">
                        <div class="one-place-icon-card one-place-left-card">
                            <div class="one-place-icon">
                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.7189 9.95403L21.9064 10.7665C20.8753 10.391 19.7862 10.2001 18.6889 10.2027C16.1764 10.2074 13.7682 11.2075 11.9917 12.9841C10.2151 14.7607 9.21496 17.1688 9.21023 19.6813C9.21023 20.8074 9.40523 21.8913 9.77411 22.8988L8.45136 24.2215L5.57998 21.3502L2.77361 18.5438L2.85973 18.4577L16.4334 4.89378L17.0297 4.29741L19.7711 7.02741L22.7075 9.94103L22.7189 9.95403ZM2.32186 19.6244L0.045234 25.9018C-0.00518453 26.0485 -0.0136448 26.2064 0.0208057 26.3577C0.0552563 26.509 0.13125 26.6477 0.240234 26.7582C0.351241 26.8657 0.489631 26.9408 0.640341 26.9752C0.79105 27.0096 0.948304 27.0019 1.09498 26.9532L7.37236 24.6765L2.32186 19.6244ZM24.7875 2.14266C24.0189 1.38378 23 1.00516 21.9389 0.972656C21.4117 0.977578 20.8906 1.08631 20.4055 1.29264C19.9203 1.49896 19.4806 1.79885 19.1114 2.17516L17.7886 3.52553L17.7951 3.53041L20.5365 6.26041L23.4712 9.17241L23.4761 9.17891L24.82 7.80741C25.5675 7.05991 25.9786 6.05241 25.9786 5.00103V4.95716C25.9784 4.43221 25.8729 3.91263 25.6683 3.42919C25.4637 2.94575 25.1642 2.50827 24.7875 2.14266Z"
                                        fill="#0072EF" />
                                    <path
                                        d="M18.6875 12.3701C14.6559 12.3701 11.375 15.651 11.375 19.6826C11.375 23.7142 14.6559 26.9951 18.6875 26.9951C22.7191 26.9951 26 23.7142 26 19.6826C26 15.651 22.7191 12.3701 18.6875 12.3701ZM21.6661 20.7649H19.7698V22.6612C19.7698 22.9487 19.6556 23.2244 19.4523 23.4277C19.249 23.6309 18.9733 23.7451 18.6859 23.7451C18.3984 23.7451 18.1227 23.6309 17.9195 23.4277C17.7162 23.2244 17.602 22.9487 17.602 22.6612V20.7649H15.7056C15.4182 20.7649 15.1425 20.6507 14.9392 20.4474C14.7359 20.2441 14.6217 19.9685 14.6217 19.681C14.6217 19.3935 14.7359 19.1178 14.9392 18.9146C15.1425 18.7113 15.4182 18.5971 15.7056 18.5971H17.602V16.7007C17.602 16.4133 17.7162 16.1376 17.9195 15.9343C18.1227 15.7311 18.3984 15.6169 18.6859 15.6169C18.9733 15.6169 19.249 15.7311 19.4523 15.9343C19.6556 16.1376 19.7698 16.4133 19.7698 16.7007V18.5971H21.6661C21.9536 18.5971 22.2293 18.7113 22.4325 18.9146C22.6358 19.1178 22.75 19.3935 22.75 19.681C22.75 19.9685 22.6358 20.2441 22.4325 20.4474C22.2293 20.6507 21.9536 20.7649 21.6661 20.7649Z"
                                        fill="#0072EF" />
                                </svg>
                            </div>
                            <h4 class="man-title-24px mb-12px">Curriculum Creation</h4>
                            <p class="info2">Create engaging and helpful course material with our curriculum development tools. To ensure thorough and worthwhile learning experiences, design courses that are individually customized.</p>
                        </div>
                        <div class="one-place-title-wrap one-place-title-right-wrap">
                            <div class="one-place-title2">
                                <h4 class="title">Promotion and Outreach</h4>
                                <p class="info2">Create engaging and helpful course material with our curriculum development tools to ensure thorough.</p>
                            </div>
                            <div class="one-place-title2">
                                <h4 class="title">Automated Email Campaigns</h4>
                                <p class="info">Create engaging and helpful course material with our curriculum development tools to ensure thorough.</p>
                            </div>
                        </div>
                    </div>
                    <div class="one-place-grid">
                        <div class="one-place-title-wrap one-place-title-left-wrap">
                            <div class="one-place-title2">
                                <h4 class="title">Page Customization</h4>
                                <p class="info">Create engaging and helpful course material with our curriculum development tools to ensure thorough.</p>
                            </div>
                            <div class="one-place-title2">
                                <h4 class="title">Real-Time Instruction, Interactive Webinars, and Live Streaming</h4>
                                <p class="info">Create engaging and helpful course material with our curriculum development tools to ensure thorough.</p>
                            </div>
                        </div>
                        <div class="one-place-icon-card one-place-right-card">
                            <div class="one-place-icon">
                                <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 1C12.6739 1 11.4021 1.47411 10.4645 2.31802C9.52678 3.16193 9 4.30653 9 5.5C9 6.69347 9.52678 7.83807 10.4645 8.68198C11.4021 9.52589 12.6739 10 14 10C15.3261 10 16.5978 9.52589 17.5355 8.68198C18.4732 7.83807 19 6.69347 19 5.5C19 4.30653 18.4732 3.16193 17.5355 2.31802C16.5978 1.47411 15.3261 1 14 1Z"
                                        fill="#0072EF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.7395 2.61626C21.398 2.61626 21.0739 2.67519 20.7723 2.78092C20.652 2.82581 20.5239 2.84629 20.3956 2.84116C20.2673 2.83604 20.1413 2.80541 20.025 2.75107C19.9086 2.69674 19.8042 2.61977 19.718 2.52468C19.6317 2.42958 19.5652 2.31825 19.5224 2.19718C19.4795 2.07611 19.4613 1.94773 19.4686 1.81953C19.4759 1.69132 19.5087 1.56586 19.565 1.45046C19.6214 1.33506 19.7001 1.23204 19.7967 1.14739C19.8933 1.06275 20.0057 0.998179 20.1275 0.957456C20.7913 0.724036 21.498 0.638272 22.1983 0.70615C22.8987 0.774028 23.5758 0.993912 24.1824 1.35046C24.7889 1.707 25.3104 2.19162 25.7104 2.7705C26.1104 3.34937 26.3792 4.00855 26.4982 4.70205C26.6171 5.39554 26.5833 6.10664 26.3991 6.78571C26.2149 7.46479 25.8847 8.09549 25.4316 8.6338C24.9785 9.17211 24.4134 9.60506 23.7757 9.90244C23.138 10.1998 22.4431 10.3545 21.7395 10.3556C21.6125 10.3556 21.4867 10.3306 21.3694 10.282C21.252 10.2334 21.1454 10.1621 21.0556 10.0723C20.9658 9.98249 20.8945 9.87587 20.8459 9.75852C20.7973 9.64117 20.7723 9.5154 20.7723 9.38839C20.7723 9.26137 20.7973 9.1356 20.8459 9.01826C20.8945 8.90091 20.9658 8.79429 21.0556 8.70447C21.1454 8.61466 21.252 8.54342 21.3694 8.49481C21.4867 8.4462 21.6125 8.42119 21.7395 8.42119C22.5095 8.42119 23.248 8.1153 23.7925 7.57082C24.3369 7.02634 24.6428 6.28787 24.6428 5.51786C24.6428 4.74784 24.3369 4.00937 23.7925 3.46489C23.248 2.92041 22.5095 2.61452 21.7395 2.61452V2.61626ZM7.22803 9.38839C7.22803 9.92225 6.7947 10.3556 6.26083 10.3556C5.55765 10.3537 4.86332 10.1986 4.22625 9.90089C3.58918 9.60321 3.02469 9.17017 2.57214 8.63197C2.11958 8.09376 1.78983 7.46334 1.60589 6.78463C1.42194 6.10593 1.38823 5.39527 1.50708 4.7022C1.62594 4.00913 1.89451 3.35032 2.29408 2.77168C2.69364 2.19305 3.21459 1.70851 3.82062 1.35184C4.42664 0.995175 5.10315 0.77496 5.80301 0.706546C6.50286 0.638133 7.20921 0.723167 7.87283 0.955722C7.99268 0.99806 8.10301 1.06359 8.19753 1.14857C8.29205 1.23354 8.36891 1.33631 8.42371 1.45099C8.47852 1.56567 8.51019 1.69002 8.51694 1.81694C8.52369 1.94387 8.50537 2.07088 8.46303 2.19072C8.42069 2.31057 8.35517 2.4209 8.27019 2.51542C8.18521 2.60994 8.08245 2.68679 7.96777 2.7416C7.85309 2.7964 7.72874 2.82808 7.60181 2.83483C7.47489 2.84158 7.34788 2.82326 7.22803 2.78092C6.82989 2.64156 6.40615 2.59069 5.98634 2.63184C5.56652 2.673 5.16073 2.80519 4.79723 3.01922C4.43373 3.23324 4.12127 3.52395 3.88161 3.87108C3.64196 4.21822 3.48087 4.61343 3.40957 5.02919C3.33828 5.44495 3.35849 5.87125 3.4688 6.2784C3.57912 6.68555 3.77688 7.06375 4.0483 7.38665C4.31973 7.70955 4.65829 7.96939 5.04041 8.14806C5.42253 8.32673 5.83901 8.41994 6.26083 8.42119C6.7947 8.42119 7.22803 8.85452 7.22803 9.38839Z"
                                        fill="#0072EF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.9987 11.6455C12.0227 11.6455 10.3067 12.7167 9.12109 14.2992C7.93203 15.8835 7.22656 18.0259 7.22656 20.3538C7.22656 20.8876 7.6599 21.321 8.19376 21.321H19.8036C20.3375 21.321 20.7708 20.8876 20.7708 20.3538C20.7708 18.0259 20.0654 15.8835 18.8763 14.2992C17.689 12.7167 15.9747 11.6455 13.9987 11.6455Z"
                                        fill="#0072EF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.1268 12.6127C20.1268 12.0788 20.5601 11.6455 21.094 11.6455C23.07 11.6455 24.786 12.7167 25.9716 14.2992C27.1607 15.8835 27.8661 18.0259 27.8661 20.3538C27.8661 20.8876 27.4328 21.321 26.8989 21.321H23.0284C22.7717 21.321 22.5254 21.219 22.3439 21.0374C22.1623 20.8559 22.0603 20.6097 22.0603 20.3529C22.0603 20.0962 22.1623 19.8499 22.3439 19.6684C22.5254 19.4868 22.7717 19.3848 23.0284 19.3848H25.8815C25.722 17.8352 25.1829 16.4728 24.4255 15.4606C23.512 14.2438 22.3247 13.5816 21.094 13.5816C20.8375 13.5816 20.5915 13.4797 20.4101 13.2984C20.2287 13.117 20.1268 12.8692 20.1268 12.6127ZM7.87215 12.6127C7.87215 12.3562 7.77024 12.1102 7.58886 11.9288C7.40747 11.7474 7.16146 11.6455 6.90495 11.6455C4.92895 11.6455 3.21295 12.7167 2.02561 14.2992C0.838279 15.8835 0.132812 18.0259 0.132812 20.3538C0.132812 20.8876 0.566145 21.321 1.10001 21.321H4.97055C5.22729 21.321 5.47352 21.219 5.65507 21.0374C5.83662 20.8559 5.93861 20.6097 5.93861 20.3529C5.93861 20.0962 5.83662 19.8499 5.65507 19.6684C5.47352 19.4868 5.22729 19.3848 4.97055 19.3848H2.11748C2.27695 17.8352 2.81601 16.4728 3.57348 15.4606C4.48695 14.2438 5.67428 13.5816 6.90495 13.5816C7.43881 13.5816 7.87215 13.1466 7.87215 12.6127Z"
                                        fill="#0072EF" />
                                </svg>
                            </div>
                            <h4 class="man-title-24px mb-12px">Online Community</h4>
                            <p class="info2">Create engaging and helpful course material with our curriculum development tools. To ensure thorough and worthwhile learning experiences, design courses that are individually customized.</p>
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
                                        Can I use GrowUp LMS LMS at no cost?
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
