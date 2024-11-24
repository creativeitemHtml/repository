<div class="subscription-main-wrap l_col_main">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30 mb-20">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="{{ route('elements') }}" class="new-goelement-btn">
            Go to Elements
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
            </svg>
        </a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>

    @if ($purchase_histories->count() > 0)
        <div class="table-responsive">
            <table class="table eTable">
                <!-- Table Head -->
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ get_phrase('Product') }}</th>
                        <th scope="col">{{ get_phrase('Payment Method') }}</th>
                        <th scope="col">{{ get_phrase('Paid Amount') }}</th>
                        <th scope="col" class="text-center">{{ get_phrase('Option') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchase_histories as $key => $purchase_history)
                        <tr>
                            <td>
                                <div>
                                    <p class="fz-15-sb-black">{{ $purchase_histories->firstItem() + $key }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="min-w-100">
                                    <p class="fz-15-m-black">
                                        {{ $purchase_history->payment_to_elementProduct->title }}
                                    </p>
                                </div>
                            </td>
                            <td>
                                @if ($purchase_history->status != 'pending')
                                    <div class="min-w-100">
                                        <p class="status-btn status-up">{{ $purchase_history->payment_method }}</p>
                                    </div>
                                @else
                                    <div class="min-w-100">
                                        <p class="status-btn status-pending">{{ $purchase_history->payment_method }}</p>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="min-w-100">
                                    <p class="fz-15-m-black">{{ currency($purchase_history->paid_amount) }}</p>
                                </div>
                            </td>
                            <td>
                                @if ($purchase_history->status != 'pending')
                                    <div class="min-w-100 d-flex ">
                                        <a href="{{ route('customer.purchase_invoice', ['purchase_id' => $purchase_history->id]) }}" class="payfile-download me-3" title="View Invoice">
                                            <img src="{{ asset('assets/img/icon/invoice.svg') }}" alt="" />
                                        </a>
                                        <a href="{{ route('customer.download_link_generate', ['product_id' => $purchase_history->element_product_id]) }}" class="payfile-download" title="Download">
                                            <img src="{{ asset('assets/img/icon/download.svg') }}" alt="" />
                                        </a>
                                    </div>
                                @else
                                    <div class="min-w-100">
                                        <p class="status-btn status-pending">{{ get_phrase('Pending') }}</p>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="no-subscription arrow-right mt-60">
            <img src="{{ asset('assets/img/admin-customer/subscription-status.png') }}" alt="" />
            <h4 class="title"> {{ get_phrase('Purchase a new item!') }}</h4>
            <a href="{{ route('elements') }}" class="new-goelement-btn">
                {{ get_phrase('Browse elements file') }}
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                </svg>
            </a>
        </div>
    @endif

    <!-- Pagination -->
    <div class="web-ui-pagination pt-40">
        {{ $purchase_histories->links('pagination::bootstrap-4') }}
    </div>

</div>
