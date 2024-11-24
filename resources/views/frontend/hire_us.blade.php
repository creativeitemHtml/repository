@extends('global.index')
@section('content')

<!-- Start Main Content -->
<section class="position-relative pt-30 mb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center pb-60">
                    <h2 class="fz-34-sb-black pb-15">{{ get_phrase('Get Our Services') }}</h2>
                    <p class="fz-16-m-black-2">{{ get_phrase('From crafting projects from scratch, to tailoring existing systems to meet your vision; every custom enterprise solution is at your fingertip. ') }}</p>
                    <div class="btn-control justify-content-center align-items-center d-flex">
                        <a href="{{ route('services') }}" class="">{{ get_phrase('Ready Plans') }}</a>
                        <a href="{{ route('hire_us') }}" class="active">{{ get_phrase('New Project') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <!-- Link & Hire us -->
            <div class="col-lg-7">
                <!-- Content -->
                <div class="hire-us-content">
                    <h1 class="title">
                        <span>{{ get_phrase('Hire Us') }}</span><br />
                        {{ get_phrase('for your project.') }}
                    </h1>
                    <p class="sub-title">{{ get_phrase('Turn Your Vision Into Reality With Our Custom Projects') }}</p>
                    <p class="info">{{ get_phrase('Our experience is at your service, committed to creating customized projects and designs that effortlessly blend with your vision and needs. So contact us now to get a quotation!.') }}</p>
                    <!-- Hire info -->
                    <ul class="hire-info">
                        <li class="item">
                            <h4>24k+</h4>
                            <p>{{ get_phrase('Client Serve') }}</p>
                        </li>
                        <li class="item">
                            <h4>12+</h4>
                            <p>{{ get_phrase('Years Experience') }}</p>
                        </li>
                        <li class="item">
                            <h4>98%</h4>
                            <p>{{ get_phrase('Customer Satisfaction') }}</p>
                        </li>
                    </ul>
                    <!-- Buttons -->
                    <div class="buttons d-flex align-items-center">
                        <a href="#" class="bookMeeting">{{ get_phrase('Book a meeting') }}</a>
                        <a href="#" class="watchvideo d-flex align-items-center">
                            {{ get_phrase('Watch Video') }}
                            <img src="{{ asset('assets/img/icon/video-play-icon.svg') }}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <!-- Submit project -->
            <div class="col-lg-5">
                <div class="submit-project">
                    <h4 class="title">{{ get_phrase('Submit Your Porject') }}</h4>
                    <!-- Form -->
                    <form id="project-form" action="{{ route('project_submit') }}" class="project-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="project-form-wrap">
                            <div class="pForm-wrap">
                                <input type="text" class="form-control eForm-control" id="title" name="title" placeholder="Your Project Title" aria-label="Your Project Title" required />
                            </div>
                            <div class="pForm-wrap">
                                <textarea class="form-control eForm-control" id="description" name="description" placeholder="About your project" required></textarea>
                            </div>
                            @if(Auth::check())
                            <div class="pForm-wrap">
                                <input type="email" class="form-control eForm-control" id="email" name="email" value="{{ auth()->user()->email }}" disabled />
                            </div>
                            @else
                            <div class="pForm-wrap">
                                <input type="email" class="form-control eForm-control" id="email" name="email" placeholder="Your Email Address" aria-label="Your Email Address" required />
                            </div>
                            @endif
                            <div class="pForm-wrap service-select">
                                <select class="nice-select" id="budget_estimation" name="budget_estimation">
                                    <option value="">{{ get_phrase('Select Budget') }}</option>
                                    <option value="$500 - $1000">$500 - $1000</option>
                                    <option value="$1000 - $3000">$1000 - $3000</option>
                                    <option value="$3000 - $10000">$3000 - $10000</option>
                                    <option value="over $10000">{{ get_phrase('Over') }} $10000</option>
                                </select>
                            </div>
                            <div class="pForm-wrap service-select">
                                <select class="nice-select" id="timeline" name="timeline">
                                    <option value="">{{ get_phrase('Select Timeline') }}</option>
                                    <option value="2 Weeks">2 {{ get_phrase('Weeks') }}</option>
                                    <option value="4 Weeks">4 {{ get_phrase('Weeks') }}</option>
                                    <option value="8 Weeks">8 {{ get_phrase('Weeks') }}</option>
                                    <option value="12 Weeks">12 {{ get_phrase('Weeks') }}</option>
                                    <option value="continuos">{{ get_phrase('continuos development<') }}</option>
                                </select>
                            </div>
                            <div class="pForm-wrap">
                                <input class="form-control eForm-control-file" type="file" name="attachment" id="attachment">
                            </div>
                        </div>
                        <button type="submit" class="project-submit">
                            {{ get_phrase('Submit') }}
                            <img src="{{ asset('assets/img/icon/right-white-arrow.svg') }}" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Content -->

<!-- Start Service -->
<section class="pb-110">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center pb-60">
                    <h2 class="fz-34-sb-black pb-15">{{ get_phrase('Our service') }}</h2>
                    <p class="fz-16-m-black-2">{{ get_phrase('Experience excellence at your fingertips with all of the services we provide') }}</p>
                </div>
            </div>
        </div>
        <!-- Items -->
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('Hotel management system') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('Learning management system') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('E-commerce') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('CRM system') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('ERP system<') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('Healthcare solut') }}ion</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('Property management') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('Inventory management') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('Project manager') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('HRM system') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('Supply chain management') }}</p></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-service-3"><p>{{ get_phrase('Financial management') }}</p></div>
            </div>
        </div>
    </div>
