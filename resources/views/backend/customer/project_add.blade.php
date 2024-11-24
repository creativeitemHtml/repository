<div class="user-project-title d-flex justify-content-between align-items-center flex-wrap g-10 mb-30 bd-r-5">
    <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
    <div class="d-flex align-items-center flex-wrap g-20">
        <a href="{{ route('customer.projects') }}" class="edit-project-back-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
            Back
        </a>
    </div>
    <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
    </button>
</div>

<div class="l_col_main">
    <!-- Product Upload Form Area -->
    <div class="bg-white pt-26 pb-30 ">
        <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('customer.project_create') }}">
	    @csrf
            <div class="nproject-form-wrap">

                <div class="pForm-wrap">
                    <label for="title" class="enForm-label">{{ get_phrase('Project Title') }}</label>
                    <input
                        type="text"
                        class="form-control enForm-control"
                        id="title"
                        name="title"
                        placeholder="Your Project Title"
                        aria-label="Your Project Title"
                    />
                </div>

                <!-- Editor -->
                <div class="pForm-wrap">
                    <label for="description" class="enForm-label">{{ get_phrase('Description') }}</label>
                    <textarea class="form-control enForm-control" id="description" name="description" placeholder="About your project"></textarea>
                </div>

                <div class="pForm-wrap">
                    <label for="budget_estimation" class="enForm-label" >{{ get_phrase('Project budget') }}($)</label>
                    <select
                        class="enForm-select enForm-nice-select"
                        id="budget_estimation"
                        name="budget_estimation"
                    >
                        <option value="">{{ get_phrase('Select Budget') }}</option>
                        <option value="$500 - $1000">$500 - $1000</option>
                        <option value="$1000 - $3000">$1000 - $3000</option>
                        <option value="$3000 - $10000">$3000 - $10000</option>
                        <option value="over $10000">Over $10000</option>
                    </select>
                </div>
            
                <div class="pForm-wrap">
                    <label for="timeline" class="enForm-label">{{ get_phrase('Timeline') }}</label>
                    <select
                        class="enForm-select enForm-nice-select"
                        id="timeline"
                        name="timeline"
                    >
                        <option value="">{{ get_phrase('Select time') }}</option>
                        <option value="2 Weeks">2 {{ get_phrase('Weeks') }}</option>
                        <option value="4 Weeks">4 {{ get_phrase('Weeks') }}</option>
                        <option value="8 Weeks">8 {{ get_phrase('Weeks') }}</option>
                        <option value="12 Weeks">12 {{ get_phrase('Weeks') }}</option>
                        <option value="continuos">{{ get_phrase('Continuos development') }}</option>
                    </select>
                </div>

                <div class="pForm-wrap">
                    <label for="attachment" class="enForm-label">{{ get_phrase('Attachment') }}</label>
                    <input class="form-control enForm-control-file" type="file" name="attachment" id="attachment">
                </div>
            </div>
            <button type="submit" class="enproject-submit mt-5">
                {{ get_phrase('Submit') }}
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
                    </svg>
                </span>
            </button>
        </form>
    </div>
</div>