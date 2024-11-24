<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.create_article', ['slug' => $product->slug]) }}">
    @csrf
    <div class="input-wrap mt-2">
        <label for="article" class="eForm-label">{{ get_phrase('Article') }}</label>
        <input type="text" class="form-control eForm-control" id="article" name="article"/>
    </div>
    <div class="input-wrap mt-2">
        <label for="topic_id" class="eForm-label">{{ get_phrase('Topic') }}</label>
        <select id="topic_id" name="topic_id" class="form-select eForm-select eChoice-multiple-without-remove" data-placeholder="Type to search...">
            @foreach($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->topic }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input ciRadio" type="checkbox" name="visibility" id="visibility" value="1" checked>
        <label class="form-check-label" for="onlyFree">{{ get_phrase('Make this article public') }}</label>
    </div>
    <div class="text-center float-end mt-4">
        <button type="submit" class="btn btn-primary">{{ get_phrase('Submit') }}</button>
    </div>
</form>