<!-- Title -->
<div class="user-project-title d-flex justify-content-between align-items-center flex-wrap g-10 mb-30 bd-r-5">
    <h4 class="fz-20-sb-black">{{ $project_details->title }}</h4>
    <div class="d-flex align-items-center flex-wrap g-20">
        <a href="{{ route('customer.projects') }}" class="edit-project-back-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
            {{ get_phrase('Back') }}
        </a>
    </div>
    <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
    </button>
</div>

<!-- Project items -->
<div class="project-items row">
    <div class="col-md-6">
        <!-- UI Template -->
        <div class="project-item mb-30">
            <!-- Title -->
            <div class="project-item-title">
                <h3 class="title">{{ get_phrase('Description') }}</h3>
            </div>
            <!-- Content -->
            <div class="project-item-content">
                <p>{!! $project_details->description !!}</p>
            </div>
        </div>
        <!-- Project Price & Deadline -->
        <div class="project-item">
            <div class="project-price-deadline mb-10 d-flex flex-wrap g-10 align-items-center justify-content-between">
                <h4 class="fz-15-sb-black">{{ get_phrase('Project Price') }}:</h4>
                @if(isset($project_details->project_price))
                <p class="price-deadline">{{ currency($project_details->project_price) }}</p>
                @endif
            </div>
            <div class="project-price-deadline d-flex flex-wrap g-10 align-items-center justify-content-between">
                <h4 class="fz-15-sb-black">{{ get_phrase('Project Deadline') }}:</h4>
                @if(isset($project_details->project_deadline))
                <p class="price-deadline">{{ date('d M Y', $project_details->project_deadline) }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Discussion -->
        <div v-if="online_meetings.length > 0" class="project-item mb-30">
            <!-- Title -->
            <div class="project-item-title">
                <h3 class="title">{{ get_phrase('Discussion') }}</h3>
            </div>
            <!-- Meeting History -->
            <ul class="meeting-history">
                @foreach($online_meetings as $meeting)
                <li>
                    <div class="mh-item active d-flex g-10 justify-content-between align-items-center">
                        <div class="mh-date-media d-flex align-items-center g-20">
                            <p class="fz-14-m-black">
                                {{ date('d F, Y, h:i a', $meeting->timestamp) }}
                            </p>
                            <p class="media">{{ ucfirst($meeting->medium) }}</p>
                        </div>
                        <a :href=" meeting.link " target="_blank" class="media-link" >
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- Project File -->
        <div class="project-item mb-30">
            <!-- Title -->
            <div class="project-item-title-2">
                <h3 class="title">{{ get_phrase('Project File') }}</h3>
            </div>
            <!-- File Upload -->
            <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('customer.upload_attachment', ['project_id' => $project_details->id]) }}">
                @csrf
                <input class="form-control eForm-control-file" type="file" id="attachment" name="attachment">
                <button type="submit" class="edit-project-btn mt-20">{{ get_phrase('Upload') }}</button>
            </form>
            @php
                $attachments = json_decode($project_details->attachment_name);
            @endphp
            @if(!empty($attachments))
            @foreach($attachments as $key => $attachment)
            <div class="file-name-action d-flex align-items-center justify-content-between">
                <p class="info">
                    <span>{{ $key+1 }}. </span>
                    <a href="{{ route('customer.download_attachment', ['project_id' => $project_details->id, 'key' => $key]) }}">{{ $attachment }}</a>
                </p>
                <!-- Dropdown -->
                <div class="project-item-dropdown project-item-dropdown-2">
                    <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 128 512"><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"></path></svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('customer.download_attachment', ['project_id' => $project_details->id, 'key' => $key]) }}">{{ get_phrase('Download') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('customer.remove_attachment', ['project_id' => $project_details->id, 'key' => $key]) }}', 'undefined');">{{ get_phrase('Delete') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <!-- Payment Mileage -->
        <div class="project-item">
            <!-- Title -->
            <div class="project-item-title">
                <h3 class="title">{{ get_phrase('Payment Milestones') }}</h3>
            </div>
            <!-- Table -->
            <div class="table-responsive">
                <table class="table eTable eTable-project">
                    <tbody>
                        @foreach($payment_milestones as $milestone)
                        <tr>
                            <td>
                                <div class="min-w">
                                    <p class="fz-15-sb-black">{{ $milestone->title }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="min-w">
                                    <p class="fz-15-sb-black">{{ currency($milestone->amount) }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="min-w">
                                    <p class="status-btn {{ $milestone->status == 1 ? 'status-up' : 'status-down' }}">
                                        {{ $milestone->status == 1 ? get_phrase('Paid') : get_phrase('Due') }}
                                    </p>
                                </div>
                            </td>
                            <td>
                                @if($milestone->status == 0)
                                <div class="min-w">
                                    <div class="mh-item active d-flex g-10 justify-content-between">
                                        <a href="{{ route('customer.project_payment', ['id' => $milestone->id]) }}" class="media-link" >
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                @else
                                <div class="min-w">
                                    <div class="d-flex g-10 justify-content-between">
                                        <a href="{{ route('customer.milestone_invoice', ['milestone_id' => $milestone->id]) }}" class="media-link" >
                                            <img src="{{ asset('assets/img/icon/invoice.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>