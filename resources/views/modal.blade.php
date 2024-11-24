<div class="modal fade" id="large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header d-print-none">
				<h4 class="modal-title" id="myLargeModalLabel"></h4>
				<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body"></div>
		</div>
	</div>
</div>

<script type="text/javascript">

	"use strict";

	var callBackFunction;
	var callBackFunctionForGenericConfirmationModal;
	function largeModal(url, header)
	{
		jQuery('#large-modal').modal('show', {backdrop: 'true'});
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS

		$.ajax({
			type: 'get',
			url: url,
			success: function(response)
			{
				jQuery('#large-modal .modal-body').html(response);
				jQuery('#large-modal .modal-title').html(header);
			}
		});
	}

</script>


<!-- Scrollable modal -->
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
	    <div class="modal-content">
	        <div class="modal-header d-print-none">
				<h4 class="modal-title" id="myLargeModalLabel"></h4>
				<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" aria-hidden="true">×</button>
			</div>
	        <div class="modal-body ml-2 mr-2">

	        </div>
	    </div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myAjaxModalLabel">Modal title</h5>
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>

	"use strict";

	function showAjaxModal(url, header)
	{
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#scrollable-modal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img style="width: 100px; opacity: 0.4; " src="{{ asset('assets/img/straight-loader.gif') }}" /></div>');
		jQuery('#scrollable-modal .modal-title').html('...');
		// LOADING THE AJAX MODAL
		jQuery('#scrollable-modal').modal('show', {backdrop: 'true'});

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#scrollable-modal .modal-body').html(response);
				jQuery('#scrollable-modal .modal-title').html(header);
			}
		});
	}
</script>


<div class="modal eModal fade" id="confirmSweetAlerts" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered sweet-alerts text-sweet-alerts">
		<div class="modal-content">
			<div class="modal-body">
				<div class="icon icon-confirm">
					<svg xmlns="http://www.w3.org/2000/svg" height="48"
						width="48">
						<path
						d="M22.5 29V10H25.5V29ZM22.5 38V35H25.5V38Z" />
					</svg>
				</div>
				<p>{{ get_phrase('Are you sure?') }}</p>
				<p class="focus-text">You won't able to revert this!</p>
				<div class="confirmBtn">
					<a href="javascript:;" id="confirmBtn" class="eBtn eBtn-green">
						<button type="button" id="confirmBtn" class="eBtn eBtn-green">{{ get_phrase('Yes') }}</button>
					</a>
					<button type="button" class="eBtn eBtn-red" data-bs-dismiss="modal">{{ get_phrase('Cancel') }}</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

  "use strict";

  function confirmModal(deleteUrl, callBackFunction){
    var confirmModal = new bootstrap.Modal(document.getElementById('confirmSweetAlerts'), {
      keyboard: false
    });
    confirmModal.show();

    if(callBackFunction == 'undefined')
    {
      	$('#confirmBtn').attr('href', deleteUrl);
    }
    else if(callBackFunction == 'ajax_delete')
    {
        $('#confirmBtn').attr('onclick',deleteUrl);
    }
    else{
      	$('#confirmBtn').attr('onclick', "deleteDataUsingAjax('"+deleteUrl+"', "+callBackFunction+");");
    }
}

</script>

<!-- Modal -->
<div class="modal fade" id="default-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
			<div class="modal-body formModal">
				<div class="formModal-header d-flex justify-content-between align-items-center">
					<h4 class="default-title fz-20-sb-black-2">{{ get_phrase('Your title') }}</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="default-body pb-20"></div>
			</div>
        </div>
    </div>
</div>

<script type="text/javascript">

	"use strict";

	var callBackFunction;
	var callBackFunctionForGenericConfirmationModal;
	function defaultModal(url, header)
	{
		jQuery('#default-modal').modal('show', {backdrop: 'true'});
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS

		$.ajax({
			type: 'get',
			url: url,
			success: function(response)
			{
				jQuery('#default-modal .default-body').html(response);
				jQuery('#default-modal .default-title').html(header);
			}
		});
	}

</script>

<!-- Modal -->
<div class="modal fade web-ui-modal-wrap" id="element-modal" tabindex="-1" aria-labelledby="elementModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen web-ui-modal">
		<div class="modal-content">
			<div class="modal-header">
				<!-- Close button -->
				<div class="modalClose">
					<button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
				</div>
			</div>
			<div class='modal-body'><div class="element-body"></div></div>
		</div>
	</div>
</div>

<script type="text/javascript">

	"use strict";

	var callBackFunction;
	var callBackFunctionForGenericConfirmationModal;
	function elementModal(url)
	{
		jQuery('#element-modal').modal('show', {backdrop: 'true'});
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS

		$.ajax({
			type: 'get',
			url: url,
			success: function(response)
			{
				jQuery('#element-modal .element-body').html(response);
			}
		});
	}

</script>

<div id="buyNowModal" class="modal fade" tabindex="-1" aria-labelledby="buyNowModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title">Checkout</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">...</div>
		</div>
	</div>
</div>

<script>

	"use strict";

	function buyNowModal(url)
	{
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#buyNowModal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img style="width: 100px; opacity: 0.4; " src="{{ asset('assets/img/straight-loader.gif') }}" /></div>');
		// LOADING THE AJAX MODAL
		jQuery('#buyNowModal').modal('show', {backdrop: 'true'});

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#buyNowModal .modal-body').html(response);
			}
		});
	}
</script>

<div id="commonModal" class="modal fade" tabindex="-1" aria-labelledby="serviceHelpLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			...
		</div>
	</div>
</div>

<script>

	"use strict";

	function commonModal(url)
	{
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#commonModal .modal-content').html('<div style="text-align:center;margin-top:200px;"><img style="width: 100px; opacity: 0.4; " src="{{ asset('assets/img/straight-loader.gif') }}" /></div>');
		// LOADING THE AJAX MODAL
		jQuery('#commonModal').modal('show', {backdrop: 'true'});

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#commonModal .modal-content').html(response);
			}
		});
	}
</script>


<div class="modal fade" id="elementCheckoutModal" tabindex="-1" aria-labelledby="elementCheckoutModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl cin1-modal-xl">
		<div class="modal-content cin1-modal-content">
			...
		</div>
	</div>
</div>

<script type="text/javascript">

	"use strict";

	var callBackFunction;
	var callBackFunctionForGenericConfirmationModal;
	function elementCheckoutModal(url)
	{
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#elementCheckoutModal .modal-content').html('<div style="text-align:center;margin-top:200px;"><img style="width: 100px; opacity: 0.4; " src="{{ asset('assets/img/straight-loader.gif') }}" /></div>');
		// LOADING THE AJAX MODAL
		jQuery('#elementCheckoutModal').modal('show', {backdrop: 'true'});

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#elementCheckoutModal .modal-content').html(response);
			}
		});
	}

</script>