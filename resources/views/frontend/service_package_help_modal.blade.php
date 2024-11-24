<div class="modal-header pe-0">
    <div class="row justify-content-between w-100">
        <div class="col-lg-9 col-12">
            <div class="d-flex align-items-center">
                <h1 class="modal-title">{{ $feature->name }}{{ get_phrase('Package') }}  :</h1>
                @if($feature->name == 'Pro')
                    <span class="model-title-value mb-0">{{ get_phrase('Included Basic Packages') }}  </span>
                @elseif($feature->name == 'Business')
                    <span class="model-title-value mb-0">{{ get_phrase('Included Professional & Business Packages') }}  </span>
                @else
                    <span class="model-title-value mb-0"></span>
                @endif
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="bar-controls d-flex text-sm-center align-items-center justify-content-end p-0 ps-4">
                <h1 class="modal-title">${{ $feature->discounted_price }}</h1>
                <button type="button" class="ciBtn ciBtn-primary ms-2" onclick="buyNowModal('{{ route('service_buy_now', ['service_id' => $feature->id]) }}')" data-bs-dismiss="modal" aria-label="Close">{{ get_phrase('Buy Now') }}</button>
                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<div class="modal-body">
    <div class="row justify-content-center">
        <h2 class="service-help-txt">{{ get_phrase('Service Details') }} </h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            @foreach($oddServices as $service)
                <div class="service-help-item">
                    <h2 class="service-help-header">{{ $service['feature'] }}</h2>
                    <div class="service-help-body">{{ $service['note'] }}</div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-6 col-md-12">
            @foreach($evenServices as $service)
                <div class="service-help-item">
                    <h2 class="service-help-header">{{ $service['feature'] }}</h2>
                    <div class="service-help-body">{{ $service['note'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
