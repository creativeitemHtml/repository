<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.create_payment_milestone', ['id' => $project_id]) }}">
    @csrf
    <div class="nproject-form-wrap">

        <div class="pForm-wrap">
            <label for="title" class="enForm-label">{{ get_phrase('Milestone Title') }}</label>
            <input
                type="text"
                class="form-control enForm-control"
                id="title"
                name="title"
                placeholder="Your Milestone Title"
                aria-label="Your Milestone Title"
                v-model="form.title"
            />
        </div>

        <div class="pForm-wrap">
            <label for="status" class="enForm-label">{{ get_phrase('Payment Status') }}</label>
            <select class="enForm-select enForm-nice-select niceSelect" id="status" name="status" data-placeholder="Type to search...">
                <option value="">{{ get_phrase('Select Status') }}</option>
                <option value="1">{{ get_phrase('Paid') }}</option>
                <option value="0">{{ get_phrase('Due') }}</option>
            </select>
        </div>

        <div class="pForm-wrap">
            <label for="amount" class="enForm-label">{{ get_phrase('Amount') }} ({{ currency() }})</label>
            <input type="number" class="form-control enForm-control" id="amount" name="amount" placeholder="Input payment amount" aria-label="Input payment amount" />
        </div>

        <div class="d-flex justify-content-end mt-2">
            <button type="submit" class="btn btn-primary">{{ get_phrase('Create Milestone') }}</button>
        </div>
        
    </div>
</form>

<script>
    $(document).ready(function () {
        $(".niceSelect").niceSelect();
    });
</script>