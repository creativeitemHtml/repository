<style>
    .form-body{
        border-radius: 5px;
        background-color: #f1f3fa;
        padding: 20px 10px 20px 10px;
    }

    .input-row {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .add-field {
        cursor: pointer;
        height: 50px;
        width: 50px;
        border-radius: 5px;
        font-size: 20px;
        background: #0d6efd;
        border-color: #0d6efd;
        color: #fff !important;
        border: none;
    }

    .remove-field {
        cursor: pointer;
        height: 50px;
        width: 50px;
        border-radius: 5px;
        background: #ee406b;
        border-color: #ee406b;
        color: #fff !important;
        border: none;
        position: relative;
    }
    svg:not(:host).svg-inline--fa, svg:not(:root).svg-inline--fa {
        overflow: visible;
        box-sizing: content-box;
        position: absolute;
        top: 17px;
        left: 15px;
        width: 13px;
    }

</style>

<div class="admin_main_right p-30 bd-r-5">
	<div class="d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>

    <form method="POST" action="{{ route('superadmin.tag_create') }}" class="form-body">
        @csrf
        <label>{{ get_phrase('Add Tag Fields') }}</label>
        <div class="tag-list">
            <div class="input-row mt-3">
                <input type="text" id="tag" name="tag" class="form-control enForm-control" placeholder="Tag Value">
                <button type="submit" class="add-field">+</button>
            </div>
            @error('tag')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </form>

    <div class="form-body mt-2">
        <label>{{ get_phrase('Tag Fields') }}</label>
        @foreach($tags as $key => $tag)
        <form method="POST" action="{{ route('superadmin.tag_update', ['id' => $tag->id]) }}">
            @csrf
            <div class="tag-list">
                <div class="input-row mt-3">
                    <input type="text" id="tag_{{ $tag->id }}" name="tag_{{ $tag->id }}" class="form-control enForm-control" placeholder="Tag Value" value="{{ $tag->name }}">
                    <button type="submit" class="add-field">+</button>
                    <a href="javascript:;" onclick="confirmModal('{{ route('superadmin.tag_delete', ['id' => $tag->id]) }}', 'undefined')"><button type="button" class="remove-field">-</button></a>
                </div>
                @error('tag_' . $tag->id)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </form>
        @endforeach
    </div>
</div>