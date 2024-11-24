<div class="subscription-main-wrap l_col_main">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30 mb-20">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="{{ route('customer.project_create') }}" class="new-project-btn new-project-btn-desktop">
            {{ get_phrase('Submit new projects') }}
        </a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <!-- Table -->
    <ul class="nav nav-pills pb-20">
        <li class="nav-item">
            <a class="nav-link @if($tab=='active') active @endif" aria-current="page" href="{{ route('customer.projects', ['param' => 'active']) }}">
                {{ get_phrase('Active').' ('.$active.')' }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($tab=='pending') active @endif" aria-current="page" href="{{ route('customer.projects', ['param' => 'pending']) }}">
                {{ get_phrase('Pending').' ('.$pending.')' }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($tab=='archive') active @endif" aria-current="page" href="{{ route('customer.projects', ['param' => 'archive']) }}">
                {{ get_phrase('Archive').' ('.$archive.')' }}
            </a>
        </li>
    </ul>
    @if(count($projects) > 0)
    <div class="table-responsive">
        <table class="table eTable">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ get_phrase('Project title') }}</th>
                    <th scope="col">{{ get_phrase('Status') }}</th>
                    <th scope="col">{{ get_phrase('Completion') }}</th>
                    <th scope="col">{{ get_phrase('Paid Amount') }}</th>
                    <th scope="col">{{ get_phrase('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $key => $project)
                <tr>
                    <td>
                        <div>
                            <p class="fz-15-sb-black">{{ $projects->firstItem() + $key }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="fz-15-sb-black">{{ $project->title }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="status-btn {{ $project->status == 'active' ? 'status-up' : 'status-down' }}">{{ $project->status }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="status-btn {{ $project->status == 'active' ? 'status-up' : 'status-down' }}">
                            @if($project->status == 'active')
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                            @endif
                            {{ $project->completion_progress }}%
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="fz-15-m-black">{{ currency($project->getTotalPaidAmount()) }}</p>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('customer.project_details', ['id' => $project->id]) }}" class="ciBtn ciBtn-primary project-view-btn">View details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="no-subscription arrow-right mt-60">
        <img src="{{ asset('assets/img/admin-customer/subscription-status.png') }}" alt="">
        <h4 class="title"> No project found. Create A New Project!</h4>
    </div>
    @endif
    <!-- Pagination -->
    <div class="adminPanel-pagi pt-30">
        {{ $projects->links('pagination::bootstrap-4') }}
    </div>
</div>