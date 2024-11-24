<style>

.accordion-flush .accordion-item .accordion-button {
    border-radius: 5px;
    background-color: #f1f3fa;
}

.accordion-body{
    background-color: #f1f3fa;
}

.border-none{
    border:none;
}
.accordion-button:focus {
    border-color: transparent;
    outline: 0;
    box-shadow: none;
}

</style>

<div class="admin_main_right p-30 bd-r-5 mb-60">
	<div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <!-- Seo -->

    <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach ($columnsByRoute as $route => $data)
            <div class="accordion-item mb-3 border-none">
                <h2 class="accordion-header" id="flush-heading{{ $route }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $route }}" aria-expanded="false" aria-controls="flush-collapse{{ $route }}">
                        {{ get_seo_column_name($route) }} <!-- Convert route name to title case -->
                    </button>
                </h2>

                <div id="flush-collapse{{ $route }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $route }}" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form method="post" action="{{ route('superadmin.seo_settings.update', ['id' => $data['id']]) }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="route" value="{{ $route }}">
                            @foreach ($data['columns'] as $columnName)
                                @if ($columnName === 'og_image')
                                    <div class="mb-3">
                                        <label class="form-label">Og Image</label>
                                        @if (isset($dbValues[$route][$columnName]) && $dbValues[$route][$columnName])
                                            <br>
                                            <img src="{{ url('/uploads/og-image/'.$dbValues[$route][$columnName]) }}" style="height: 50px;">
                                            <br>
                                        @endif
                                        <input type="file" class="form-control" name="{{ $route }}[{{ $columnName }}]">
                                    </div>
                                @else
                                    <div class="mb-2">
                                        <label for="{{ $route }}_{{ $columnName }}" class="form-label">
                                            {{ get_seo_column_name($columnName) }}
                                            @if($columnName == 'meta_title' || $columnName == 'meta_description' || $columnName == 'og_title' || $columnName == 'og_description')
                                                <span id="count_{{ $route }}_{{ $columnName }}">({{ strlen($dbValues[$route][$columnName] ?? '') }} characters)</span>
                                            @endif

                                        </label>
                                        <input type="text" id="{{ $route }}_{{ $columnName }}" name="{{ $route }}[{{ $columnName }}]" class="form-control" value="{{ $dbValues[$route][$columnName] ?? '' }}"
                                        
                                        @if($columnName == 'meta_title' || $columnName == 'meta_description' || $columnName == 'og_title' || $columnName == 'og_description')
                                        onkeyup="count_character('{{ $route }}_{{ $columnName }}')"
                                        @endif
                                        >
                                    </div>
                                @endif
                            @endforeach

                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                <input type="submit" value="Update post" class="btn btn-flex btn-primary h-40px fs-7 fw-bold" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>

    function count_character(id){
        let result_element = "#count_" + id
        let input_element = "#" + id
        let input_length = $(input_element).val().length > 0 ? $(input_element).val().length : 0
        $(result_element).html('(' + input_length + ' characters' + ')')
    }
</script>