</section>
<!-- End Service -->

 <!-- Start Works -->
 <section class="pb-110">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center pb-60">
                    <h2 class="fz-34-sb-black pb-15">{{ get_phrase('How it works') }}</h2>
                    <p class="fz-16-m-black-2">{{ get_phrase('Pathway to how we bring your projects to life') }}</p>
                </div>
            </div>
        </div>
        <!-- Items -->
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-work-3" style="--bg: #f8f5ff">
                    <div class="title">
                        <h4>01.</h4>
                        <div class="icon"><img src="{{ asset('assets/img/webp/contact-book.webp') }}" alt="" /></div>
                        </div>
                    <div class="content">
                        <h4>{{ get_phrase('Contact') }} &amp; {{ get_phrase('Quotation') }}</h4>
                        <p>{{ get_phrase('Contact and receive a quotation from us with a tailored project estimate.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="hire-work-3" style="--bg: #fff2ea">
                <div class="title">
                    <h4>02.</h4>
                    <div class="icon"><img src="{{ asset('assets/img/webp/time-tracking.webp') }}" alt="" /></div>
                </div>
                <div class="content">
                    <h4>{{ get_phrase('Starting project') }}</h4>
                    <p>{{ get_phrase('We turn your vision into an actionable project plan with our project initiation.') }}</p>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-work-3" style="--bg: #f6ffe9">
                    <div class="title">
                        <h4>03.</h4>
                        <div class="icon"><img src="{{ asset('assets/img/webp/feedback.webp') }}" alt="" /></div>
                    </div>
                    <div class="content">
                        <h4>{{ get_phrase('Follow up') }} &amp; {{ get_phrase('Feedback') }}</h4>
                        <p>{{ get_phrase('During development, we ensure constant communication to make sure your project meets your expectations.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="hire-work-3" style="--bg: #fff9eb">
                    <div class="title">
                        <h4>04.</h4>
                        <div class="icon"><img src="{{ asset('assets/img/webp/delivery-done.webp') }}" alt="" /></div>
                    </div>
                    <div class="content">
                        <h4>{{ get_phrase('Project delivery') }}</h4>
                        <p>{{ get_phrase('We assure on-time delivery of your project with unparalleled brilliance and precision.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Works -->

<!-- Start Technology -->
<section class="hire-section-bg">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center pb-60">
                    <h2 class="fz-34-sb-black pb-15 text-white">{{ get_phrase('Technology we use') }}</h2>
                    <p class="fz-16-m-black-2 text-white">{{ get_phrase('We are harnessing the power of modern technologies to create innovative solutions for your customized projects.') }}</p>
                </div>
            </div>
        </div>
        <!-- Image -->
        <div class="technology-img"><img src="{{ asset('assets/img/webp/technology-img.webp') }}" alt="" /></div>
    </div>
</section>
<!-- End Technology -->

@endsection