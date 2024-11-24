<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.ad_edit', ['id' => $ad_details->id]) }}">
	@csrf
    <div class="input-wrap mt-2">
        <label for="title" class="eForm-label">{{ get_phrase('Title') }}</label>
        <input type="text" class="form-control eForm-control" name="title" id="title" placeholder="{{ get_phrase('Ad title') }}" value="{{ $ad_details->title }}" required>
    </div>

    <div class="input-wrap mt-2">
        <label for="product_id" class="eForm-label">{{ get_phrase('Products') }}</label>
        <select class="form-select eForm-select eChoice-multiple-without-remove" name="product_id" id="product_id">
            @foreach ($products as $key => $product)
                <option value="{{ $product->id }}" @php if($product->id == $ad_details->product_id) echo 'selected' @endphp>{{ get_phrase($product->name) }}</option>
            @endforeach
        </select>
    </div>

    <div class="input-wrap mt-2">
        <label for="ad_dimension_id" class="eForm-label">{{ get_phrase('Ad dimension') }}</label>
        <select class="form-select eForm-select eChoice-multiple-without-remove" name="ad_dimension_id" id="ad_dimension_id">
            @foreach ($ad_dimensions as $key => $ad_dimension)
                <option value="{{ $ad_dimension->id }}" @php if($ad_dimension->id == $ad_details->ad_dimension_id) echo 'selected' @endphp>{{ get_phrase($ad_dimension->dimension) }}</option>
            @endforeach
        </select>
    </div>

    <div class="input-wrap mt-2">
        <label for="link_to_click" class="eForm-label">{{ get_phrase('Link to click') }}</label>
        <input type="text" class="form-control eForm-control" name="link_to_click" id="link_to_click" placeholder="{{ get_phrase('Ad link') }}" value="{{ $ad_details->link_to_click }}" required>
    </div>

    <div class="input-wrap mt-2">
        <label for="link_to_click" class="eForm-label">{{ get_phrase('Ad type') }}</label>
        <div class="ciRadio-wrap">
            <div class="form-check">
                <input class="form-check-input ciRadio ciRadio-OutlinePrimary" type="radio" name="ad_type" id="ad_type" value="text" @php if($ad_details->ad_type == 'text') echo 'checked'; @endphp />
                <label class="form-check-label" for="flexRadioPrimaryOutline">{{ get_phrase('Only Text') }}</label>
            </div>
            <div class="form-check">
                <input class="form-check-input ciRadio ciRadio-OutlinePrimary" type="radio" name="ad_type" id="ad_type" value="image" @php if($ad_details->ad_type == 'image') echo 'checked'; @endphp/>
                <label class="form-check-label" for="flexRadioPrimaryOutline">{{ get_phrase('Only Image') }}</label>
            </div>
        </div>
    </div>

    <div class="input-wrap mt-2">
        <label for="ad_image" class="eForm-label">{{ get_phrase('Ad image') }}</label>
        <div class="input-group">
            <input class="form-control eForm-control-file" id="ad_image" name="ad_image" onchange="changeTitleOfImageUploader(this)" accept="image/*" type="file" />
        </div>
    </div>

    <div class="input-wrap mt-2">
        <label for="short_description" class="eForm-label">{{ get_phrase('Short description') }}</label>
        <div class="input-group">
            <textarea class="form-control eForm-control" name="short_description" id="short_description" rows="4" spellcheck="false">{{ $ad_details->short_description }}</textarea>
        </div>
    </div>

    <div class="text-center float-end mt-4">
        <button type="submit" class="btn btn-primary" name="button">{{ get_phrase('Submit') }}</button>
    </div>
</form>