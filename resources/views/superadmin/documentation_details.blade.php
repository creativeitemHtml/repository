@php
    $product = $type == 'saas' ? $selected_article->saas_product : $selected_article->article_to_product;
    $doc_url = $type == 'saas' ? url("{$product->slug}/help/{$selected_article->slug}") : route('documentation_details', [$selected_article->article_to_product->slug, $selected_article->slug]);
@endphp

<div class="admin_main_right p-30 bd-r-5 mb-60">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ $selected_article->article }}</h4>
        <a href="{{ $doc_url }}" class="new-project-btn new-project-btn-desktop">{{ get_phrase('Preview') }}</a>
        <a href="{{ route('superadmin.edit_documentation', [$type, $product->slug]) }}" class="new-project-btn new-project-btn-desktop">{{ get_phrase('Back to topics') }}</a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
</div>

<div class="admin_main_right p-30 bd-r-5 mb-60">
    <div class="d-flex align-items-center flex-wrap g-10">
        @foreach ($articles as $article)
            <a href="{{ route('superadmin.documentation_details', [$type, $article->id]) }}" class="btn-main @if ($selected_article->id == $article->id) el-save-btn @else btn-popularity @endif">{{ $article->article }}</a>
        @endforeach
    </div>
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.create_documentation', ['article_id' => $selected_article->id]) }}">
        @csrf
        <div class="nproject-form-wrap">
            <div class="pForm-wrap">
                <label for="article" class="enForm-label">{{ get_phrase('Article') }}</label>
                <input type="text" class="form-control enForm-control" id="article" name="article" value="{{ $selected_article->article }}" required />
            </div>
            <div class="pForm-wrap editor-wrap">
                <label for="documentation" class="enForm-label">{{ get_phrase('Documentation') }}</label>
                @if (!empty($article_details))
                    <textarea name="documentation" id="mytextarea" rows="15">{!! reformat_image_path($article_details->documentation) !!}</textarea>
                @else
                    <textarea name="documentation" id="mytextarea" rows="15"></textarea>
                @endif
            </div>
            <div class="form-check mt-2">
                <input class="form-check-input ciRadio" type="checkbox" name="visibility" id="visibility" value="1" checked>
                <label class="form-check-label" for="onlyFree">{{ get_phrase('Make this article public') }}</label>
            </div>
            <button type="submit" class="enproject-submit mt-5">
                {{ get_phrase('Submit') }}
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                    </svg>
                </span>
            </button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#documentation').summernote({
            height: 330,
        });
    });
</script>
