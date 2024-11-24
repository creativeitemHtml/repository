<div class="admin_main_right p-30 bd-r-5">
    <div class="d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="{{ route('superadmin.project_create') }}" class="new-project-btn new-project-btn-desktop">
            {{ get_phrase('Submit new projects') }}
        </a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <!-- Table -->
    <ul class="nav nav-pills pb-20">
        <li class="nav-item">
            <a class="nav-link @if($tab=='active') active @endif" aria-current="page" href="{{ route('superadmin.projects', ['param' => 'active']) }}">{{ get_phrase('Active').' ('.$active.')' }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($tab=='pending') active @endif" aria-current="page" href="{{ route('superadmin.projects', ['param' => 'pending']) }}">{{ get_phrase('Pending').' ('.$pending.')' }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($tab=='archive') active @endif" aria-current="page" href="{{ route('superadmin.projects', ['param' => 'archive']) }}">{{ get_phrase('Archive').' ('.$archive.')' }}</a>
        </li>
    </ul>
    @if(count($projects) > 0)
    <div class="table-responsive">
        <table class="table eTable">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th scope="col">{{ get_phrase('Project title') }}</th>
                    <th scope="col">{{ get_phrase('Status') }}</th>
                    <th scope="col">{{ get_phrase('Completion') }}</th>
                    <th scope="col">{{ get_phrase('Paid Amount') }}</th>
                    <th scope="col">{{ get_phrase('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    @php
                        if($project->status == 'active') {
                            $status_colour = 'status-up';
                            $status_arrow = 'fa-arrow-up';
                        }
                        elseif($project->status == 'pending') {
                            $status_colour = 'status-down';
                            $status_arrow = 'fa-arrow-down';
                        } else {
                            $status_colour = 'status-down';
                            $status_arrow = 'fa-arrow-down';
                        }
                    @endphp
                    <tr>
                        <td>
                            <div class="min-w-100">
                                <p class="fz-15-sb-black">{{ $project->title }}</p>
                            </div>
                        </td>
                        <td>
                            <div class="min-w-100">
                                <p class="status-btn {{ $status_colour }}">{{ ucfirst($project->status) }}</p>
                            </div>
                        </td>
                        <td>
                            <div class="min-w-100">
                                <p class="status-btn {{ $status_colour }}">
                                    <i class="fa-solid {{ $status_arrow }}"></i> {{ $project->completion_progress }}%
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="min-w-100">
                                <p class="fz-15-m-black">{{ currency($project->getTotalPaidAmount()) }}</p>
                            </div>
                        </td>
                        <td>
                            <div class="adminTable-action">
                                <div class="btn-group">
                                    <button type="button"  class="dropdown-btn dropdown-toggle"  data-bs-toggle="dropdown"  aria-expanded="false">{{ get_phrase('Actions') }}</button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('superadmin.project_details', ['id' => $project->id]) }}">{{ get_phrase('View Details') }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('superadmin.project_edit', ['id' => $project->id]) }}">{{ get_phrase('Edit') }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.project_remove', ['id' => $project->id]) }}', 'undefined');">{{ get_phrase('Delete') }}</a>
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
    @else
        No data found!
    @endif
    <!-- Pagination -->
    <div class="adminPanel-pagi pt-30">
        {{ $projects->links('pagination::bootstrap-4') }}
    </div>
</div>
