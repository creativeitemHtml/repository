@php
    $today = strtotime('now');
@endphp
<div class="subscription-main-wrap l_col_main">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30 mb-20">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="{{ route('elements') }}" class="new-goelement-btn">
            {{ get_phrase('Go to Elements') }}
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
            </svg>
        </a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <div class="row rg-40">
        @if (isset($current_subscription) && ($current_subscription->subscription_to_package->interval == 'lifetime' || $current_subscription->expire_date > $today))
            <div class="col-md-6">
                <div class="project-item-2">
                    <div class="project-item-2-title">
                        <h3 class="title">{{ get_phrase('Subscription Status') }}</h3>
                    </div>
                    <div class="py-20 text-center">
                        <img src="{{ asset('assets/img/admin-customer/subscription-status-2.png') }}" alt="" />
                    </div>
                    <!-- List -->
                    <div class="el-sp-table sStatus-table mx-20 pb-28">
                        <table class="table eTable">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="el_table_title">
                                            <img src="{{ asset('assets/img/icon/pulse.svg') }}" alt="" />
                                            <p>{{ get_phrase('Current subscription status') }}:</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="el_table_info">
                                            @if ($current_subscription->status == 'approved')
                                                <p class="status-btn status-up">{{ get_phrase('Active') }}</p>
                                            @else
                                                <p class="status-btn status-down">{{ get_phrase('Pending') }}</p>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="el_table_title">
                                            <img src="{{ asset('assets/img/icon/pulse.svg') }}" alt="" />
                                            <p>{{ get_phrase('Package Name') }}:</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="el_table_info">
                                            <p>{{ $current_subscription->subscription_to_package->name }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    @if ($current_subscription->subscription_to_package->interval != 'lifetime')
                                        <td>
                                            <div class="el_table_title">
                                                <img src="{{ asset('assets/img/icon/calendar-minus.svg') }}" alt="" />
                                                <p>{{ get_phrase('Next payment date') }}:</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="el_table_info">
                                                <p>{{ date('d M Y', $current_subscription->expire_date) }}</p>
                                            </div>
                                        </td>
                                    @else
                                        <td>
                                            <div class="el_table_title">
                                                <img src="{{ asset('assets/img/icon/calendar-minus.svg') }}" alt="" />
                                                <p>{{ get_phrase('Package Status') }}:</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="el_table_info">
                                                <p>{{ get_phrase('Lifetime') }}</p>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>
                                        <div class="el_table_title">
                                            <img :src="{{ asset('assets/img/icon/credit-card-2.svg') }}" alt="" />
                                            <p>{{ get_phrase('Payment amount') }}:</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="el_table_info">
                                            <p>{{ currency($current_subscription->paid_amount) }}</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @if ($current_subscription->subscription_to_package->interval != 'lifetime')
                        @if ($current_subscription->auto_subscription == 1)
                            <a class="cancel-subscription m-auto" href="javascript:;" onclick="confirmModal('{{ route('customer.stripe.subscription_cancel') }}', 'undefined')">{{ get_phrase('Cancel Subscription') }}</a>
                        @else
                            <div class="sbbtn">
                                <a href="javascript:;" class="cancel-subscription m-auto">{{ get_phrase('Subscription Cancelled') }}</a>
                                <a class="cancel-subscription m-auto" href="javascript:;" onclick="confirmModal('{{ route('customer.stripe.subscription_again') }}', 'undefined')">{{ get_phrase('Subscribe Again') }}</a>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        @else
            <!-- Subscription Status -->
            <div class="col-md-6">
                <div class="project-item-2">
                    <!-- Title -->
                    <div class="project-item-2-title">
                        <h3 class="title">{{ get_phrase('Subscription Status') }}</h3>
                    </div>
                    <!-- Content -->
                    <div class="no-subscription">
                        <img src="{{ asset('assets/img/admin-customer/subscription-status.png') }}" alt="" />
                        <h4 class="title">
                            <img src="{{ asset('assets/img/icon/warning.svg') }}" alt="" />
                            {{ get_phrase('Expired / No Subscription') }}
                        </h4>
                        <a href="{{ route('elements_package_pricing') }}">{{ get_phrase('Subscribe Now') }}</a>
                    </div>
                </div>
            </div>
        @endif
        @if ($subscriptions->count() > 0)
            <!-- Billing History -->
            <div class="col-md-6">
                <div class="project-item-2">
                    <!-- Title -->
                    <div class="project-item-2-title">
                        <h3 class="title">{{ get_phrase('Billing History') }}</h3>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table eTable eTable-project">
                            <thead>
                                <tr>
                                    <th>{{ get_phrase('Date') }}</th>
                                    <th>{{ get_phrase('Amount') }}</th>
                                    <th>{{ get_phrase('Invoice') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscriptions as $subscription)
                                    <tr>
                                        <td>
                                            <div class="project-date-min">
                                                <p class="fz-15-sb-black">{{ date('d F, Y', $subscription->date_added) }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="min-w">
                                                <p class="fz-15-sb-black">{{ currency($subscription->paid_amount) }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="min-w">
                                                <a href="#" class="payfile-download">
                                                    <img src="{{ asset('assets/img/icon/download.svg') }}" alt="" />
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
