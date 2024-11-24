@extends('global.index')
@section('content')

<!-- Start Terms & Condition Content -->
<section class="pt-80 pb-110">
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-lg-8 offset-lg-2">
                <div class="career-details">
                    <div class="c_header">
                        <h1 class="fz-24-sb-34-black pb-20">
                            {{ get_phrase('General and Contact Information') }} 
                        </h1>
                        <p class="info">
                            {{ get_phrase('Effective date: 1 January 2021') }}
                        </p>
                    </div>
                    <div class="c_body">
                        <!-- Changes and Closure of the Website -->
                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Changes and Closure of the Website') }} 
                            </h2>
                            <ol class="cd_list">
                                <li>
                                    {{ get_phrase('This job is more about designing and less about
                                    implementation. Really good at design tools of choice') }}
                                    ({{ get_phrase('Sketch, Figma, Adobe Photoshop, etc.') }}) {{ get_phrase('with perhaps only
                                    light HTML and CSS skills.
                                </li>') }}
                                <li>
                                    {{ get_phrase('A UX designer, or “User Experience Designer,” focuses on
                                    studying and researching how people use a site.
                                </li>') }}
                                <li>
                                    {{ get_phrase('Design specialty keeps user needs and the overall purpose
                                    of a design at the top of mind by incorporating
                                    accessibility factors and user psychology into the overall
                                    look and feel of a design.
                                </li>') }}
                                <li>
                                    {{ get_phrase('Then ushering changes for the better through the system
                                    and testing the implementation results.') }}
                                </li>
                                <li>
                                    {{ get_phrase('Collaboration with the project manager and developers at
                                    the design stages') }}
                                </li>
                            </ol>
                        </div>
                        <!-- Intellectual Property -->
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Intellectual Property') }}</h2>
                            <p class="c_text">
                                {{ get_phrase('It doesn’t matter where you went to college or what your GPA
                                was as long as you are smart, passionate ready to work hard,
                                and have fun.
                            </p>') }} 
                        </div>
                        <!-- Authorized Use -->
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Authorized Use') }}</h2>
                            <ul class="cd_list_2">
                                <li>
                                    {{ get_phrase(' Interview with the Engineering Team Lead &amp; Talent Team.
                                </li>') }}
                                <li>{{ get_phrase('Final Interview with the Board of Directors.') }}</li>
                            </ul>
                        </div>
                        <!-- Application Process -->
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('The Application Process') }}</h2>
                            <ol class="cd_list">
                                <li>{{ get_phrase('An Assignment to Complete.') }}</li>
                                <li>
                                    {{ get_phrase('Interview with the Engineering Team Lead &amp; Talent Team.') }}
                                </li>
                                <li>{{ get_phrase('Final Interview with the Board of Directors.') }}</li>
                                <li>{{ get_phrase('A Formal Job Offer.') }}</li>
                            </ol>
                        </div>
                        <!-- Data controller -->
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Data controller') }}</h2>
                            <p class="c_text pb-20">
                                {{ get_phrase('It doesn’t matter where you went to college or what your GPA
                                was as long as you are smart, passionate ready to work hard,
                                and have fun.') }}   
                            </p>
                            <ol class="cd_list">
                                <li>{{ get_phrase('An Assignment to Complete.') }}</li>
                                <li>
                                    {{ get_phrase(' Interview with the Engineering Team Lead Talent Team.') }} 
                                </li>
                                <li>{{ get_phrase('Final Interview with the Board of Directors.') }}</li>
                                <li>{{ get_phrase('A Formal Job Offer.') }}</li>
                            </ol>
                        </div>
                        <!-- Browsing the Website -->
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Browsing the Website') }}</h2>
                            <p class="c_text">
                                {{ get_phrase(' It doesn’t matter where you went to college or what your GPA
                                was as long as you are smart, passionate ready to work hard,
                                and have fun.
                            ') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Terms & Condition Content -->

@endsection