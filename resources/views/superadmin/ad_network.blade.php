<!-- Download items -->
<div class="l_col_main">
    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center flex-wrap pb-30 g-10">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
    </div>
    <div class="d-flex justify-content-between align-items-center flex-wrap pb-20 mb-16 bd-b-1">
        <div class="mp-title d-flex align-items-center flex-wrap cg-50 rg-10">
            <h4 class="fz-18-b-black">{{ get_phrase('Filter') }}</h4>
            <div class="mp-title-filter d-flex flex-wrap g-15">
                <!-- Price -->
                <div class="btn-group">
                    <select class="form-select eForm-select eChoice-multiple-without-remove" name="product_id" id="product_id">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="btn-group">
                    <select class="form-select eForm-select eChoice-multiple-without-remove" name="ad_dimension_id" id="ad_dimension_id">
                        @foreach ($ad_dimensions as $ad_dimension)
                            <option value="{{ $ad_dimension->id }}">{{ $ad_dimension->dimension }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="javascript:;" class="btn-main edit-project-btn" onclick="largeModal('{{ route('superadmin.ad_create') }}', '{{ get_phrase("Create new Ad") }}')"><i class="fa-solid fa-add"></i> {{ get_phrase('Add new article') }}</a>
            </div>
        </div>
    </div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table eTable el-table">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th scope="col">{{ get_phrase('Product') }}</th>
                    <th scope="col">{{ get_phrase('Title') }}</th>
                    <th scope="col">{{ get_phrase('Preview') }}</th>
                    <th scope="col">{{ get_phrase('Option') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ads as $ad)
                <tr>
                    <td>
                        <div class="dl_property_type">
                            <p>{{ $ad->ad_to_product->name }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="dl_property_id">
                            <p>{!! $ad->title !!}</p>
                        </div>
                    </td>
                    <td>
                        <div class="dl_thumb_img">
                            <img class="img-fluid" src="{{ asset('uploads/thumbnails/ad/'.$ad->ad_image) }}"/>
                        </div>
                    </td>
                    <td>
                        <div class="adminTable-action">
                            <div class="btn-group">
                                <button type="button" class="dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{ get_phrase('Actions') }}</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;" onclick="largeModal('{{ route('superadmin.ad_edit', ['id' => $ad->id]) }}', '{{ get_phrase("Update Ad") }}')">{{ get_phrase('Edit') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.ad.delete', ['id' => $ad->id]) }}', 'undefined')">{{ get_phrase('Delete Ad') }}</a>
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
        {{ $ads->links('pagination::bootstrap-4') }}
    </div>
</div>