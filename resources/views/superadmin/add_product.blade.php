<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.create_product') }}">
	@csrf
    <div class="fpb-7 pt-2">
        <label for="name">{{ get_phrase('Product title') }}</label>
        <input type="text" class="form-control eForm-control" name="name" id="name" placeholder="{{ get_phrase('Product name') }}" required>
    </div>
    <div class="fpb-7 pt-2">
        <label for="sub_title">{{ get_phrase('Product subtitle') }}</label>
        <input type="text" class="form-control eForm-control" name="sub_title" id="sub_title" placeholder="{{ get_phrase('Product subtitle') }}" required>
    </div>
    <div class="fpb-7 pt-2">
        <label for="excerpt">{{ get_phrase('Product excerpt') }}</label>
        <input type="text" class="form-control eForm-control" name="excerpt" id="excerpt" placeholder="{{ get_phrase('Product excerpt') }}" required>
    </div>
    <div class="fpb-7 pt-2">
        <label for="price">{{ get_phrase('Product price') }}</label>
        <input type="number" class="form-control eForm-control" name="price" id="price" min="0" placeholder="{{ get_phrase('Product price') }}" required>
    </div>
    <div class="fpb-7 pt-2">
        <label for="purchase_url">{{ get_phrase('Purchase url') }}</label>
        <input type="text" class="form-control eForm-control" name="purchase_url" id="purchase_url" placeholder="{{ get_phrase('Purchase url') }}" required>
    </div>
    <div class="fpb-7 pt-2">
        <label for="type">{{ get_phrase('Product visibility') }}</label>
        <select class="form-select eForm-select eChoice-multiple-without-remove" name="visibility" id="visibility">
            <option value="1">{{ get_phrase('Show') }}</option>
            <option value="0">{{ get_phrase('Hidden') }}</option>
        </select>
    </div>
    <div class="fpb-7 pt-2">
        <label for="type">{{ get_phrase('Product type') }}</label>
        <select class="form-select eForm-select eChoice-multiple-without-remove" name="type" id="type">
            @foreach ($product_types as $key => $product_type)
                <option value="{{ $product_type->id }}">{{ get_phrase($product_type->name) }}</option>
            @endforeach
        </select>
    </div>

    <div class="fpb-7 pt-2">
        <label>{{ get_phrase('Product thumbnail') }}</label>
        <div class="input-group">
            <input class="form-control eForm-control-file" id="product-thumbnail" name="thumbnail" onchange="changeTitleOfImageUploader(this)" accept="image/*" type="file" />
        </div>
    </div>

    <div class="fpb-7 pt-2">
        <label>{{ get_phrase('Favicon') }}</label>
        <div class="input-group">
            <input class="form-control eForm-control-file" id="product-favicon" name="favicon" onchange="changeTitleOfImageUploader(this)" accept="image/*" type="file" />
        </div>
    </div>

    <div class="fpb-7 pt-2">
        <label for="sub_title">{{ get_phrase('Product card color') }}</label>
        <input type="color" class="form-control" name="color_code" id="color_code" placeholder="{{ get_phrase('Product card color') }}" required>
    </div>

    <div class="text-center mt-2">
        <button type="submit" class="btn-main new-project-btn float-end" name="button">{{ get_phrase('Submit') }}</button>
    </div>
</form>