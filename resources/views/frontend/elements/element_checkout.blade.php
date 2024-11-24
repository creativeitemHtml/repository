<div class="modal-header mb-20px p-0 border-0">
    <h1 class="modal-title man-title-20px" id="elementCheckoutModalLabel">{{ get_phrase('Element subscription checkout page') }}</h1>
    <button type="button" class="btn-close cin1-modal-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-0">
    <form id="checkout-form" action="{{ route('purchase_subscription', ['package_id' => $selected_package->id]) }}" method="POST">
        @csrf
        <div class="row row-30px mb-40px">
            <div class="col-lg-7">
                <div class="cin1-bordered-card p-0">
                    <div class="p-3 cin1-border-bottom">
                        <h4 class="man-title-16px fw-bold lh-normal mb-12px">{{ get_phrase('Order Summary') }}</h4>
                        <div class="d-flex flex-column g-12px">
                            <div class="eCheckbox planCheck-wrap">
                                <div class="nav flex-column nav-pills planCheck" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach($packages as $package)
                                    @php
                                    if($package->interval == 'monthly'){
                                        $per = '/m';
                                        $interval = 'Month';

                                        if($package->interval_period > 1){
                                        $interval_period_text = $package->interval_period.' '.$interval.'s'.' Access';
                                        } else {
                                        $interval_period_text = $package->interval_period.' '.$interval.' Access';
                                        }
                                    } else {
                                        $per = '';
                                        $interval = '';
                                        $interval_period_text = 'Lifetime access';
                                    }


                                    $prices = json_decode($package->price, true);
                                    $dis_price = json_decode($package->discounted_price, true);
                                    $currency = strtoupper(session('session_currency'));
                                    $price = collect($prices)->firstWhere('currency', $currency)['amount'];
                                    $dis_price = collect($dis_price)->firstWhere('currency', $currency)['amount'];

                                    @endphp
                                    <button
                                        class="nav-link checkThis @if($package->id == $selected_package->id) active @endif"
                                        id="v-pills-{{ $package->name }}-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#v-pills-{{ $package->name }}"
                                        type="button"
                                        role="tab"
                                        aria-controls="v-pills-{{ $package->name }}"
                                        aria-selected="{{ $package->id == $selected_package->id ? 'true' : 'false' }}"
                                        data-package-price="{{ $dis_price }}"
                                        data-interval-period="{{ $package->interval_period }}"
                                        data-package-id="{{ $package->id }}"
                                    >
                                        <div class="form-check">
                                            <div class="col-auto">
                                                <input class="form-check-input planCheck-input" type="checkbox" value="{{ $package->id }}" id="flexCheckBasic-{{ $package->id }}" @if($package->id == $selected_package->id) checked @endif />
                                            </div>
                                            <div class="col-auto">
                                                <label class="form-check-label" for="flexCheckBasic">{{ get_phrase('Creative elements').' - '.$package->name }}</label>
                                                <p>
                                                    {{ currency($dis_price.$per) }} ( {{ $interval_period_text }} )
                                                </p>
                                            </div>
                                        </div>
                                    </button>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                            <h4 class="man-title-16px fw-bold lh-normal">Total</h4>
                            @php

                            $selected_dis_price = json_decode($selected_package->discounted_price, true);
                            $currency = strtoupper(session('session_currency'));
                            $selected_dis_price = collect($selected_dis_price)->firstWhere('currency', $currency)['amount'];

                            @endphp
                            <h4 class="man-title-16px fw-bold lh-normal" id="selected-package-price">
                                {{ $selected_package->interval == 'lifetime' ? currency().(double)$selected_dis_price : currency().(double)$selected_dis_price * (double)$selected_package->interval_period }}
                            </h4>
                            <input type="hidden" name="amount" value="{{ $selected_package->interval == 'lifetime' ? (double)$selected_dis_price : (double)$selected_dis_price * (double)$selected_package->interval_period }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cin1-bordered-card">
                    <div class="mb-3">
                        <label for="billing-address" class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Billing Address') }}</label>
                    </div>
                    <div class="mb-3">
                        @if(isset(auth()->user()->id) && auth()->user()->id !='')

                        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">

                        <label for="name" class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Name') }}</label>
                        <input type="text" class="form-control cin1-form-control" id="name" name="name" value="{{ auth()->user()->name }}" disabled />

                        <br>

                        <label for="email" class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Email') }}</label>
                        <input type="email" class="form-control cin1-form-control" id="email" name="email" value="{{ auth()->user()->email }}" disabled />

                        @else

                        <label for="email" class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Email') }}</label>
                        <input type="email" class="form-control cin1-form-contro" id="email" name="email" placeholder="Your Email" aria-label="Your Email" required />

                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Pay with') }}</label>
                        @if(session('location') == "Bangladesh")
                        <div class="btn-group cin1-btn-group gap-3 flex-wrap" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="payment_method" id="bkash" value="bkash" autocomplete="off" checked>
                            <label class="btn btn-outline-primary cin1-radio-checkbox" for="bkash">
                                <img src="{{ asset('assets/img/icon/bkash-logo.svg') }}" alt="logo">
                            </label>
                            
                            <input type="radio" class="btn-check" name="payment_method" id="nagad" value="nagad" autocomplete="off">
                            <label class="btn btn-outline-primary cin1-radio-checkbox" for="nagad">
                                <img src="{{ asset('assets/img/icon/nogot-logo.svg') }}" alt="logo">
                            </label>
                            
                            <input type="radio" class="btn-check" name="payment_method" id="stripe" value="stripe" autocomplete="off">
                            <label class="btn btn-outline-primary cin1-radio-checkbox" for="stripe">
                                <img src="{{ asset('assets/img/icon/stripe-logo.svg') }}" alt="logo">
                            </label>
                        </div>
                        @else
                        <div class="cin1-btn-group gap-3 flex-wrap" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="payment_method" id="stripe" value="stripe" autocomplete="off" checked>
                            <label class="btn btn-outline-primary cin1-radio-checkbox" for="stripe">
                                <img src="{{ asset('assets/img/icon/stripe-logo.svg') }}" alt="logo">
                            </label>
                        </div>
                        @endif
                    </div>
                    <!-- Hidden fields to ensure data is submitted correctly -->
                    <input type="hidden" name="account_number" id="hidden_account_number">
                    <input type="hidden" name="trans_id" id="hidden_trans_id">
                    
                    <div class="bkash_form" id="bkash_form">
                        <!-- <p class="mb-3 man-subtitle-15px">It is a long established fact that a reader will be dis tract by the readable content of a page when looks like.</p> -->
                        <div class="mb-3">
                            <label for="bkash-number" class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Bkash Account Number') }}</label>
                            <input type="number" class="form-control cin1-form-control" name="bkash_account_number" placeholder="01XXXXXXXX" id="bkash_account_number">
                        </div>
                        <div class="mb-20px">
                            <label for="transaction-id" class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Bkash Transaction ID') }}</label>
                            <input type="text" class="form-control cin1-form-control" name="bkash_trans_id" id="bkash_trans_id" placeholder="5B7A9">
                        </div>
                    </div>
                    <div class="nagad_form" id="nagad_form" style="display:none;">
                        <!-- <p class="mb-3 man-subtitle-15px">It is a long established fact that a reader will be dis tract by the readable content of a page when looks like.</p> -->
                        <div class="mb-3">
                            <label for="bkash-number" class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Nagad Account Number') }}</label>
                            <input type="number" class="form-control cin1-form-control" name="nagad_account_number" placeholder="01XXXXXXXX" id="nagad_account_number">
                        </div>
                        <div class="mb-20px">
                            <label for="transaction-id" class="form-label mb-12px man-title-16px lh-normal fw-bold">{{ get_phrase('Nagad Transaction ID') }}</label>
                            <input type="text" class="form-control cin1-form-control" name="nagad_trans_id" placeholder="5N7A9" id="nagad_trans_id">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary-ci1 w-100" id="submit-button">{{ get_phrase('Complete order') }}</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
  $(".checkThis").on("click", function () {
    // Uncheck all checkboxes
    $(".planCheck-input").prop("checked", false);

    // Check the clicked checkbox
    $(this).find(".planCheck-input").prop("checked", true);

    // Get the selected package's price and interval period from the data attributes
    var selectedPackagePrice = parseFloat($(this).data("package-price"));
    var selectedIntervalPeriod = parseFloat($(this).data("interval-period"));
    var selectedPackageId = $(this).data("package-id");

    // Update form action with the selected package ID
    var newAction = "{{ route('purchase_subscription', ['package_id' => ':id']) }}";
    newAction = newAction.replace(':id', selectedPackageId);
    $('#checkout-form').attr('action', newAction);

    // Calculate the total price based on the interval period
    var totalSelectedPackagePrice = selectedIntervalPeriod ? selectedPackagePrice * selectedIntervalPeriod : selectedPackagePrice;

    // Update the displayed price with $ sign
    $("#selected-package-price").text("<?= currency(); ?>" + totalSelectedPackagePrice.toFixed(2));
  });

  document.getElementById("checkout-form").addEventListener("submit", function(event) {
      // Get the input field value
      var inputValue = document.getElementById("email").value;

      // Check if the input field is empty
      if (inputValue.trim() === "") {
          // Prevent the form from being submitted
          event.preventDefault();

          // Optionally, you can provide feedback to the user
          // toastr.error("Input field cannot be empty.");
          $('.custom_error').addClass('active');
          $('.custom_error p').text('Input field cannot be empty.');
          setTimeout(function() {
              $('.custom_error').removeClass('active'); 
          }, 5000);
      }
  });

  $(document).ready(function() {
    // Initially hide both forms
    $('#bkash_form').hide();
    $('#nagad_form').hide();

    // Function to update hidden fields
    function updateHiddenFields() {
        const selectedMethod = $('input[name="payment_method"]:checked').val();
        if (selectedMethod === 'bkash') {
            $('#hidden_account_number').val($('#bkash_account_number').val()).attr('name', 'account_number');
            $('#hidden_trans_id').val($('#bkash_trans_id').val()).attr('name', 'trans_id');
        } else if (selectedMethod === 'nagad') {
            $('#hidden_account_number').val($('#nagad_account_number').val()).attr('name', 'account_number');
            $('#hidden_trans_id').val($('#nagad_trans_id').val()).attr('name', 'trans_id');
        } else {
            $('#hidden_account_number').val('').removeAttr('name');
            $('#hidden_trans_id').val('').removeAttr('name');
        }
    }

    // Function to validate form fields
    function validateFields() {
        let isValid = true;
        const selectedMethod = $('input[name="payment_method"]:checked').val();
        
        if (selectedMethod === 'bkash') {
            if ($('#bkash_account_number').val().length === 0 ){
                toastr.error("Please enter a valid Bkash account number.");
                isValid = false;
            }
            if ($('#bkash_trans_id').val().length === 0) {
                toastr.error("Please enter a Bkash transaction ID.");
                isValid = false;
            }
        } else if (selectedMethod === 'nagad') {
            if ($('#nagad_account_number').val().length === 0 ) {
                toastr.error("Please enter a valid Nagad account number.");
                isValid = false;
            }
            if ($('#nagad_trans_id').val().length === 0) {
                toastr.error("Please enter a Nagad transaction ID.");
                isValid = false;
            }
        }
        
        return isValid;
    }

    // Show the correct form based on the initially selected payment method
    if ($('#bkash').is(':checked')) {
        $('#bkash_form').show();
    } else if ($('#nagad').is(':checked')) {
        $('#nagad_form').show();
    }

    // Add a change event listener to the payment method radio buttons
    $('input[name="payment_method"]').change(function() {
        if (this.value === 'bkash') {
            $('#bkash_form').show();
            $('#nagad_form').hide();
        } else if (this.value === 'nagad') {
            $('#nagad_form').show();
            $('#bkash_form').hide();
        } else {
            $('#nagad_form').hide();
            $('#bkash_form').hide();
        }
        updateHiddenFields();
    });

    // Update hidden fields initially
    updateHiddenFields();

    // Update hidden fields when input fields change
    $('#bkash_account_number, #bkash_trans_id, #nagad_account_number, #nagad_trans_id').on('input', updateHiddenFields);

    // Add form submission event listener
    // $('form').on('submit', function(event) {
    //     if (!validateFields()) {
    //         event.preventDefault();
    //     }
    // });

    // Add form submission event listener
    $('#checkout-form').on('submit', function(event) {
        const selectedMethod = $('input[name="payment_method"]:checked').val();

        if (selectedMethod === 'stripe') {
            // Allow default form submission
            return;
        }

        // Prevent default form submission for bkash and nagad
        event.preventDefault();

        if (!validateFields()) {
            return;
        }

        // Send form data via AJAX
        const formData = new FormData(this);
        formData.append('_token', $('input[name="_token"]').val());
        formData.append('payment_method', $('input[name="payment_method"]:checked').val());

        if (selectedMethod === 'bkash') {
            formData.append('bkash_account_number', $('#bkash_account_number').val());
            formData.append('bkash_trans_id', $('#bkash_trans_id').val());
        } else if (selectedMethod === 'nagad') {
            formData.append('nagad_account_number', $('#nagad_account_number').val());
            formData.append('nagad_trans_id', $('#nagad_trans_id').val());
        }

        // Change button text and disable it
        const $submitButton = $('#submit-button');
        $submitButton.text('Waiting For Response').prop('disabled', true);

        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle success response
                // Assuming response contains the HTML to update the modal content
                $('.modal-body').html(response);
                // toastr.success("Payment processed successfully.");
            },
            error: function(xhr) {
                // Handle error response
                toastr.error("An error occurred while processing the payment.");
            }
        });
    });
});
</script>
