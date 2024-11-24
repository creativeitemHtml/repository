
<div class="admin_main_right p-30 bd-r-5">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">Payment Request</h4>
    </div>
    <!-- Table -->

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Single Payment</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Subscription Payment</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
                <table class="table eTable">
                    <!-- Table Head -->
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Element Name</th>
                        <th scope="col">Paid Amount</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                        @if($payment->payment_method == 'bkash' || $payment->payment_method == 'nagad')
                        @php
                            $transactionKeys = json_decode($payment->transaction_keys, true);
                        @endphp
                        <tr>
                            <td>
                                <div class="min-w-100">
                                    <p class="fz-15-sb-black">{{ Ucwords($payment->user->name) }}</p>
                                </div>
                            </td>
        
                            <td>
                                
                                <div class="min-w-100">
                                    <p class="fz-15-sb-black">{{ $payment->product->title }}</p>
                                </div>
                            </td>
        
                            <td>
                                {{ $payment->paid_amount }}
                            </td>
                            <td>
                                <p class="status-btn status-up">{{ Ucwords($payment->payment_method )}}</p>
                            </td>
                            <td>
                                {{ $transactionKeys['account_number'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $transactionKeys['transaction_keys'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::createFromTimestamp($payment->date_added)->toDateTimeString() }}
                            </td>
                            <td>
                                @if($payment->status == 'pending')
                                <p class="status-btn status-down">Pending</p>
                                @else
                                <p class="status-btn status-up">Approve</p>
                                @endif
                            </td>
                            <td>
                                <div class="adminTable-action">
                                    <div class="btn-group">
                                        <button type="button" class="dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.paymentRequestApprove', $payment->id) }}', 'undefined');">Approve</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.paymentRequestDelete', $payment->id) }}', 'undefined')">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="table-responsive">
                <table class="table eTable">
                    <!-- Table Head -->
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Element Name</th>
                        <th scope="col">Paid Amount</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($subpayments as $subpayment)
                        @if($subpayment->payment_method == 'bkash' || $subpayment->payment_method == 'nagad')
                        
                        @php
                            $transactionKeys = json_decode($subpayment->transaction_keys, true);
                        @endphp
                        <tr>
                            <td>
                                <div class="min-w-100">
                                    <p class="fz-15-sb-black">{{ Ucwords($subpayment->user->name) }}</p>
                                </div>
                            </td>
        
                            <td>
                                
                                <div class="min-w-100">
                                    <p class="fz-15-sb-black">{{ $subpayment->package->name }}</p>
                                </div>
                            </td>
        
                            <td>
                                {{ $subpayment->paid_amount }}
                            </td>
                            <td>
                                <p class="status-btn status-up">{{ Ucwords($subpayment->payment_method )}}</p>
                            </td>
                            <td>
                                {{ $transactionKeys['account_number'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $transactionKeys['transaction_keys'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::createFromTimestamp($subpayment->date_added)->toDateTimeString() }}
                            </td>
                            <td>
                                @if($subpayment->status == 'pending')
                                <p class="status-btn status-down">Pending</p>
                                @else
                                <p class="status-btn status-up">Approve</p>
                                @endif
                            </td>
                            <td>
                                <div class="adminTable-action">
                                    <div class="btn-group">
                                        <button type="button" class="dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.subpaymentRequestApprove', $subpayment->id) }}', 'undefined');">Approve</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.subpaymentRequestDelete', $subpayment->id) }}', 'undefined')">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      
	
</div>