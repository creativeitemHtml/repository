<form action="{{ route('superadmin.export_documentation', ['product_id' => $product_id]) }}" method="post" class="select_article_form" id="export-form">
    @csrf
    <div class="form-group float-left w-100">
        <button type="button" class="btn btn-success float-left" onclick="$('.select_article_form input').prop('checked', true)">Check All</button>
        <button type="button" class="btn btn-warning float-right" onclick="$('.select_article_form input').prop('checked', false)">Uncheck All</button>
    </div>
    
    @foreach($all_topics as $all_topic)
        <div class="form-group">
            <input type="checkbox" class="selected_topic_id[]" name="selected_topic_id[]" value="{{ $all_topic->id }}" id="{{ $all_topic->id }}">
            <label for="{{ $all_topic->id }}">{{ $all_topic->topic }}</label>
        </div>
    @endforeach
    <button type="submit" class="btn-main new-project-btn float-left"><i class="fa fa-download"> </i> {{ get_phrase('Export') }}</button>
</form>

<script>
    // $(".btn-main").click(function () {
    //     $(this).replaceWith("<img src='{{ asset("assets/img/loading.gif") }}'>");
    // });
    // function export_doc() {
    //     event.preventDefault();document.getElementById('export-form').submit();
    //     toastr.success('Your request is under process!');
    // }
    // $(".btn-main").click(function () {
    //     $(this).replaceWith("<img src='{{ asset("assets/img/loading.gif") }}'>");
    // });

    $('#export-form').on('submit', function(event) {
        event.preventDefault();

        
        var submitButton = $(this).find('input[type="submit"]');
        $('.btn-main').hide();
        $(this).append("<img src='{{ asset("assets/img/loading.gif") }}'>");
        submitButton.css('display', 'none');

        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $(this).serialize(),
            success: function(data, textStatus, jqXHR) {
                $('#scrollable-modal').modal('hide');
                console.log(data);
                var anchor = document.createElement('a');
                anchor.href = 'http://localhost/creativeitem/creativeitem/public/downloads/'+data;
                anchor.download = data;
                document.body.appendChild(anchor);
                anchor.click();

                // window.open('http://localhost/creativeitem/creativeitem/'+data, '_blank', 'download');
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            if(jqXHR.status == 0 || jqXHR == 302) {
                alert('Your session has ended due to inactivity after 10 minutes.\nPlease refresh this page, or close this window and log back in to system.');
            } else {
                alert('Unknown error returned while saving' + (typeof errorThrown == 'string' && errorThrown.trim().length > 0 ? ':\n' + errorThrown : ''));
            }
        });
    });
</script>