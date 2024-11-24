<div class="modal-header">
    <h1 class="modal-title">Custom Services :</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="row justify-content-center">
        <h2 class="service-help-txt">{{ get_phrase('Service Details') }} </h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            @foreach($oddServices as $service)
                <div class="service-help-item">
                    <h2 class="service-help-header">{{ $service['name'] }}</h2>
                    <div class="service-help-body">{{ $service['note'] }}</div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-6 col-md-12">
            @foreach($evenServices as $service)
                <div class="service-help-item">
                    <h2 class="service-help-header">{{ $service['name'] }}</h2>
                    <div class="service-help-body">{{ $service['note'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
