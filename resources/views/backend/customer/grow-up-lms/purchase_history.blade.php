<div class="subscription-main-wrap l_col_main">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 mb-4">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>

        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>

    @if ($purchase_histories->count() > 0)
        <div class="row">
            <div class="col-12">
                <div class="table-responsive e-table-container">
                    <table class="table e-table">
                        <thead>
                            <tr>
                                <th scope="col">Package</th>
                                <th scope="col">Purchase Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchase_histories as $history)
                                <tr>
                                    <td>{{ $history->package->title }}</td>
                                    <td>{{ date('d M Y', strtotime($history->created_at)) }}</td>
                                    <td>{{ $history->price ? currency($history->price) : 'Free' }}</td>
                                    <td>
                                        @if (!$history->status)
                                            <span class="processing-badge">Processing</span>
                                        @else
                                            <span class="{{ $history->status == 1 ? 'paid' : 'upgrade' }}-badge">{{ $history->status == 1 ? 'Paid' : 'Upgrade' }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.8333 4.99935C10.8333 4.53911 10.4602 4.16602 10 4.16602C9.53976 4.16602 9.16667 4.53911 9.16667 4.99935V9.65417L8.50592 8.99343C8.18049 8.66799 7.65285 8.66799 7.32741 8.99343C7.00197 9.31886 7.00197 9.8465 7.32741 10.1719L9.41074 12.2553C9.73618 12.5807 10.2638 12.5807 10.5893 12.2553L12.6726 10.1719C12.998 9.8465 12.998 9.31886 12.6726 8.99343C12.3472 8.66799 11.8195 8.66799 11.4941 8.99343L10.8333 9.65417V4.99935Z"
                                                    fill="#595C6D" />
                                                <path
                                                    d="M4.16667 9.99935C4.16667 9.53911 3.79357 9.16602 3.33333 9.16602C2.8731 9.16602 2.5 9.53911 2.5 9.99935V12.4993C2.5 14.3403 3.99238 15.8327 5.83333 15.8327H14.1667C16.0076 15.8327 17.5 14.3403 17.5 12.4993V9.99935C17.5 9.53911 17.1269 9.16602 16.6667 9.16602C16.2064 9.16602 15.8333 9.53911 15.8333 9.99935V12.4993C15.8333 13.4198 15.0871 14.166 14.1667 14.166H5.83333C4.91286 14.166 4.16667 13.4198 4.16667 12.4993V9.99935Z"
                                                    fill="#595C6D" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
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
