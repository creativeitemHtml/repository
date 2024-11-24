<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.create_project_meeting', ['id' => $project_id]) }}">
    @csrf
    <div class="nproject-form-wrap">
        <div class="pForm-wrap">
            <label for="medium" class="enForm-label">{{ get_phrase('Medium') }}</label>
            <select class="enForm-select enForm-nice-select niceSelect" id="medium" name="medium" data-placeholder="Type to search...">
                <option value="">{{ get_phrase('Select Medium') }}</option>
                <option value="skype">{{ get_phrase('Skype') }}</option>
                <option value="zoom">{{ get_phrase('Zoom') }}</option>
                <option value="google_meet">{{ get_phrase('Google Meet') }}</option>
            </select>
        </div>

        <div class="pForm-wrap">
            <label for="timestamp" class="enForm-label">{{ get_phrase('Date & Time') }}</label>
            <input type="datetime-local" class="form-control enForm-control" id="timestamp" name="timestamp" value="12:17"/>
        </div>

        <div class="pForm-wrap">
            <label for="link" class="enForm-label">{{ get_phrase('Meeting Link') }}</label>
            <input type="text" class="form-control enForm-control" id="link" name="link" placeholder="https://skype.com" aria-label="https://skype.com" />
        </div>

        <div class="d-flex justify-content-end mt-2">
            <button type="submit" class="btn btn-primary">{{ get_phrase('Create Meeting') }}</button>
        </div>

    </div>
</form>

<script>
    $(document).ready(function () {
        $(".niceSelect").niceSelect();
    });
</script>