<div class="admin_main_right p-30 bd-r-5 mb-60">
	<div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <!-- Form -->
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.user_edit', ['id' => $user_details->id]) }}">
	    @csrf
        <div class="nproject-form-wrap">

            <div class="pForm-wrap">
                <label for="name" class="enForm-label">{{ get_phrase('User Name') }}</label>
                <input
                    type="text"
                    class="form-control enForm-control"
                    id="name"
                    name="name"
                    value="{{ $user_details->name }}" 
                    placeholder="Your name"
                    aria-label="Your name"
                />
            </div>

            <div class="pForm-wrap">
                <label for="role_id" class="enForm-label">{{ get_phrase('Role') }}({{ currency() }})</label>
                <select class="enForm-select enForm-nice-select" id="role_id" name="role_id">
                    <option value="">{{ get_phrase('Select Role') }}</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $user_details->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach
                </select>
            </div> 
            
        </div>

        <button type="submit" class="enproject-submit mt-5">
            {{ get_phrase('Update') }}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
                </svg>
            </span>
        </button>
    </form>

</div>