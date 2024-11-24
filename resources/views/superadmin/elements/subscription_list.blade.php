<div class="admin_main_right p-30 bd-r-5">
    @if($subscriptions->count() > 0)
    <!-- Title -->
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table eTable">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ get_phrase('User') }}</th>
                    <th scope="col">{{ get_phrase('Package') }}</th>
                    <th scope="col">{{ get_phrase('Payment Method') }}</th>
                    <th scope="col" class="text-center">{{ get_phrase('Date') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subscriptions as $key => $subscription)
                <tr>
                    <td>
                        <div>
                            <p class="fz-15-sb-black">{{ $subscriptions->firstItem() + $key }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="fz-15-m-black">
                                {{ $subscription->subscription_to_user->name }}
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="fz-15-m-black">{{ $subscription->subscription_to_package->name.' ('.currency($subscription->paid_amount).')' }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="status-btn status-up">{{ $subscription->payment_method }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="t-btn-one ms-auto">{{ date('d-m-Y', $subscription->date_added) }}</p>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="no-subscription mt-60">
        <img src="{{ asset('assets/img/subscription-status.png') }}" alt="" />
        <h4 class="title">
        {{ get_phrase('Subscription is empty') }}
        </h4>
    </div>
    @endif
    <!-- Pagination -->
    <div class="adminPanel-pagi pt-30">
        {{ $subscriptions->links('pagination::bootstrap-4') }}
    </div>
</div>