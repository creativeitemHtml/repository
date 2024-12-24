<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.pop.ups.update', $popup->id) }}">
    @csrf

    <div class="input-wrap mt-2">
        <label for="title" class="eForm-label">{{ get_phrase('Title') }}</label>
        <input type="text" class="form-control eForm-control" id="title" name="title" value="{{ $popup->title }}" />
    </div>

    <div class="input-wrap mt-2">
        <label for="description" class="eForm-label">{{ get_phrase('Description') }}</label>
        <textarea class="form-control eForm-control" id="description" name="description">{{ $popup->description }}</textarea>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-wrap mt-2">
                <label for="start_date" class="eForm-label">{{ get_phrase('Start Date') }}</label>
                <input type="date" class="form-control eForm-control" id="start_date" name="start_date" value="{{ $popup->start_date }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-wrap mt-2">
                <label for="end_date" class="eForm-label">{{ get_phrase('End Date') }}</label>
                <input type="date" class="form-control eForm-control" id="end_date" name="end_date" value="{{ $popup->end_date }}">
            </div>
        </div>
    </div>

    <div class="input-wrap mt-2">
        <label for="banner" class="eForm-label">{{ get_phrase('Banner') }}</label>
        <input type="file" class="form-control eForm-control" id="banner" name="banner">
    </div>

    <div class="text-center float-end mt-4">
        <button type="submit" class="btn btn-primary">{{ get_phrase('Update PopUp') }}</button>
    </div>
</form>
