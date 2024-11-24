<div class="admin_main_right p-30 bd-r-5 mb-60">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
        <button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="eSection-wrap pb-2">
                <ul class="nav nav-tabs eNav-Tabs-custom"id="myTab"role="tablist" >
    
                    <?php if(isset($edit_profile)):?>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link active"
                        id="upcoming-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#editphrase"
                        type="button"
                        role="tab"
                        aria-controls="editphrase"
                        aria-selected="false"
                      >
                      {{ get_phrase('Edit phrase ') }}
                        <span></span>
                      </button>
                    </li>
                    <?php endif;?>
    
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link {{ empty($edit_profile) ? 'active':'' }}"
                        id="upcoming-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#languagelist"
                        type="button"
                        role="tab"
                        aria-controls="languagelist"
                        aria-selected="false"
                      >
                      {{ get_phrase('Language list ') }}<p class="badge bg-success ">
                        {{ count($languages) }}
                    </p>
                        <span></span>
                      </button>
                    </li>
    
    
                    <li class="nav-item" role="presentation">
                        <button
                          class="nav-link"
                          id="archive-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#addlanguage"
                          type="button"
                          role="tab"
                          aria-controls="addlanguage"
                          aria-selected="false"
                        >
                        {{ get_phrase('Add language') }}
                          <span></span>
                        </button>
                    </li>
                </ul>
    
                <div class="tab-content eNav-Tabs-content" id="nav-tabContent">
    
                    <?php if (isset($edit_profile)):
                        $current_editing_language	=	$edit_profile;
                    ?>
                    <div class="tab-pane fade {{ !empty($edit_profile) ? 'show active':'' }} pt-3  " id="editphrase" role="tabpanel" aria-labelledby="editphrase-tab">
                        <div class="row">
                            <?php foreach ($phrases as $key => $phrase): ?>
                            <div class="col-md-3">
                              <div class="eCard eCard-2">
                                <div class="eCard-body">
                                  <p class="eCard-text text-center translation-fields">
                                      <label for="text" class="eForm-label ">{{ $phrase->phrase }}</label>
                                    <input type="text" class="form-control eForm-control" name="updated_phrase" id = "phrase-<?php echo $phrase->id; ?>" value="<?php echo $phrase->translated; ?>">
                                  </p>
                                  <div class="d-flex flex-column align-items-start align-items-md-center mt-3">
                                    <a href="javascript:void(0)" class="new-project-btn new-project-btn-desktop update-translation-fields" id="btn-<?php echo $phrase->id; ?>" onclick="updatePhrase('<?php echo $phrase->phrase; ?>', '{{ $current_editing_language }}', '<?php echo $phrase->id; ?>')">{{ get_phrase('Update') }}</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php endforeach; ?>


                            <button type="button" class="btn-main new-project-btn" onclick="replaceInputData()">Replace input field data</button>
                            <button type="button" class="btn-main new-project-btn"  onclick="replaceInputDataUpdate()">Update Now</button>
                            
                            
                        </div>
                    </div>
                    <?php endif;?>
    
                    <div class="tab-pane fade {{ empty($edit_profile) ? 'show active':'' }} " id="languagelist" role="tabpanel" aria-labelledby="languagelist-tab">
                        <div class="table-responsive-sm">
                            <table class="table eTable">
                                <thead>
                                    <tr>
                                        <th>{{ get_phrase('Language') }}</th>
                                        <th>{{ get_phrase('Option') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($languages as $language)
                                    <tr>
                                        <td>{{ ucwords($language->name) }}</td>
                                        <td>
                                            <a href="{{ route('superadmin.language.manage_language', [$language->name]) }}">
                                                <button type="button" class="btn-form btn-sm">{{ get_phrase('Edit phrase') }}</button>
                                            </a>
                                            @if($language->name != 'english')
                                            <button type="button" class="btn-form btn-danger btn-sm" onclick="confirmModal('{{ route('superadmin.language.delete', ['name' => $language->name]) }}', 'undefined')">{{ get_phrase('Delete language') }}</button>
                                            @else
                                            <button type="button" class="btn-form btn-danger btn-sm" onclick="notify()">{{ get_phrase('Delete language') }}</button>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
    
                    <div class="tab-pane fade pt-3  " id="addlanguage" role="tabpanel" aria-labelledby="addlanguage-tab">
                        <div class="row">
                            <div class="col-xl-5">
                                <form class="" action="{{ route('superadmin.language.language_add') }}" method="post">
                                    @csrf
                                    <div class="fpb-7">
                                        <label for="language" class="eForm-label">{{ get_phrase('Add new language') }}</label>
                                        <input type="text" id="language" required name="language" class="form-control eForm-control" placeholder="{{ get_phrase('No special character or space is allowed') }}">
                                        <p class="eCard-text">
                                            {{ get_phrase('Valid examples').' : French, Spanish, Bengali etc' }}
                                        </p>
                                    </div>
                                    <button type="submit" class="btn-form">{{ get_phrase('Save') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	
	"use strict";

	function notify() {
		toastr.warning('{{ get_phrase('System default language can not be removed') }}');
	}

	function updatePhrase(phrase, language, phrase_id) {
		$('#btn-'+phrase).text('...');
		var updatedValue = $('#phrase-'+phrase_id).val();
		let url = "{{ route('superadmin.language.update_phrase', ['language' => ":language"]) }}";
		url = url.replace(":language", language);
		$.ajax({
			url  : url,
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			data : {updatedValue : updatedValue, currentEditingLanguage : language, phrase : phrase},
			success : function(response) {
				$('#btn-'+phrase_id).html('{{get_phrase('Updated')}}');
				toastr.success('Phrase updated');
				
			}
		});
	}




    function replaceInputData(){
        $('.translation-fields:not(.added)').each(function(index){

            var element = $(this);
            // setTimeout(function(){
                var translated_text = element.find('label').text();
                element.find('input').val(translated_text);
                element.addClass('added');
                console.log(translated_text)
            // }, index * 500); // index * 1000 will delay each by 1 second
        });
    }

    function replaceInputDataUpdate(){
        
        $('.update-translation-fields').each(function(index){
            var element = $(this);
            setTimeout(function(){
                element.click();
                element.addClass('d-none');
            }, index * 1000); // index * 1000 will delay each by 1 second
        });

    }

    

</script>

