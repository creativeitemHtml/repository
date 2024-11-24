<div class="subscription-main-wrap l_col_main">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 mb-4">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>


    @if ($current_subscription)
        <div class="row">
            <div class="col-md-4">
                <div class="e-card h-100">
                    <div class="e-card-header">
                        <div class="application">
                            <div class="logo">
                                <img src="" alt="">
                            </div>
                            <h5 class="heading">GrowUp Lms</h5>
                        </div>
                    </div>

                    <div class="e-card-body">
                        <p class="title">
                            <span class="elabel">Company</span> : {{ App\Models\SaasCompany::where('user_id', auth()->user()->id)->value('company_name') }}
                        </p>
                        <p class="title">
                            <span class="elabel">Issue Date</span> : {{ date('d M Y', strtotime($current_subscription->created_at)) }}
                        </p>
                        <p class="title">
                            <span class="elabel">Expiry Date</span> : {{ date('d M Y', strtotime($current_subscription->expiry)) }}
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="e-card">
                    <div class="e-card-header">
                        <div class="subscription d-flex justify-content-between">
                            <div class="subscription-title">
                                <h5 class="heading d-flex align-items-center text-capitalize">
                                    {{ $current_subscription->package->title }}
                                    <span class="interval-tag text-capitalize">{{ $current_subscription->package->interval }}</span>
                                </h5>
                                <p class="title mt-2">{{ $current_subscription->package->subtitle }}</p>
                            </div>
                            <div class="d-flex align-items-end gap-2">
                                <h2 class="subscription-price">{{ $current_subscription->package->price ? currency($current_subscription->package->price) : 'Free' }}</h2>
                            </div>
                        </div>
                    </div>

                    @php
                        $expiry_date = \Carbon\Carbon::parse($current_subscription->expiry);
                        $issue_date = \Carbon\Carbon::parse($current_subscription->created_at);
                        $current_date = \Carbon\Carbon::now();
                        $days_until_expiry = $current_date->diffInDays($expiry_date);
                        $total_expiry_days = $issue_date->diffInDays($expiry_date);
                        $progress = 100 - (100 / $total_expiry_days) * $days_until_expiry;
                        $alert_period = round(($total_expiry_days / 100) * 80);
                        $subscription_used_days = round($total_expiry_days - $days_until_expiry);
                    @endphp

                    <div class="e-card-body">
                        <div class="days-progress">
                            <p class="title days-left">
                                @if (round($days_until_expiry) > 0)
                                    Days Left : {{ round($days_until_expiry) }}
                                @elseif(round($days_until_expiry) <= 0)
                                    Expired {{ -1 * round($days_until_expiry) }} day ago
                                @endif
                            </p>

                            <div class="progress">
                                <div class="progress-bar" id="progress-bar" role="progressbar" data-percentage="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="subscription-status d-flex align-items-center justify-content-between">
                            <div class="ebadge @if (round($days_until_expiry) > 0) success @else danger @endif ">
                                <div class="circle"></div>
                                <span>
                                    {{ round($days_until_expiry) > 0 ? 'Active' : 'Expired' }}
                                </span>
                            </div>

                            @if ($subscription_used_days >= $alert_period)
                                <a href="#" class="renew">Renew
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.83398 14.1667L14.1673 5.83337M14.1673 5.83337H5.83398M14.1673 5.83337V14.1667" stroke="#0A7EFB" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="no-subscription arrow-right mt-60">
            <img src="{{ asset('assets/img/admin-customer/subscription-status.png') }}" alt="">
            <h4 class="title"> Currently You don't have any subscription!</h4>
            <a href="{{ route('lms.pricing') }}">Click to purchase a plan.</a>
        </div>
    @endif
</div>

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.getElementById('progress-bar');
            const percentage = parseInt(progressBar.getAttribute('data-percentage'));

            setTimeout(function() {
                progressBar.style.width = percentage + '%';
                progressBar.setAttribute('aria-valuenow', percentage);

                if (percentage < 60) {
                    progressBar.style.backgroundColor = '#17B26A';
                } else if (percentage >= 60 && percentage < 90) {
                    progressBar.style.backgroundColor = 'orange';
                } else {
                    progressBar.style.backgroundColor = '#FF6969';
                }
            }, 100);
        });
    </script>
@endpush
