@if (count($topics) > 0)
    <div class="row" id="parent-div" data-plugin="dragula" data-containers='["topic-list"]'>
        <div class="col-md-12">
            <div class="bg-dragula p-2 p-lg-4">
                <h4 class="d-flex justify-content-between mt-0">{{ get_phrase('List of topics') }}
                    <button type="button" class="btn btn-outline-primary btn-sm btn-rounded alignToTitle" id="topic-sort-btn" onclick="sort('{{ $product->slug }}')" name="button">{{ get_phrase('Update sorting') }}</button>
                </h4>
                <div id="topic-list" class="py-2">
                    <div id="sortable">
                        @foreach ($topics as $topic)
                            <div class="card mb-0 mt-2 ui-state-default draggable-item w-100" id="{{ $topic->id }}" style="cursor: pointer;">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mb-1 mt-0">{{ $topic->topic }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    @include('no_data_found')
@endif



<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

<script type="text/javascript">
    "use strict";
    $(function() {
        $("#sortable").sortable();
    });

    function sort(slug) {
        var containerArray = ['topic-list'];
        var itemArray = [];
        var itemJSON;
        for (var i = 0; i < containerArray.length; i++) {
            $('#' + containerArray[i]).each(function() {
                $(this).find('.draggable-item').each(function() {
                    itemArray.push(this.id);
                });
            });
        }

        itemJSON = JSON.stringify(itemArray);

        var url = "{{ route('superadmin.sort_topics', ['slug' => ':slug']) }}";
        url = url.replace(":slug", slug);


        $.ajax({
            url: url,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            type: 'POST',
            data: {
                itemJSON: itemJSON
            },
            success: function(response) {
                $('.custom_success').addClass('active');
                $('.custom_success p').text('Topics have been sorted');
                setTimeout(function() {
                    $('.custom_success').removeClass('active');
                }, 5000);

                setTimeout(
                    function() {
                        location.reload();
                    }, 1000);

            },
            error: function(xhr) {
                var err = JSON.parse(xhr.responseText);
                alert(err.message);
            }
        });
    }
    onDomChange(function() {
        $('#topic-sort-btn').show();
    });
</script>
