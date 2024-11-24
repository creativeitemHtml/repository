<div class="admin_main_right p-30 bd-r-5">
	<div class="d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
		<button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
	<!-- Table -->
	<div class="table-responsive">
		<table class="table eTable">
			<!-- Table Head -->
			<thead>
			  <tr>
			    <th scope="col">{{ get_phrase('Title') }}</th>
			    <th scope="col">{{ get_phrase('Identifier') }}</th>
			  </tr>
			</thead>
			<tbody>
				@foreach($product_types as $product_type)
				<tr>
				    <td>
				      <div class="min-w-100">
				        <p class="fz-15-sb-black">{{ $product_type->name }}</p>
				      </div>
				    </td>
				    <td>
				      	{{ $product_type->identifier }}
				    </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- Pagination -->
	<div class="adminPanel-pagi pt-30">
		{{ $product_types->links('pagination::bootstrap-4') }}
	</div>
</div>