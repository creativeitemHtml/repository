<div class="admin_main_right p-30 bd-r-5">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <a href="{{ route('superadmin.blog_create') }}" class="new-project-btn new-project-btn-desktop">
            {{ get_phrase('Add Blog') }}
        </a>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table eTable">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th scope="col">{{ get_phrase('Title') }}</th>
                    <th scope="col">{{ get_phrase('Category') }}</th>
                    <th scope="col">{{ get_phrase('Total Likes') }}</th>
                    <th scope="col">{{ get_phrase('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td>
                        <div class="min-w-100">
                            <p class="fz-15-sb-black">{{ $blog->title }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="status-btn status-up">
                                {{ $blog->blog_to_blogCategory->name }}
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="min-w-100">
                            <p class="fz-15-m-black">{{ $blog->likes }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="adminTable-action">
                            <div class="btn-group">
                                <button type="button"  class="dropdown-btn dropdown-toggle"  data-bs-toggle="dropdown"  aria-expanded="false">{{ get_phrase('Actions') }}</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('superadmin.edit_blog', ['id' => $blog->id]) }}">{{ get_phrase('Blog Edit') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.blog.delete', ['id' => $blog->id]) }}', 'undefined')">{{ get_phrase('Delete blog') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Pagination -->
    <div class="adminPanel-pagi pt-30">
        {{ $blogs->links('pagination::bootstrap-4') }}
    </div>
</div>