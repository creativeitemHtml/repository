<div class="admin_main_right p-30 bd-r-5">
    <!-- Title -->
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="javascript:;" class="new-project-btn new-project-btn-desktop" onclick="largeModal('{{ route('superadmin.service_package_create') }}', '{{ get_phrase('Create new service') }}')">{{ get_phrase('Create new service') }}</a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <div class="el-products-tab-wrap">
        <ul class="nav nav-pills pb-20" id="pills-tab" role="tablist">
            @foreach($products as $product)
            @php $service_details = App\Models\ServicePackage::where('product_id', $product->id)->get(); @endphp
            <li class="nav-item" role="presentation">
                <button class="nav-link @if($tab == $product->slug) active @endif" id="pills-{{ $product->slug }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $product->slug }}" type="button" role="tab" aria-controls="pills-{{ $product->slug }}" aria-selected="{{ $tab == $product->slug ? true : false }}">{{ $product->name }} ({{ count($service_details) }})</button>
            </li>
            @endforeach
        </ul>
        <div class="tab-content" id="pills-tabContent">
            @foreach($products as $product)
            @php $service_details = App\Models\ServicePackage::where('product_id', $product->id)->get(); @endphp
            <div class="tab-pane fade @if($tab == $product->slug) show active @endif" id="pills-{{ $product->slug }}" role="tabpanel" aria-labelledby="pills-{{ $product->slug }}-tab">
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table eTable">
                        <!-- Table Head -->
                        <thead>
                            <tr>
                                <th scope="col">{{ get_phrase('Title') }}</th>
                                <th scope="col">{{ get_phrase('Price') }}</th>
                                <th scope="col">{{ get_phrase('Dis-price') }}</th>
                                <th scope="col">{{ get_phrase('Visibility') }}</th>
                                <th scope="col">{{ get_phrase('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($service_details as $service)
                            <tr>
                                <td>
                                    <div class="min-w-100">
                                        <p class="fz-15-sb-black">{{ $service->name }}</p>
                                    </div>
                                </td>
                                <td>
                                    {{ currency((double)$service->price) }}
                                </td>
                                <td>
                                    {{ currency((double)$service->discounted_price) }}
                                </td>
                                <td>
                                    @if($service->visibility != '1'):
                                        <span class="status-btn status-down">{{ get_phrase('Archive') }}</span>
                                    @else
                                        <span class="status-btn status-up">{{ get_phrase('Active') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="adminTable-action">
                                        <div class="btn-group">
                                            <button type="button" class="dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{ get_phrase('Actions') }}</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:;" onclick="largeModal('{{ route('superadmin.service_package_update', ['id' => $service->id]) }}', '{{ get_phrase("Update pacakge") }}')">{{ get_phrase('Edit') }}</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.service_package_remove', ['id' => $service->id]) }}', 'undefined')">{{ get_phrase('Delete') }}</a>
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
                <div class="adminPanel-pagi pt-30">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination epagination d-flex flex-wrap g-12">
                            <li class="page-item">
                                <a class="page-link prev" href="#" aria-label="Previous">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                                    <span>Prev</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link active" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link next" href="#" aria-label="Next">
                                    <span>Next</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>