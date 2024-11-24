<div class="admin_main_right p-30 bd-r-5">
    <div class="d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="{{ url()->previous() }}" class="new-project-btn new-project-btn-desktop">
            {{ get_phrase('Back to Blog List') }}
        </a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>

    <!-- Form -->
    <form id="blog_form" action="{{ route('superadmin.blog_create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="dl_column_form">
            <div class="nproject-form-wrap">
                <div class="pForm-wrap">
                    <label for="blog_title" class="enForm-label">{{ get_phrase('Blog Category') }}</label>
                    <select class="enForm-select enForm-nice-select" name="blog_category_id" id="blog_category_id">
                        <option value="">{{ get_phrase('Select a category') }}</option>
                        @foreach ($blog_categories as $key => $blog_category)
                            <option value="{{ $blog_category->id }}">{{ get_phrase($blog_category->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="pForm-wrap">
                    <label for="blogger_id" class="enForm-label">{{ get_phrase('Created By') }}</label>
                    <select
                        class="enForm-select enForm-nice-select"
                        id="blogger_id"
                        name="blogger_id"
                    >
                        <option value="">{{ get_phrase('Select a writer') }}</option>
                        @foreach($blog_writers as $writer)
                            <option value="{{ $writer->id }}">{{ $writer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="pForm-wrap">
                    <label for="blog_title" class="enForm-label">{{ get_phrase('Blog Tittle') }}</label>
                    <input type="text" class="form-control enForm-control" id="blog_title" name="blog_title" placeholder="Blog Title" aria-label="Blog Title" />
                </div>
                <div class="pForm-wrap">
                    <label for="blog_title" class="enForm-label">{{ get_phrase('Tags') }}</label>
                    <input class="form-control tag" type="text" id="tags" name="tags" placeholder="Put comma(,) after each word">
                    @if ($errors->has('tags'))
                    <span class="text-danger">{{ $errors->first('tags') }}</span>
                    @endif
                </div>
                <div class="pForm-wrap">
                    <label for="excerpt" class="enForm-label">{{ get_phrase('Excerpt') }}</label>
                    <input type="text" class="form-control enForm-control" id="excerpt" name="excerpt" placeholder="Excerpt" aria-label="Excerpt" />
                </div>
                <div class="pForm-wrap">
                    <label for="read_time" class="enForm-label">{{ get_phrase('Read Time') }}</label>
                    <input type="text" class="form-control enForm-control" id="read_time" name="read_time" placeholder="Ex: 13" aria-label="read_time" />
                </div>
                <!-- Editor -->
                <div class="pForm-wrap editor-wrap">
                    <label for="blog_details" class="enForm-label">{{ get_phrase('Blog') }}</label>
                    <textarea id="mytextarea" name="blog_details" placeholder="About your project"></textarea>
                </div>
                <div class="pForm-wrap">
                    <label for="thumbnail" class="enForm-label">{{ get_phrase('Thumbnail') }}</label>
                    <input type="file" id="thumbnail" name="thumbnail" class="form-control enForm-control"  id="chooseFile">
                </div>
                <div class="pForm-wrap">
                    <label for="banner" class="enForm-label">{{ get_phrase('Banner') }}</label>
                    <input type="file" id="banner" name="banner" class="form-control enForm-control"  id="chooseFile">
                </div>
                <ul class="productPriceOption">
                    <li>
                        <div class="form-check">
                            <input class="form-check-input ciRadio ciRadio-OutlinePrimary" type="checkbox" name="visibility" id="visibility" />
                            <label class="form-check-label" for="visibility">{{ get_phrase('Make this blog public') }}</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input ciRadio ciRadio-OutlinePrimary" type="checkbox" name="ability_to_comment" id="ability_to_comment" />
                            <label class="form-check-label" for="ability_to_comment">{{ get_phrase('People can leave their comment') }}</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input ciRadio ciRadio-OutlinePrimary" type="checkbox" name="is_featured" id="is_featured" />
                            <label class="form-check-label" for="is_featured">{{ get_phrase('Make this blog featured') }}</label>
                        </div>
                    </li>
                </ul>
                
                <br>

                <h3 class="fz-18-b-black mb-3">{{ get_phrase('Seo Configuration') }}:</h3>

                <div class="cFormInput-wrap">
                    <label for="meta_title" class="enForm-label">{{ get_phrase('Meta Title') }}</label>
                    <span id="count_meta_title">(0 charecters)</span>
                    <input type="text" class="form-control enForm-control" name="meta_title" id="meta_title" placeholder="Blog Title" aria-label="Blog Title" onkeyup="count_character('meta_title')" />
                </div>



                <div class="cFormInput-wrap">
                    <label for="meta_keywords" class="enForm-label">{{ get_phrase('Meta Keywords') }}</label>
                    <input type="text" class="form-control enForm-control" name="meta_keywords" id="meta_keywords" placeholder="Meta Keywords" aria-label="Meta Keywords" onkeyup="count_character('meta_keywords')" />
                </div>

                <div class="cFormInput-wrap">
                    <label for="meta_title" class="enForm-label">{{ get_phrase('Meta Description') }}</label>
                    <span id="count_meta_description">(0 charecters)</span>
                    <input type="text" class="form-control enForm-control" name="meta_description" id="meta_description" placeholder="Meta Description" aria-label="Meta Description" onkeyup="count_character('meta_description')" />
                </div>

                <div class="cFormInput-wrap">
                    <label for="custom_url" class="enForm-label">{{ get_phrase('Custom Url') }}</label>
                    <input type="text" class="form-control enForm-control" palaceholder="https://example.com" name="custom_url" />
                </div>

                <div class="cFormInput-wrap">
                    <label for="canonical_url" class="enForm-label">{{ get_phrase('Canonical Url') }}</label>
                    <input type="text" class="form-control enForm-control" palaceholder="https://example.com" name="canonical_url" />
                </div>

                <div class="cFormInput-wrap">
                    <label for="meta_title" class="enForm-label">{{ get_phrase('Og Title') }}</label>
                    <span id="count_og_title">(0 charecters)</span>
                    <input type="text" class="form-control enForm-control" name="og_title" id="og_title" onkeyup="count_character('og_title')" />
                </div>

                <div class="cFormInput-wrap">
                    <label for="og_description" class="enForm-label">{{ get_phrase('Og Description') }}</label>
                    <span id="count_og_description">(0 charecters)</span>
                    <input type="text" class="form-control" name="og_description" id="og_description" onkeyup="count_character('og_description')" />
                </div>

                <div class="cFormInput-wrap">
                    <label for="og_description" class="enForm-label">{{ get_phrase('Og Image') }}</label>
                    <input type="file" class="form-control enForm-control" name="og_image" />
                </div>

                <div class="cFormInput-wrap">
                    <label for="json_ld" class="enForm-label">{{ get_phrase('Json ld') }}</label>
                    <textarea class="form-control enForm-control" name="json_ld" id="json_ld" cols="10" rows="4"></textarea>
                </div>
            </div>
        </div>
        <!-- Button -->
        <button type="submit" class="enproject-submit mt-5">
            {{ get_phrase('Create') }}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
                </svg>
            </span>
        </button>
    </form>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $('#blog_details').summernote({
            height: 330,
        });
    });

    function count_character(id){
        let result_element = "#count_" + id
        let input_element = "#" + id
        let input_length = $(input_element).val().length > 0 ? $(input_element).val().length : 0
        $(result_element).html('(' + input_length + ' characters' + ')')
    }

</script>