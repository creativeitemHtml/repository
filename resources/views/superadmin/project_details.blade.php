<div class="admin_main_right p-30 mb-30 bd-r-5">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ $project_details->title. '('.$project_details->created_at->format('d F, Y').')' }}</h4>
        <div class="d-flex align-items-center flex-wrap g-20">
            <a href="{{ route('superadmin.project_edit', ['id' => $project_details->id]) }}" class="new-project-btn new-project-btn-desktop"> {{ get_phrase('Edit Project') }}</a>
            <a href="{{ route('superadmin.projects') }}" class="new-project-btn new-project-btn-desktop"> {{ get_phrase('Back') }}</a>
        </div>
    </div>
</div>
<!-- Project items -->
<div class="row box-shadow-6">
    <div class="col-sm-6 project-items">
        <!-- UI Template -->
        <div class="project-item mb-20">
            <!-- Title -->
            <div class="project-item-title">
                <h3 class="title">{{ get_phrase('Description') }}</h3>
            </div>
            <!-- Content -->
            <div class="project-item-content">
                <p>{!! $project_details->description !!}</p>
            </div>
        </div>
        <div class="project-item">
            <div class="project-price-deadline mb-10 d-flex flex-wrap g-10 align-items-center justify-content-between">
                <h4 class="fz-15-sb-black">{{ get_phrase('Project Price') }}</h4>
                @if(isset($project_details->project_price))
                <p class="price-deadline">{{ currency($project_details->project_price) }}</p>
                @endif
            </div>
            <div class="project-price-deadline d-flex flex-wrap g-10 align-items-center justify-content-between">
                <h4 class="fz-15-sb-black">{{ get_phrase('Project Deadline') }}</h4>
                @if(isset($project_details->project_deadline))
                <p class="price-deadline">{{ date('d M Y', $project_details->project_deadline) }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-sm-6 project-items">
        <!-- Discussion -->
        <div class="project-item mb-20">
            <!-- Title -->
            <div class="project-item-title">
                <h3 class="title">{{ get_phrase('Discussion') }}</h3>
            </div>
            <!-- Client and Customer -->
            <div class="client-customer py-20">
                <div class="col">
                    <div class="discussion-user d-flex justify-content-center justify-content-md-start align-items-start flex-wrap g-10">
                        <div class="user-img">
                            <img src="{{ get_user_image($project_details->user_id) }}" alt="" />
                        </div>
                        <div class="user-info">
                            <h4 class="name">{{ $project_details->project_to_user->name }}</h4>
                            <p class="country-time">{{ $project_details->project_to_user->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Meeting link -->
            <div class="meeting-link d-flex justify-content-between align-items-center flex-wrap g-10">
                <h3 class="fz-16-m-black-2">{{ get_phrase('Online Meeting') }}</h3>
                <div class="link" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Create Meeting">
                    <a href="javascript:;" onclick="defaultModal('{{ route('superadmin.create_project_meeting', ['id' => $project_details->id]) }}', 'Create a Meeting')"><img src="{{ asset('assets/img/icon/plus-white.svg') }}" alt=""></a>
                </div>
            </div>
            <!-- Meeting History -->
            <ul class="meeting-history">
                @foreach($online_meetings as $meeting)
                    <li>
                        <div class="mh-item d-flex justify-content-between align-items-center">
                            <div class="mh-date-media active d-flex align-items-center g-30">
                                <p class="fz-14-m-black">
                                    {{ date('d F, Y, h:i a', $meeting->timestamp) }}
                                </p>
                                <p class="media">{{ ucfirst($meeting->medium) }}</p>
                            </div>
                            <div class="payfile-option">
                                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/img/icon/three-dots-vertical.svg') }}" alt="">
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ $meeting->link }}" target="_blank">{{ get_phrase('Join') }}</a>

                                    <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.remove_meeting', ['project_id' => $project_details->id, 'meeting_id' => $meeting->id]) }}', 'undefined');">{{ get_phrase('Delete') }}</a>
                                </ul>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- Project File -->
        <div class="project-item mb-20">
            <!-- Title -->
            <div class="project-item-title">
                <h3 class="title">{{ get_phrase('Project File') }}</h3>
            </div>
            <!-- File Upload -->
            <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.upload.project_attachment', ['project_id' => $project_details->id]) }}">
                @csrf
                <input class="form-control eForm-control-file" type="file" id="attachment" name="attachment">
                <button type="submit" class="ciBtn ciBtn-primary mt-20">{{ get_phrase('Upload') }}</button>
            </form>
            @php
                $attachments = json_decode($project_details->attachment_name);
            @endphp
            <br>
            @if(!empty($attachments))
            <!-- Table -->
            <table class="table eTable eTable-project">
                <tbody>
                    @foreach($attachments as $key => $attachment)
                        <tr>
                            <td>
                                <div class="min-w">
                                    <p class="fz-15-sb-black">{{ ($key+1).'. ' }}<a href="{{ route('superadmin.download.project_attachment', ['project_id' => $project_details->id, 'key' => $key]) }}">{{ $attachment }}</a></p>
                                </div>
                            </td>
                            <td>
                                <div class="min-w">
                                    <!-- Dropdown -->
                                    <div class="payfile-option">
                                        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('superadmin.download.project_attachment', ['project_id' => $project_details->id, 'key' => $key]) }}">{{ get_phrase('Download') }}</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.remove.project_attachment', ['project_id' => $project_details->id, 'key' => $key]) }}', 'undefined');">{{ get_phrase('Delete') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <!-- Payment Milestones -->
        <div class="project-item mb-20">
            <!-- Title -->
            <div class="project-item-title meeting-link">
                <h3 class="title">{{ get_phrase('Payment Milestones') }}</h3>
                <div class="link" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Create Milestone">
                    <a href="javascript:;" onclick="defaultModal('{{ route('superadmin.create_payment_milestone', ['id' => $project_details->id]) }}', 'Create a Milestone')"><img src="{{ asset('assets/img/icon/plus-white.svg') }}" alt=""></a>
                </div>
            </div>
            <!-- Table -->
            <table class="table eTable eTable-project">
                <tbody>
                    @foreach($payment_milestones as $milestone)
                    @php
                        if($milestone->status == '1') {
                            $status = 'Paid';
                            $status_colour = 'status-up';
                        }
                        elseif($milestone->status == '0') {
                            $status = 'Due';
                            $status_colour = 'status-down';
                        }
                    @endphp
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
                            <p class="status-btn {{ $status_colour }}">{{ get_phrase($status) }}</p>
                            </div>
                        </td>
                        <td>
                            <div class="min-w">
                                <!-- Dropdown -->
                                <div class="payfile-option">
                                    <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icon/three-dots-vertical.svg') }}" alt="">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        @if($milestone->status == 1)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('superadmin.milestone_invoice', ['milestone_id' => $milestone->id]) }}">{{ get_phrase('Invoice') }}</a>
                                        </li>
                                        @endif
                                        @if($milestone->status == 0)
                                        <li>
                                            <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.remove_milestone', ['project_id' => $project_details->id, 'milestone_id' => $milestone->id]) }}', 'undefined');">{{ get_phrase('Delete') }}</a>
                                        </li>
                                        @endif
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
</div>