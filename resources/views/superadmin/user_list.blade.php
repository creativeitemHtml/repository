<style>
    .dAdmin_profile_img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
    }
</style>

<div class="l_col_main">
    <div class="download-title-2 d-flex align-items-center justify-content-between">
        <h2>{{ get_phrase($page_title) }}</h2>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>


    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 mb-20">
                <form action="{{ route('superadmin.user_list', request()->query('search')) }}" method="get" class="filter-users-list">
                    <select class="chzn-select" name="role" id="role">
                        @foreach ($roles as $role)
                            <option value="{{ $role->slug }}" {{ $selected_role == $role->slug ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>

                    @if (request()->has('search') && request()->query('search'))
                        <input type="hidden" name="search" value="{{ request()->query('search') }}">
                    @endif
                </form>
            </div>

            <div class="col-md-6">
                <form action="{{ route('superadmin.user_list', request()->query('role')) }}" method="get" class="filter-users-list-search">

                    @if (request()->has('role') && request()->query('role'))
                        <input type="hidden" name="role" value="{{ request()->query('role') }}">
                    @endif

                    <input type="text" class="form-control enForm-control" name="search" value="{{ request()->query('search') }}" placeholder="{{ get_phrase('Search with name or email') }}">
                </form>
            </div>
        </div>
    </div>


    @if (count($users) > 0)
        <div class="table-responsive">
            <table class="table eTable el-table">
                <thead>
                    <tr>
                        <th scope="col">{{ get_phrase('User') }}</th>
                        <th scope="col"></th>
                        <th scope="col">{{ get_phrase('Email') }}</th>
                        <th scope="col">{{ get_phrase('Option') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <div class="dAdmin_profile_img">
                                    <img class="img-fluid" src="{{ get_user_image($user->id) }}" />
                                </div>
                            </td>
                            <td>
                                <div class="dl_property_id">
                                    <p>{{ $user->name }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="dl_property_price">
                                    <p>{{ $user->email }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="adminTable-action">
                                    <div class="btn-group">
                                        <button type="button" class="dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ get_phrase('Actions') }}
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('superadmin.user_edit', ['id' => $user->id]) }}">{{ get_phrase('Edit') }}</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('superadmin.user_remove', ['id' => $user->id]) }}">{{ get_phrase('Delete') }}</a>
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


        <div class="adminPanel-pagi pt-40">
            {{ $users->appends(request()->all())->links('pagination::bootstrap-4') }}
        </div>
    @else
        <div class="no-subscription mt-60">
            <img src="{{ asset('assets/img/admin-customer/subscription-status-2.png') }}" alt="" />
            <h4 class="title">{{ get_phrase('User list is empty') }}</h4>
        </div>
    @endif
</div>

@push('js')
    <script>
        $(document).ready(function() {

            $('select[name="role"]').on('change', function() {
                $(".filter-users-list").trigger('submit');
            });

            $('input[name="search"]').on("keypress", function(event) {
                if (event.key === "Enter") {
                    $(".filter-users-list").trigger('submit');
                }
            });
        });
    </script>
@endpush
