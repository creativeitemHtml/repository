<div class="admin_main_right p-30 bd-r-5">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <!-- Form -->
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.project_edit', ['id' => $project_details->id]) }}">
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
                    value="{{ $project_details->title }}"
                />
            </div>

            <!-- Editor -->
            <div class="pForm-wrap editor-wrap">
                <label for="description" class="enForm-label">Description Editor☻</label>
                <textarea id="mytextarea" name="description" placeholder="About your project">{{ $project_details->description }}</textarea>
            </div>

            <div class="pForm-wrap">
                <label for="user_id" class="enForm-label">{{ get_phrase('User') }}</label>
                <input type="text" class="form-control enForm-control" id="user_id" name="user_id" placeholder="user name" aria-label="user name" value="{{ $project_details->project_to_user->name }}" readonly/>
            </div>

            <div class="pForm-wrap">
                <label for="budget_estimation" class="enForm-label">{{ get_phrase('Project budget') }}({{ currency() }})</label>
                <select
                    class="enForm-select enForm-nice-select"
                    id="budget_estimation"
                    name="budget_estimation"
                >
                    <option value="">{{ get_phrase('Select Budget') }}</option>
                    <option value="$500 - $1000" {{ $project_details->budget_estimation == '$500 - $1000' ?  'selected':'' }}>$500 - $1000</option>
                    <option value="$1000 - $3000" {{ $project_details->budget_estimation == '$1000 - $3000' ?  'selected':'' }}>$1000 - $3000</option>
                    <option value="$3000 - $10000" {{ $project_details->budget_estimation == '$3000 - $10000' ?  'selected':'' }}>$3000 - $10000</option>
                    <option value="over $10000" {{ $project_details->budget_estimation == 'over $10000' ?  'selected':'' }}>Over $10000</option>
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
                    <option value="2 Weeks" {{ $project_details->timeline == '2 Weeks' ?  'selected':'' }}>2 {{ get_phrase('Weeks') }}</option>
                    <option value="4 Weeks" {{ $project_details->timeline == '4 Weeks' ?  'selected':'' }}>4 {{ get_phrase('Weeks') }}</option>
                    <option value="8 Weeks" {{ $project_details->timeline == '8 Weeks' ?  'selected':'' }}>8 {{ get_phrase('Weeks') }}</option>
                    <option value="12 Weeks" {{ $project_details->timeline == '12 Weeks' ?  'selected':'' }}>12 {{ get_phrase('Weeks') }}</option>
                    <option value="continuos" {{ $project_details->timeline == 'continuos' ?  'selected':'' }}>{{ get_phrase('Continuos development') }}</option>
                </select>
            </div>

            <div class="pForm-wrap">
                <label for="status" class="enForm-label">{{ get_phrase('Project status') }}({{ currency() }})</label>
                <select
                    class="enForm-select enForm-nice-select"
                    id="status"
                    name="status"
                >
                    <option value="">{{ get_phrase('Select Status') }}</option>
                    <option value="active" {{ $project_details->status == 'active' ?  'selected':'' }}>{{ get_phrase('Active') }}</option>
                    <option value="pending" {{ $project_details->status == 'pending' ?  'selected':'' }}>{{ get_phrase('Pending') }}</option>
                    <option value="archive" {{ $project_details->status == 'archive' ?  'selected':'' }}>{{ get_phrase('Archive') }}</option>
                </select>
            </div>

            <div class="pForm-wrap">
                <label for="project_price" class="enForm-label">{{ get_phrase('Project price') }}</label>
                <input type="text" class="form-control enForm-control" id="project_price" name="project_price" value="{{ $project_details->project_price }}"/>
            </div>

            <div class="pForm-wrap">
                <label for="project_deadline" class="enForm-label">{{ get_phrase('Project deadline') }}</label>
                <input type="date" class="form-control enForm-control" id="project_deadline" name="project_deadline" value="{{ isset($project_details->project_deadline) ? date('Y-m-d', $project_details->project_deadline) : '' }}"/>
            </div>

            <div class="pForm-wrap">
                <label for="completion_progress" class="enForm-label">{{ get_phrase('Completion progress') }}</label>
                <input type="number" class="form-control enForm-control" id="completion_progress" name="completion_progress" min="0", max="100" value="{{ $project_details->completion_progress }}"/>
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

<script type="text/javascript">

    "use strict";

    $(document).ready(function () {
        $('#description').summernote({
            height: 330,
            toolbar: [
                [ 'style', [ 'style' ] ],
                [ 'font', [ 'bold', 'italic', 'underline', 'clear'] ],
                [ 'fontname', [ 'fontname' ] ],
                [ 'fontsize', [ 'fontsize' ] ],
                [ 'color', [ 'color' ] ],
                [ 'para', [ 'ol', 'ul', 'paragraph' ] ],
                [ 'table', [ 'table' ] ],
                [ 'insert', [ 'link'] ],
                [ 'view', [ 'codeview', 'help' ] ]
            ]
        });
    });
</script>