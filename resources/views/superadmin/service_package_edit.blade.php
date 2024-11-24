<style>
.input-row {
    display: flex;
    align-items: center;
    gap: 10px;
}

.add-field {
    cursor: pointer;
    height: 50px;
    width: 100px;
    border-radius: 5px;
    font-size: 20px;
    background: #0d6efd;
    border-color: #0d6efd;
    color: #fff !important;
    border: none;
}

.remove-field {
    cursor: pointer;
    height: 50px;
    width: 100px;
    border-radius: 5px;
    font-size: 20px;
    background: #ee406b;
    border-color: #ee406b;
    color: #fff !important;
    border: none;
}
</style>


<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.service_package_update', ['id' => $service_details->id]) }}">
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
        <input type="text" class="form-control enForm-control" name="name" id="name" value="{{ $service_details->name }}" placeholder="Provide package name" required>
    </div>

    <div class="pForm-wrap mt-2">
        <label for="price" class="enForm-label">{{ get_phrase('Package price') }}</label>
        <input type="number" class="form-control enForm-control" id="price" name="price" value="{{ $service_details->price }}" placeholder="Provide package price" required>
    </div>

    <div class="pForm-wrap mt-2">
        <label for="discounted_price" class="enForm-label">{{ get_phrase('Discounted price') }}</label>
        <input type="number" class="form-control enForm-control" id="discounted_price" name="discounted_price" value="{{ $service_details->discounted_price }}" placeholder="Provide package discounted price">
    </div>

    <div class="pForm-wrap mt-2">
        <label for="visibility" class="enForm-label">{{ get_phrase('Visibility') }}</label>
        <select name="visibility" id="visibility" class="enForm-select enForm-nice-select">
            <option value="1" @php if($service_details->visibility == '1') echo 'selected' @endphp>{{ get_phrase('Yes') }}</option>
            <option value="0" @php if($service_details->visibility == '0') echo 'selected' @endphp>{{ get_phrase('No') }}</option>
        </select>
    </div>

    <div class="pForm-wrap mt-2" id="featureList">
        <label class="enForm-label">{{ get_phrase('Feature Fields') }}</label>
        <div class="input-row mt-3">
            <input type="text" name="features[]" class="form-control enForm-control" placeholder="Feature Value">
            <input type="text" name="notes[]" class="form-control enForm-control" placeholder="Notes">
            <button type="button" class="add-field">+</button>
        </div>
        <div class="feature-list">
            @foreach ($services as $index => $feature)
                <div class="input-row mt-3">
                    <input type="text" name="features[]" class="form-control enForm-control" value="{{ $feature['feature'] }}">
                    <input type="text" name="notes[]" class="form-control enForm-control" value="{{ $feature['note'] }}">
                    @if ($index+1 > 0) <!-- Allow removing only if there's more than one feature -->
                        <button type="button" class="remove-field">-</button>
                    @endif
                </div>
            @endforeach
            <p id="warningText" class="text-warning"></p>
        </div>
    </div>





    <div class="text-center float-end mt-4">
        <button type="submit" class="btn btn-primary" name="button">{{ get_phrase('Submit') }}</button>
    </div>
</form>

<script>
    $(document).ready(function() {

        $('#featureList').on('click', '.add-field', function() {
            var featureValue = $(this).closest('.input-row').find('input[name="features[]"]').val();
            var notesValue = $(this).closest('.input-row').find('input[name="notes[]"]').val();

            if (featureValue.trim() === '' || notesValue.trim() === '') {
                $('#warningText').text('Please enter values for both Feature and Notes before adding.');
                return;
            }

            $('#warningText').text(''); // Clear the warning text

            var fieldHTML = `
                <div class="input-row mt-3">
                    <input type="text" name="features[]" class="form-control enForm-control" value="${featureValue}">
                    <input type="text" name="notes[]" class="form-control enForm-control" value="${notesValue}">
                    <button type="button" class="remove-field">-</button>
                </div>
            `;
            $('.feature-list').append(fieldHTML);

            // Clear the input fields
            $(this).closest('.input-row').find('input[name="features[]"]').val('');
            $(this).closest('.input-row').find('input[name="notes[]"]').val('');
        });

        $('#featureList').on('click', '.remove-field', function() {
            $(this).closest('.input-row').remove();
        });

    });
</script>

