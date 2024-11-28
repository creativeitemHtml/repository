@php

    $card_color = '';
    if ($product->slug == 'academy-lms') {
        $card_color = 'doc-item-academy-LMS';
    } elseif ($product->slug == 'ekattor-7') {
        $card_color = 'doc-item-ekattor';
    } elseif ($product->slug == 'learny-lms') {
        $card_color = 'doc-item-learny-LMS';
    } elseif ($product->slug == 'mastery-lms') {
        $card_color = 'doc-item-mastery-LMS';
    } elseif ($product->slug == 'checkout') {
        $card_color = 'doc-item-checkout';
    } elseif ($product->slug == 'atlas') {
        $card_color = 'doc-item-atlas';
    } elseif ($product->slug == 'ekattor-8') {
        $card_color = 'doc-item-ekattor8';
    } elseif ($product->slug == 'sociopro') {
        $card_color = 'doc-item-academy-LMS';
    } elseif ($product->slug == 'ekushe-crm') {
        $card_color = 'doc-item-mastery-LMS';
    } else {
        $card_color = 'doc-item-mastery-LMS';
    }

    $type = request()->route()->parameter('type');

@endphp

<!-- Title -->
<div class="admin_main_right p-30 bd-r-5 mb-60">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="{{ route('superadmin.documentation', $type) }}" class="new-project-btn new-project-btn-desktop">{{ get_phrase('Back to products') }}</a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <div class="d-flex align-items-center flex-wrap g-10">
        <a href="javascript:;" class="btn-main new-project-btn new-project-btn-desktop" onclick="defaultModal('{{ route('superadmin.create_topic', [$type, $product->slug]) }}', '{{ get_phrase('Create new topic') }}')"><i class="fa-solid fa-add"></i>{{ get_phrase('Add new topic') }}</a>
        <a href="javascript:;" class="btn-main new-project-btn new-project-btn-desktop" onclick="defaultModal('{{ route('superadmin.create_article', [$type, $product->slug]) }}', '{{ get_phrase('Create new article') }}')"><i class="fa-solid fa-add"></i> {{ get_phrase('Add new article') }}</a>
        <a href="javascript:;" class="btn-main new-project-btn new-project-btn-desktop" onclick="largeModal('{{ route('superadmin.sort_topics', [$product->slug, 'type' => $type]) }}', '{{ get_phrase('Sort topics') }}')"><i class="fa-solid fa-list"></i> {{ get_phrase('Sort topics') }}</a>
    </div>
</div>

<div class="row">
    @foreach ($topics as $topic)
        @php $articles = $topic->topic_to_article; @endphp
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="doc-item {{ $card_color }} d-flex justify-content-between align-items-start">
                <div class="content">
                    <div class="article-header">
                        <div>
                            <div class="doc-item-name">{{ $topic->topic }}</div>
                            <p class="doc-item-article">
                                <i class="fa-solid fa-comment"></i> {{ count($articles) . ' ' . get_phrase('Articles') }}
                            </p>
                        </div>
                        <!-- Dropdown -->
                        <div class="payfile-option pb-4">
                            <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg class="svg-inline--fa fa-ellipsis-vertical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-vertical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M64 360c30.9 0 56 25.1 56 56s-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56zm0-160c30.9 0 56 25.1 56 56s-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56zM120 96c0 30.9-25.1 56-56 56S8 126.9 8 96S33.1 40 64 40s56 25.1 56 56z"></path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:;" onclick="largeModal('{{ route('superadmin.sort_articles', ['topic_id' => $topic->id]) }}', '{{ get_phrase('Sort articles') }}')">{{ get_phrase('Sort article') }}</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;" onclick="defaultModal('{{ route('superadmin.edit_topic', ['id' => $topic->id]) }}', '{{ get_phrase('Update topic') }}')">{{ get_phrase('Edit topic') }}</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.topic.delete', ['id' => $topic->id]) }}', 'undefined')">{{ get_phrase('Delete topic') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="pt-2">
                        @foreach ($articles as $article)
                            <li class="article-title d-flex justify-content-between align-items-center">
                                <div class="article-item-name">{{ $article->article }}</div>
                                <!-- Dropdown -->
                                <div class="payfile-option">
                                    <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg class="svg-inline--fa fa-ellipsis-vertical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-vertical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M64 360c30.9 0 56 25.1 56 56s-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56zm0-160c30.9 0 56 25.1 56 56s-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56zM120 96c0 30.9-25.1 56-56 56S8 126.9 8 96S33.1 40 64 40s56 25.1 56 56z"></path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('superadmin.documentation_details', [$type, $article->id]) }}">{{ get_phrase('Update documentation') }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;" onclick="defaultModal('{{ route('superadmin.edit_article', ['id' => $article->id]) }}', '{{ get_phrase('Update topic') }}')">{{ get_phrase('Edit article') }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.article.delete', ['id' => $article->id]) }}', 'undefined')">{{ get_phrase('Delete article') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
