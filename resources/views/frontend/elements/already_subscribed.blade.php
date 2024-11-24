<div class="project-item-2-title">
    <h3 class="title">{{ get_phrase('Subscription Status') }}</h3>
</div>
<hr>
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
                        @if($current_subscription->status == 'approved')
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
                        <p>{{get_phrase('Package Name')}}:</p>
                    </div>
                </td>
                <td>
                    <div class="el_table_info">
                        <p>{{ $current_subscription->subscription_to_package->name }}</p>
                    </div>
                </td>
            </tr>
            <tr>
                @if($current_subscription->subscription_to_package->interval != 'lifetime')
                <td>
                    <div class="el_table_title">
                    <img
                        src="{{ asset('assets/img/icon/calendar-minus.svg') }}"
                        alt=""
                    />
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
                    <img
                        src="{{ asset('assets/img/icon/calendar-minus.svg') }}"
                        alt=""
                    />
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
                        <img
                            :src="{{ asset('assets/img/icon/credit-card-2.svg') }}"
                            alt=""
                        />
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

<a href="{{ route('home') }}" class="btn btn-primary-ci1 max-w-320px w-100 mx-auto d-block mb-4">{{ get_phrase('Back to Home') }}</a>