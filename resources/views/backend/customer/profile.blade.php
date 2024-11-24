<div class="subscription-main-wrap l_col_main mb-20">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30 mb-20">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>

    <!-- Product Upload Form Area -->
    <div class="bg-white pt-10 pb-10 ">
        <!-- Form -->
        <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('customer.profile_update') }}">
	        @csrf
            <div class="nproject-form-wrap">
            
                <div class="pForm-wrap">
                    <label for="name" class="enForm-label">{{ get_phrase('User Name') }}</label>
                    <input
                        type="text"
                        class="form-control enForm-control"
                        id="name"
                        name="name"
                        placeholder="Your name"
                        aria-label="Your name"
                        value="{{ auth()->user()->name }}"
                    />
                </div>

                <div class="pForm-wrap">
                    <label for="email" class="enForm-label" >{{ get_phrase('Email') }}</label>
                    <input id="email" type="email" class="form-control enForm-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" placeholder="Email" aria-label="Email" required/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="pForm-wrap">
                    <label for="phone" class="enForm-label">{{ get_phrase('Phone') }}</label>
                    <input
                        type="text"
                        class="form-control enForm-control"
                        id="phone"
                        name="phone"
                        placeholder="Your phone"
                        aria-label="Your phone"
                        value="{{ auth()->user()->phone }}"
                    />
                </div>

                <div class="pForm-wrap">
                    <label for="about" class="enForm-label">{{ get_phrase('About') }}</label>
                    <textarea class="form-control enForm-control" id="about" name="about" placeholder="About your project" v-model="form.about">{{ auth()->user()->about }}</textarea>
                </div>

                <div class="pForm-wrap">
                    <label for="thumbnail" class="enForm-label">{{ get_phrase('Thumbnail') }}</label>
                    <input class="form-control enForm-control-file" type="file" name="thumbnail" id="thumbnail">
                </div>

            </div>
            <!-- Submit btn -->
            <button type="submit" class="enproject-submit mt-5">
                {{ get_phrase('Update') }}
                <span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg></span>
            </button>
        </form>
    </div>
</div>

<div class="subscription-main-wrap l_col_main">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30 mb-20">
        <h4 class="fz-20-sb-black">{{ get_phrase('Change Password') }}</h4>
    </div>

    <!-- Product Upload Form Area -->
    <div class="bg-white pt-10 pb-10 ">
        <!-- Form -->
        <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('customer.password_change') }}">
	        @csrf
            <div class="nproject-form-wrap">
            
                <div class="pForm-wrap">
                    <label for="new_password" class="enForm-label">{{ get_phrase('New Password') }}</label>
                    <input type="password" class="form-control enForm-control" id="new_password" name="new_password" placeholder="New password" />
                </div>

                <div class="pForm-wrap">
                    <label for="confirm_password" class="enForm-label">{{ get_phrase('Confirm Password') }}</label>
                    <input type="password" class="form-control enForm-control" id="confirm_password" name="confirm_password" placeholder="Confiem password" />
                </div>

                <div class="pForm-wrap">
                    <label for="old_password" class="enForm-label">{{ get_phrase('Current Password') }}</label>
                    <input type="password" class="form-control enForm-control" id="old_password" name="old_password" placeholder="Current password" />
                </div>

            </div>
            <!-- Submit btn -->
            <button type="submit" class="enproject-submit mt-5">
                {{ get_phrase('Update') }}
                <span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg></span>
            </button>
        </form>
    </div>

</div>