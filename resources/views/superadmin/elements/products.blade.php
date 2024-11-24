@php
$pprice_type = ['Free', 'Paid'];
@endphp
<!-- Download items -->
<div class="admin_main_right p-30 bd-r-5">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-20">
        <h2 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h2>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <div class="manage-product-filter-area">
        <h4 class="fz-18-b-black">Filter</h4>
        <form id="filter_form" action="{{ route('superadmin.element_products') }}" method="GET" class="filter-search">
            <div class="manage-product-filters d-flex flex-wrap align-items-center g-12">
                <select name="element_category_id" id="element_category_id" class="product-filter-select product-filter-select-2" onchange="document.getElementById('filter_form').submit();">
                    <option value="">{{ get_phrase('Select Category') }}</option>
                    @foreach($element_categories as $element_category)
                        <option value="{{ $element_category->id  }}" {{ $element_category->id == $element_category_id ? 'selected' : '' }}>
                            {{ $element_category->name }}
                        </option>
                    @endforeach         
                </select>
                <select name="price_type" id="price_type" class="product-filter-select" onchange="document.getElementById('filter_form').submit();">
                    <option value="">{{ get_phrase('Price Type') }}</option>
                    @foreach($pprice_type as $type)
                        <option value="{{ Str::lower($type) }}" {{ Str::lower($type) == $price_type ? 'selected' : '' }}>
                            {{ $type }}
                        </option>
                    @endforeach         
                </select>

                <div class="searchOne">
                    <input type="text" class="form-control eForm-control" id="search" name="search" value="{{ $searched_word }}" onchange="document.getElementById('filter_form').submit()" placeholder="Searching products" />
                    <button class="searchBtn" type="submit">
                        <img src="{{ asset('assets/img/icon/search-white.svg') }}" alt="">
                    </button>
                </div>

                <a href="{{ route('superadmin.product_create') }}" class="add-product-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                    {{ get_phrase('Add products') }}
                </a>
            </div>
        </form>
    </div>
    <!-- Table -->
    <div class="table-responsive" id="filter_product_table">
        <table class="table eTable el-table">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th scope="col">{{ get_phrase('Item') }}</th>
                    <th scope="col"></th>
                    <th scope="col">{{ get_phrase('Date') }}</th>
                    <th scope="col">{{ get_phrase('Price') }}</th>
                    <th scope="col">{{ get_phrase('Option') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($element_products as $element_product)
                <tr>
                    <td>
                        <div class="dl_thumb_img">
                            <img class="img-fluid" src="{{ element_server_url($element_product->product_id, $element_product->product_to_elementCategory->slug).$element_product->thumbnail }}"/>
                        </div>
                    </td>
                    <td>
                        <div class="dl_property_id">
                            <p>{{ $element_product->title }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="dl_property_price">
                            <p>{{ $element_product->created_at->format('d F, Y') }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="dl_property_type">
                            @if($element_product->price_type == 'paid')

                                @php
                                    try {
                                        $prices = json_decode($element_product->price, true);
                                        $isJson = (json_last_error() == JSON_ERROR_NONE);
                                    } catch (\Exception $e) {
                                        $isJson = false;
                                    }
                                @endphp

                                @if ($isJson && is_array($prices))
                                    @foreach($prices as $price)
                                    <p><span>{{ $price['currency'] }}: </span>{{ $price['amount'] }}</p>
                                    @endforeach
                                @else
                                    <p>{{ currency($element_product->price) }}</p>
                                @endif
                            @else
                                <p>{{ get_phrase('Free') }}</p>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="adminTable-action">
                            <div class="btn-group">
                                <button type="button"  class="dropdown-btn dropdown-toggle"  data-bs-toggle="dropdown"  aria-expanded="false">{{ get_phrase('Actions') }}</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('superadmin.product_edit', ['product_id' => $element_product->product_id]) }}">{{ get_phrase('Edit') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.element_product_delete', ['id' => $element_product->id]) }}', 'undefined')">{{ get_phrase('Delete') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Pagination -->
    <div class="adminPanel-pagi pt-40">
        {{ $element_products->appends(request()->all())->links('pagination::bootstrap-4') }}
    </div>
</div>