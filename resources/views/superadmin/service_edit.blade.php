<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.service_update', ['id' => $service_details->id]) }}">
	@csrf

    <div class="pForm-wrap mt-2">
        <label for="product_id" class="enForm-label">{{ get_phrase('Select a product') }}</label>
        <select
            class="enForm-select enForm-nice-select"
            id="product_id"
            name="product_id"
        >
            <option value="">{{ get_phrase('Select a product') }}</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}" @php if($service_details->product_id == $product->id) echo 'selected' @endphp>{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="pForm-wrap mt-2">
        <label for="name" class="enForm-label">{{ get_phrase('Name') }}</label>
        <input type="text" class="form-control enForm-control" name="name" id="name" value="{{ $service_details->name }}" placeholder="Provide service name" required>
    </div>

    <div class="pForm-wrap mt-2">
        <label for="price" class="enForm-label">{{ get_phrase('Package price') }}</label>
        <input type="number" class="form-control enForm-control" id="price" name="price" value="{{ $service_details->price }}" placeholder="Provide service price" required>
    </div>

    <div class="pForm-wrap mt-2">
        <label for="note" class="enForm-label">{{ get_phrase('Note') }}</label>
        <input type="text" class="form-control enForm-control" name="note" id="note" value="{{ $service_details->note }}" placeholder="Provide service note" required>
    </div>


    <div class="text-center float-end mt-4">
        <button type="submit" class="btn btn-primary" name="button">{{ get_phrase('Submit') }}</button>
    </div>
</form>

