<div class="subscription-main-wrap l_col_main">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30 mb-20">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="{{ route('elements') }}" class="new-goelement-btn">
            Go to Elements
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
        </a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>

    @if($downloads->count() > 0)
    <!-- Table -->
    <div class="table-responsive">
        <table class="table eTable el-table">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col"></th>
                    <th scope="col">Date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($downloads as $download)
                <tr>
                    <td>
                        <div class="dl_thumb_img">
                            <img class="img-fluid" src="{{ element_server_url($download->elementDownload_to_elementProduct->product_id, $download->elementDownload_to_elementProduct->product_to_elementCategory->slug).$download->elementDownload_to_elementProduct->thumbnail }}" />
                        </div>
                    </td>
                    <td>
                        <div class="dl_property_id">
                            <p>{{ $download->elementDownload_to_elementProduct->title }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="dl_property_price">
                            <p>{{ date('d M, Y', $download->timestamp) }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="dl_property_type">
                            <p>{{ currency($download->elementDownload_to_elementProduct->price) }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <a href="{{ route('element_product_details', ['title' => slugify($download->elementDownload_to_elementProduct->title.'-'.$download->elementDownload_to_elementProduct->id)]) }}"  target="_blank" class="t-btn-one ms-auto">{{ get_phrase('View') }}</a>
                        </div>
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
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
        </a>
    </div>
    @endif

    <!-- Pagination -->
    <div class="web-ui-pagination pt-40">
        {{ $downloads->links('pagination::bootstrap-4') }}
    </div>

</div>