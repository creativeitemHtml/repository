<div class="admin_main_right p-30 bd-r-5 mb-60">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
		<button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
			<img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
		</button>
    </div>
    <!-- Form -->
    <form id="element_product_form" action="{{ route('superadmin.upload_product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="nproject-form-wrap">
            <!-- Product Id -->
            <div class="row justify-content-between align-items-center">
                <label for="product_id" class="col-sm-2 enForm-label">{{ get_phrase('Product Id') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="product_id" name="product_id" placeholder="Type unique id" aria-label="Type unique id" required />
                </div>
            </div>
            <!-- Title -->
            <div class="row justify-content-between align-items-center">
                <label for="title" class="col-sm-2 enForm-label">{{ get_phrase('Title') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="title" name="title" placeholder="Type keyword" aria-label="Type keyword" required />
                </div>
            </div>
            <!-- Summary -->
            <div class="row justify-content-between align-items-center">
                <label for="summary" class="col-sm-2 enForm-label">{{ get_phrase('Summary') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="summary" name="summary" placeholder="Type Summary" aria-label="Type keyword" required />
                </div>
            </div>
            <!-- Description -->
            <div class="row justify-content-between align-items-start">
                <label for="description" class="col-sm-2 enForm-label">{{ get_phrase('Description') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <textarea id="mytextarea" name="description" placeholder="Type description"></textarea>
                </div>
            </div>
            <!-- File Type -->
            <div class="row justify-content-between align-items-center">
                <label for="fileType" class="col-sm-2 enForm-label">{{ get_phrase('File Type') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <select id="file_types[]" name="file_types[]" class="enForm-select enForm-nice-select" data-placeholder="Type to search..." multiple>
                        <option value="Select">{{ get_phrase('Select') }}</option>
                        @foreach($file_types as $file_type)
                            <option value="{{ $file_type->name }}">{{ $file_type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <label for="product_file" class="col-sm-2 enForm-label">{{ get_phrase('File name') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="product_file" name="product_file" placeholder="Type file name" aria-label="Type keyword" required />
                </div>
            </div>
            <!-- File Size -->
            <div class="row justify-content-between align-items-center">
                <label for="title" class="col-sm-2 enForm-label">{{ get_phrase('File Size') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="file_size" name="file_size" placeholder="Ex: 1.12 GB" aria-label="Type keyword" />
                </div>
            </div>
            <!-- Categories -->
            <div class="row justify-content-between align-items-center">
                <label for="categories" class="col-sm-2 enForm-label">{{ get_phrase('Categories') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <select id="element_category_id" name="element_category_id" class="enForm-select enForm-nice-select" data-placeholder="Type to search..." require onchange="categoryWiseSubCategory(this.value)">
                        <option value="Select">{{get_phrase('Select')}}</option>
                        @foreach($element_categories as $element_category)
                            <option value="{{ $element_category->id }}">{{ $element_category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Preview Url --}}
            <div class="row justify-content-between align-items-center d-none" id="previewUrlbody">
                <label for="previewUrl" class="col-sm-2 enForm-label">{{ get_phrase('Preview Url') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="previewUrl" name="previewUrl" placeholder="Preview Url" aria-label="" required />
                </div>
            </div>

            <!-- Sub Categories -->
            <div class="row justify-content-between align-items-center">
                <label for="sub_categories" class="col-sm-2 enForm-label">{{ get_phrase('Sub Categories') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <select id="sub_category_id" name="sub_category_id" class="enForm-select enForm-nice-select" data-placeholder="Type to search...">
                        <option value="">{{ get_phrase('Select sub category') }}</option>
                        
                    </select>
                </div>
            </div>
            <!-- Tags -->
            <div id="tagsDiv" class="row justify-content-between align-items-center" style="display: none;">
                <label for="tags" class="col-sm-2 enForm-label">{{ get_phrase('Tags') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <select class="form-select enForm-select eChoice-multiple-with-remove" data-placeholder="Select" multiple="multiple" id="tags[]" name="tags[]">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Thumbnail -->
            <div class="row justify-content-between align-items-center">
                <label for="thumbnail" class="col-sm-2 enForm-label">{{ get_phrase('Thumbnail name') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="thumbnail" name="thumbnail" placeholder="Type thumbnail name" aria-label="Type keyword" required />
                </div>
            </div>
            <!-- Image -->
            <div class="row justify-content-between align-items-center">
                <label for="preview_thumbnails" class="col-sm-2 enForm-label">{{ get_phrase('Preview Images') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control tag" id="preview_thumbnails" name="preview_thumbnails" data-role="tagsinput"  placeholder="Press 'Enter' key after every image name" required />
                </div>
            </div>
            <!-- Video -->
            <div class="row justify-content-between align-items-center">
                <label for="preview_video" class="col-sm-2 enForm-label">{{ get_phrase('Preview video') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="preview_video" name="preview_video" placeholder="Type video name" aria-label="Type keyword" required />
                </div>
            </div>
            <!-- 3d file -->
            <div class="row justify-content-between align-items-center">
                <label for="file_3d" class="col-sm-2 enForm-label">{{ get_phrase('3D file') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control enForm-control" id="file_3d" name="file_3d" placeholder="Type 3d file name" aria-label="Type keyword" required />
                </div>
            </div>
            <!-- Price -->
            <div class="row justify-content-between align-items-start">
                <label for="price" class="col-sm-2 enForm-label">{{ get_phrase('Price') }}</label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <ul class="productPriceOption">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ciRadio ciRadio-OutlinePrimary" type="radio" id="price_type_free" name="price_type" value="free" />
                                <label class="form-check-label" for="price_type_free">{{ get_phrase('Free') }}</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input ciRadio ciRadio-OutlinePrimary" type="radio" id="price_type_paid" name="price_type" value="paid" />
                                <label class="form-check-label" for="price_type_paid">{{ get_phrase('Paid') }}</label>
                                <div class="price-fields" id="price_fields" style="display: none;">
                                    <?php foreach ($currencies as $currency): ?>
                                        <div class="col-sm-10 col-md-9 col-lg-10">
                                            <label for="{{ $currency->code }}" class="col-sm-2 enForm-label">{{ get_phrase($currency->code) }}</label>
                                            <input type="text" class="form-control enForm-control" id="{{ $currency->code }}" name="prices[{{ $currency->code }}]" placeholder="{{ '$00' }}" aria-label="{{ '$00' }}" min="0" />
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Button -->
        <div class="dl_form_btn d-flex justify-content-end g-20 pt-30">
            <a href="javascript:;" class="up-cancel-btn" onclick="check()">{{ get_phrase('Cancel') }}</a>
            <a href="javascript:;" class="up-uploadFile-btn" onclick="document.getElementById('element_product_form').submit()">{{ get_phrase('Upload file') }}</a>
        </div>
    </form>
</div>

<script type="text/javascript">

    "use strict";

    // $(".up-uploadFile-btn").click(function () {
    //     $(this).replaceWith("<img src='{{ asset("assets/img/loading.gif") }}'>");
    // });

    $(document).ready(function () {
        $('#description').summernote({
            height: 330,
        });
    });


    function categoryWiseSubCategory(parent_id) {
        let url = "{{ route('superadmin.category_wise_sub_category', ['parent_id' => ":parent_id"]) }}";
        url = url.replace(":parent_id", parent_id);
        $.ajax({
            url: url,
            success: function(response){
                $('#sub_category_id').html(response);

                // Show/hide the Tags div based on the selected category ID
                if (parent_id === "2") {
                    $('#tagsDiv').show();
                } else {
                    $('#tagsDiv').hide();
                }
            }
        });
    }

    $('#element_category_id').on('change', function preview_url() {
        var test = $('#element_category_id').val()
        if (test == 9) {
           $('#previewUrlbody').removeClass('d-none') 
        }else{
            $('#previewUrlbody').addClass('d-none')
        }
    })

    document.addEventListener('DOMContentLoaded', function() {
        function togglePriceFields() {
            const priceFields = document.getElementById('price_fields');
            const paidOption = document.getElementById('price_type_paid');

            if (paidOption && paidOption.checked) {
                priceFields.style.display = 'block';
            } else {
                priceFields.style.display = 'none';
            }
        }

        // Attach event listeners
        const freeOption = document.getElementById('price_type_free');
        const paidOption = document.getElementById('price_type_paid');

        if (freeOption) {
            freeOption.addEventListener('change', togglePriceFields);
        }
        if (paidOption) {
            paidOption.addEventListener('change', togglePriceFields);
        }

        // Initial check
        togglePriceFields();
    });

    

</script>