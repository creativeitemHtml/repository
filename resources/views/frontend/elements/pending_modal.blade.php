<div class="text-center mb-32px">
    <img src="{{ asset('assets/img/icon/check-pending.svg') }}" alt="icon">
</div>
<h3 class="man-title-16px lh-normal fw-bold text-break text-center mb-3">#{{ get_phrase('Order Number') }}: {{ $purchase_details->id }}</h3>
<div class="d-flex align-items-center gap-2 mb-32px justify-content-center flex-wrap">
    <h3 class="man-title-16px lh-normal fw-bold">{{ get_phrase('Order Status') }}:</h3>
    <p class="cin1-badge-pending-light">{{ get_phrase('Pending') }}</p>
</div>
<a href="{{ route('home') }}" class="btn btn-primary-ci1 max-w-320px w-100 mx-auto d-block mb-4">{{ get_phrase('Back to Home') }}</a>