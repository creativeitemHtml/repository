@extends('global.index')
@section('content')

<!-- New Service Start -->
<section class="eService pt-30">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center pb-60">
                    <h2 class="fz-34-sb-black pb-15">{{ get_phrase('Ready Services For Your Website') }}</h2>
                    <p class="fz-16-m-black-2"> {{ get_phrase('Select any package or choose from our services to meet your needs.') }}</p>
                    <div class="btn-control justify-content-center align-items-center d-flex">
                        <a href="{{ route('services') }}" class="active">{{ get_phrase('Ready Plans') }}</a>
                        <a href="{{ route('hire_us') }}" class="">{{ get_phrase('New Project') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="tab-left">
                    <div class="Etop">
                        <h4>{{ get_phrase('Select a Product') }}</h4>
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($products as $product)
                            <button class="nav-link {{ $product->slug == 'academy-lms' ? 'active' : '' }}" id="v-pills-{{ $product->slug }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $product->slug }}" type="button" role="tab" aria-controls="v-pills-{{ $product->slug }}" aria-selected="true">
                                <div class="eNav d-flex">
                                    <div class="image">
                                        @if($product->slug == 'academy-lms')
                                            <img src="{{ asset('assets/img/icon/academy.svg') }}" alt="">
                                        @else
                                            <img src="{{ asset('assets/img/icon/ekattor8.svg') }}" alt="">
                                        @endif                     
                                    </div>
                                    <div class="motion">
                                        <h5>{{ $product->name }}</h5>
                                        <span>{{ get_phrase('3 Package') }}</span>
                                    </div>
                                </div>
                            </button>
                            @endforeach
                    
                        </div>
                    </div>

                    <div class="large-show">
                        <div class="support">
                            <h4>{{ get_phrase('Contact For Support') }}</h4>
                            <ul>
                                <li>
                                    <a href="http://support.creativeitem.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Zendesk">
                                    <img src="{{ asset('assets/img/icon/zendesk-service.svg') }}" alt="" >
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.link/izd8dl" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Whatsapp">
                                    <img src="{{ asset('assets/img/icon/whatsapp-service.svg') }}" alt="" >
                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/creativeitem_elements" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Telegram">
                                    <img src="{{ asset('assets/img/icon/telegram-service.svg') }}" alt="" >
                                    </a>
                                </li>
                                <li>
                                    <a href="https://m.me/creativeitemApps" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messenger">
                                    <img src="{{ asset('assets/img/icon/messenger-service.svg') }}" alt="" >
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <a href="" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="w-100">
                            <div class="support video-sup d-flex align-items-center">
                                <span>
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.77781 20C2.77645 19.9957 1.81729 19.5627 1.10956 18.7956C0.401841 18.0285 0.00298422 16.9894 0 15.9051V4.09073C1.68461e-05 3.37265 0.174588 2.66722 0.506167 2.04535C0.837746 1.42348 1.31465 0.907075 1.88895 0.548042C2.46325 0.189008 3.1147 -4.56059e-06 3.77784 0C4.44097 4.56076e-06 5.09243 0.189027 5.66672 0.548068L15.1113 6.45524C15.6855 6.8143 16.1624 7.33071 16.4939 7.95257C16.8255 8.57444 17 9.27985 17 9.9979C17 10.716 16.8255 11.4214 16.4939 12.0432C16.1624 12.6651 15.6855 13.1815 15.1113 13.5406L5.66672 19.4477C5.09294 19.8086 4.44136 19.9991 3.77781 20Z" fill="white"/>
                                    </svg>
                                </span>
                                <h4>{{ get_phrase('How it Works!') }}</h4>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="tab-right">
                    <div class="tab-content" id="v-pills-tabContent">
                        @foreach($products as $product)
                        <div class="tab-pane fade {{ $product->slug == 'academy-lms' ? 'show active' : '' }}" id="v-pills-{{ $product->slug }}" role="tabpanel" aria-labelledby="v-pills-{{ $product->slug }}-tab" tabindex="0">
                            <div class="row">
                                <p class="package-title">Select a Package</p>
                                @php
                                $service_packages = $product->product_to_service_package;
                                @endphp
                                @foreach($service_packages as $pos => $feature)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="package-plan">
                                        <div class="most d-flex">
                                            <h4>{{ $feature->name }}</h4>
                                            @if($feature->name == 'Pro')
                                            <span>{{ get_phrase('Most Popular') }}</span>
                                            @endif
                                            <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="Learn More" style="cursor: pointer;" onclick="commonModal('{{ route('service_help', ['service_id' => $feature->id]) }}')">
                                                <img src="{{ asset('assets/img/icon/help.svg') }}" alt="" >
                                            </a>
                                        </div>
                                        <span>${{ $feature->discounted_price }} <del class="del_text">${{ $feature->price }}</del></span>
                                        <ul class="plan">
                                            @php
                                            $service_features = json_decode($feature->services, true);
                                            @endphp
                                            @foreach($service_features as $index => $service_feature)
                                            <li class="d-flex align-items-center">
                                                @if($pos == 0 || $index != 0)
                                                <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.79844 13C6.49844 13 6.29844 12.9 6.09844 12.7L1.19844 7.49997C0.798438 7.09997 0.798438 6.49997 1.19844 6.09997C1.59844 5.69997 2.19844 5.69997 2.59844 6.09997L6.69844 10.5L15.0984 1.29997C15.3984 0.899971 16.0984 0.79997 16.4984 1.09997C16.8984 1.39997 16.9984 2.09997 16.6984 2.49997L16.5984 2.59997L7.49844 12.6C7.39844 12.9 7.09844 13 6.79844 13Z" fill="#02BC7D"/>
                                                </svg>
                                                @endif
                                                @if($pos == 0 || $index != 0)
                                                <p>{{ $service_feature['feature'] }}</p>
                                                @else
                                                <p class="service-feature">{{ $service_feature['feature'] }}</p>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                        <a href="javascript:;" class="buy-btn" onclick="buyNowModal('{{ route('service_buy_now', ['service_id' => $feature->id]) }}')">{{ get_phrase('Buy Now') }}</a>
                                        <a href="javascript:;" class="need-text" onclick="commonModal('{{ route('service_help', ['service_id' => $feature->id]) }}')">{{ get_phrase('Learn More') }}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @php
                            $services = $product->product_to_service;
                            @endphp
                            @if(count($services))
                            <p class="package-title mt-3">{{ get_phrase('or, customize your package') }}</p>
                            <div class="eg_row">
                                <p class="epack ml-65">{{ get_phrase('Service List:') }}</p>
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 right-border">
                                        <div class="eCheck">
                                            @foreach($services as $index => $service)
                                            @if($index % 2 == 0)
                                            <div class="single-eCheck d-flex justify-content-between align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input service-checkbox" type="checkbox" value="{{ $service->id }}" data-price="{{ $service->price }}" id="{{ $service->id }}">
                                                    <label class="form-check-label" for="{{ $service->id }}">{{ $service->name }}</label>
                                                </div>
                                                <span>${{ $service->price }}</span>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 right-border">
                                        <div class="eCheck">
                                            @foreach($services as $index => $service)
                                            @if($index % 2 !== 0)
                                            <div class="single-eCheck d-flex justify-content-between align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input service-checkbox" type="checkbox" value="{{ $service->id }}" data-price="{{ $service->price }}" id="{{ $service->id }}">
                                                    <label class="form-check-label" for="{{ $service->id }}">{{ $service->name }}</label>
                                                </div>
                                                <span>${{ $service->price }}</span>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12 d-flex align-items-center">
                                        <div class="eCheck eCheck-price">
                                            <p>Total Amount{{ get_phrase('') }}</p>
                                            <h5 id="total-amount">$0</h5>
                                            <span id="service-count">0 Service Selected</span>
                                            <a href="javascript:;" class="buy-btn" id="custom-buy">{{ get_phrase('Buy Now') }}</a>
                                            <a href="javascript:;" class="need-text" onclick="commonModal('{{ route('service_custom_help', ['product_id' => $product->id]) }}')">{{ get_phrase('Learn More') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif


                        </div>
                        @endforeach
                    </div>                    
                </div>

                <div class="small-show tab-left">
                    <div class="support">
                        <h4>{{ get_phrase('Contact For Support') }}</h4>
                        <ul>
                            <li>
                                <a href="http://support.creativeitem.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Zendesk">
                                    <img src="{{ asset('assets/img/icon/zendesk-service.svg') }}" alt="" >
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.link/izd8dl" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Whatsapp">
                                    <img src="{{ asset('assets/img/icon/whatsapp-service.svg') }}" alt="" >
                                </a>
                            </li>
                            <li>
                                <a href="https://t.me/creativeitem_elements" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Telegram">
                                    <img src="{{ asset('assets/img/icon/telegram-service.svg') }}" alt="" >
                                </a>
                            </li>
                            <li>
                                <a href="https://m.me/creativeitemApps" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messenger">
                                    <img src="{{ asset('assets/img/icon/messenger-service.svg') }}" alt="" >
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <a href="" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="w-100">
                        <div class="support video-sup d-flex align-items-center">
                            <span>
                                <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.77781 20C2.77645 19.9957 1.81729 19.5627 1.10956 18.7956C0.401841 18.0285 0.00298422 16.9894 0 15.9051V4.09073C1.68461e-05 3.37265 0.174588 2.66722 0.506167 2.04535C0.837746 1.42348 1.31465 0.907075 1.88895 0.548042C2.46325 0.189008 3.1147 -4.56059e-06 3.77784 0C4.44097 4.56076e-06 5.09243 0.189027 5.66672 0.548068L15.1113 6.45524C15.6855 6.8143 16.1624 7.33071 16.4939 7.95257C16.8255 8.57444 17 9.27985 17 9.9979C17 10.716 16.8255 11.4214 16.4939 12.0432C16.1624 12.6651 15.6855 13.1815 15.1113 13.5406L5.66672 19.4477C5.09294 19.8086 4.44136 19.9991 3.77781 20Z" fill="white"/>
                                </svg>
                            </span>
                            <h4>{{ get_phrase('How it Works!') }}</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- New Service End -->

<!-- Start Faqs -->
<section class="faq">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center pb-60">
                    <h2 class="fz-34-sb-black pb-15">{{ get_phrase('Faqs') }}</h2>
                    <p class="fz-16-m-black-2">{{ get_phrase('Here are some helpful answers to your common questions and queries regarding our services') }}</p>
                </div>
            </div>
        </div>
        <!-- Faqs Items -->
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-12">
                <div class="faq-img">
                    <img src="{{ asset('assets/img/product-item/faq-img.png') }}" alt="...">
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="faq-wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ get_phrase('What is a service?') }}</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('Services are a task list that we will do dedicatedly to build your website. We will take all the technical liabilities to build the website from scratch and make your life easier.') }} {{ get_phrase('Services are categorized in several packages according to your needs & purposes. Also, you can choose specific service(s) if you don not require a complete package') }}.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">{{ get_phrase('What services will I get in the Pro package?') }}</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('In the "Pro package", you will get the services listed above along with the features from the "Basic package".') }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ get_phrase('What services will I get in the Business package?') }}</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('In the "Business package", you will get the services listed above along with the features from the both "Basic package" & "Pro package".') }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">{{ get_phrase('How can I purchase a service package?') }}</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('To purchase one of our service packages, simply choose the package that suits your needs and click on the "buy now" button. Once you have completed the payment, the selected package will be yours, and our team will initiate the service process. It is that simple!') }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">{{ get_phrase('How can I choose specific services without purchasing any packages?') }}</button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('You have the flexibility to select specific services from our pre-defined service list, and you will only be charged for those particular services. This allows you to tailor your experience based on your specific requirements.') }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">{{ get_phrase('How long will the packages be valid?') }}</button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('The package will be valid for 3 months from the date of purchase. During this period, you can avail the services included in the package. Please note that each package is offered for one-time use.') }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">{{ get_phrase('How will I get the support?') }}</button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('We have a reliable and dedicated tech support team ready to assist you. If you encounter any issues, feel free to reach out to us through our Zendesk, email, or Telegram support channels. Your concerns are our priority, and we will be there to help promptly.') }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">{{ get_phrase('What if my required features are not available on your service list?') }}</button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ get_phrase('If you do not find your required feature in our service list, simply click on the "New Project" tab and provide details about your specific requirements. We will create a customized quotation for you and send it to your email for further consideration.') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Faqs -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal service-modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="service_pause()">x</button>
            </div>
            <div class="modal-body">
                <div id="player2" data-plyr-provider="youtube" data-plyr-embed-id="XZePsCuSOtU"></div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.service-checkbox');
        const totalAmountElement = document.getElementById('total-amount');
        const serviceCountElement = document.getElementById('service-count');
        const buyButton = document.querySelector('#custom-buy');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateSummary);
        });

        if (buyButton) {
            buyButton.addEventListener('click', function() {
                const selectedServices = [];
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        selectedServices.push(checkbox.value);
                    }
                });

                if (selectedServices.length > 0) {
                    const route = `{{ route('checkout_custom_service') }}?services=${selectedServices.join(',')}`;
                    buyNowModal(route);
                } else {
                    toastr.warning('Please select at least one service.');
                }
            });
        }

        function updateSummary() {
            let totalAmount = 0;
            let serviceCount = 0;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    totalAmount += parseFloat(checkbox.getAttribute('data-price'));
                    serviceCount++;
                }
            });

            totalAmountElement.textContent = `$${totalAmount.toFixed(2)}`;
            serviceCountElement.textContent = `${serviceCount} Service${serviceCount !== 1 ? 's' : ''} Selected`;
        }
    });


    function buyNowModal(route) {
        // Implementation for buyNowModal
        // Example: open a modal or redirect to the route
        window.location.href = route;
    }

</script>