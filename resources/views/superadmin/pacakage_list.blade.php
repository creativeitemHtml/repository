<div class="admin_main_right p-30 bd-r-5">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="javascript:;" class="new-project-btn new-project-btn-desktop" onclick="largeModal('{{ route('superadmin.package_create') }}', '{{ get_phrase('Create new pacakage') }}')">{{ get_phrase('Create Package') }}</a>
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
			    <th scope="col">{{ get_phrase('Price') }}</th>
                <th scope="col">{{ get_phrase('Dis-price') }}</th>
                <th scope="col">{{ get_phrase('Interval') }}</th>
                <th scope="col">{{ get_phrase('Period') }}</th>
                <th scope="col">{{ get_phrase('Total') }}</th>
                <th scope="col">{{ get_phrase('Visibility') }}</th>
                <th scope="col">{{ get_phrase('Action') }}</th>
			  </tr>
			</thead>
			<tbody>
				@foreach($packages as $package)
                @php
                    $prices = json_decode($package->price, true);
                    $dis_prices = json_decode($package->discounted_price, true);
                @endphp
				<tr>
				    <td>
				      <div class="min-w-100">
				        <p class="fz-15-sb-black">{{ $package->name }}</p>
				      </div>
				    </td>
                    <td>
                        <div class="min-w-100">
                            @foreach($prices as $price)
                                <span>{{ $price['currency'] }}: </span>{{ $price['amount'] }} <br><br>
                            @endforeach
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            @foreach($dis_prices as $dis_price)
                                <span>{{ $dis_price['currency'] }}: </span>{{ $dis_price['amount'] }} <br><br>
                            @endforeach
                        </div>
                    </td>
                    <td>
                        {{ $package->interval }}
                    </td>
                    <td>
                        {{ $package->interval == 'lifetime' ? '-' : $package->interval_period }}
                    </td>
                    <td>
                        <div class="min-w-100">
                            @foreach($dis_prices as $dis_price)
                                <span>{{ $dis_price['currency'] }}: </span>{{ $package->interval == 'lifetime' ? (double)$dis_price['amount'] : (double)$dis_price['amount'] * (double)$package->interval_period }} <br><br>
                            @endforeach
                        </div>
				    </td>
                    <td>
                        @if($package->visibility != '1'):
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
                                        <a class="dropdown-item" href="javascript:;" onclick="largeModal('{{ route('superadmin.package_update', ['id' => $package->id]) }}', '{{ get_phrase("Update pacakge") }}')">{{ get_phrase('Edit') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.package_remove', ['id' => $package->id]) }}', 'undefined')">{{ get_phrase('Delete') }}</a>
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
</div>