@if(Auth::check())
    @php
        $company = App\Models\SaasCompany::where('user_id', auth()->user()->id)
                ->where('saas_id', 1)
                ->first();
    @endphp
@endif
<div class="ci1-card-body p-30px">
    <div class="text-center mb-3">
        <img src="{{ asset('assets/img/icon/verified-120.svg') }}" alt="icon">
    </div>
    <h3 class="man-title-26px mb-3 text-center">{{ get_phrase('Success') }}</h3>
    <p class="man-subtitle-16px ci-text-dark lh-normal text-center px-lg-4 mb-4">{{ get_phrase('Company Create Successfully!') }}</p>
    <a href="https://lms.creativeitem.com/{{ $company->company_slug }}" target="_blank" class="btn btn-primary-ci1 py-14px text-center w-100">{{ get_phrase('Go To Your LMS Site') }}</a>
</div>