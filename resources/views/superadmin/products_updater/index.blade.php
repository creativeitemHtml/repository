<div class="admin_main_right p-30 bd-r-5 mb-60">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30 ">
        <h4 class="fz-20-sb-black">{{ get_phrase('Product Updater') }}</h4>
    </div>

</div>

<div class="admin_main_right p-30 bd-r-5">

    <!-- Form -->
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.products.updater') }}">
        @csrf
        <div class="nproject-form-wrap">

            <div class="pForm-wrap editor-wrap">
                <label for="query" class="enForm-label">Custom Query</label>
                <textarea class="form-control enForm-control" id="query" name="custom_query" placeholder="Enter custom query" required></textarea>
            </div>


            <div class="pForm-wrap">
                <label for="budget_estimation" class="enForm-label">{{ get_phrase('Companies') }}</label>

                <div class="d-flex gap-3 flex-wrap justify-content-center">
                    @foreach (DB::table('saas_companies')->get() as $key => $company)
                        <input type="checkbox" name="companies[]" value="{{ $company->id }}" class="btn-check" id="btncheck{{ $key }}" autocomplete="off">
                        <label class="btn btn-outline-primary text-capitalize" for="btncheck{{ $key }}">{{ $company->company_name }}</label>
                    @endforeach
                </div>


            </div>
        </div>
        <button type="submit" class="enproject-submit mt-5">
            {{ get_phrase('Update') }}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                </svg>
            </span>
        </button>
    </form>

</div>
