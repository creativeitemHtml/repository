<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.edit_topic', ['id' => $topic->id]) }}">
    @csrf
    <div class="input-wrap mt-2">
        <label for="topic" class="eForm-label">{{ get_phrase('Topic') }}</label>
        <input type="text" class="form-control eForm-control" id="topic" name="topic" value="{{ $topic->topic }}"/>
    </div>
    <div class="mt-2">
        <label for="summary" class="eForm-label">{{ get_phrase('Summary') }}</label>
        <textarea name="summary" id="summary" cols="15" rows="3" class="form-control eForm-control">{{ $topic->summary }}</textarea>
    </div>
    <div class="input-wrap mt-2">
        <label for="thumbnail" class="eForm-label">{{ get_phrase('Topic thumbnail') }}</label>( {{ get_phrase('The image size should be') }}: 400 X 255 )
        <input class="form-control eForm-control-file" id="thumbnail" name="thumbnail" onchange="changeTitleOfImageUploader(this)" accept="image/*" type="file" />
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input ciRadio" type="checkbox" name="visibility" id="visibility" value="1" @if($topic->visibility == 1) checked @endif >
        <label class="form-check-label" for="onlyFree">{{ get_phrase('Make this topic public') }}</label>
    </div>
    <div class="text-center float-end mt-4">
        <button type="submit" class="btn btn-primary">{{ get_phrase('Submit') }}</button>
    </div>
</form>