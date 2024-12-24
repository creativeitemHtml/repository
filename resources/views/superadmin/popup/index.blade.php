<div class="admin_main_right p-30 bd-r-5">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button type="button" class="new-project-btn new-project-btn-desktop" onclick="largeModal('{{ route('superadmin.pop.ups.create') }}', '{{ get_phrase('Create PopUp Banner') }}')">{{ get_phrase('Create PopUp Banner') }}</button>

        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>


    <div class="row popups">
        @foreach ($popups as $popup)
            <div class="col-sm-6 col-md-4">
                <div class="card p-2 rounded">

                    <div class="img-holder">
                        <img class="card-img-top rounded-3" src="{{ asset("uploads/popup/{$popup->banner}") }}" alt="{{ $popup->title }}" />
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title fs-6 text-dark"><span>{{ $popup->title }}</span></h4>

                            <div class="payfile-option pb-4">
                                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="svg-inline--fa fa-ellipsis-vertical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-vertical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M64 360c30.9 0 56 25.1 56 56s-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56zm0-160c30.9 0 56 25.1 56 56s-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56zM120 96c0 30.9-25.1 56-56 56S8 126.9 8 96S33.1 40 64 40s56 25.1 56 56z"></path>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="largeModal('{{ route('superadmin.pop.ups.edit', $popup->id) }}', '{{ get_phrase('Edit PopUp') }}')">{{ get_phrase('Edit PopUp') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="confirmModal('{{ route('superadmin.pop.ups.delete', $popup->id) }}', '{{ get_phrase('Delete PopUp') }}')">{{ get_phrase('Delete PopUp') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p class="card-text fs-6">{{ $popup->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
