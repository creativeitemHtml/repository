<form class="cForm-wrap" id="checkout-form" action="{{ route('purchase_service_package', ['package_id' => $feature->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <h1 class="modal-title pb-3">{{ get_phrase('Billing Address') }}</h1>
            @if(Auth::check())
                <div class="cFormInput-wrap">
                    <input type="text" class="form-control eForm-control checkout" id="name" name="name" value="{{ Auth::user()->name }}" disabled />
                </div>
                <div class="cForm-wrap">
                    <div class="cFormInput-wrap">
                        <input type="email" class="form-control eForm-control checkout" id="email" name="email" value="{{ Auth::user()->email }}" disabled />
                    </div>
                </div>
            @else
                <div class="cForm-wrap">
                    <div class="cFormInput-wrap">
                        <input type="email" class="form-control eForm-control checkout" id="email" name="email" placeholder="Your Email" aria-label="Your Email" required />
                    </div>
                </div>
                <div class="eCheckbox eCheckbox-2 d-flex flex-column g-20 pt-11">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="createAccount" checked disabled />
                        <label class="form-check-label" for="createAccount">{{ get_phrase('Create an account') }}</label>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-lg-2 col-md-12"></div>
        <div class="col-lg-4 col-md-12">
            <h1 class="modal-title pb-3">{{ get_phrase('Order Summary') }}</h1>

            <div class="mr-25 bd-all bd-r-10">
                <div class="eCheckbox planCheck-wrap">
                    <div class="nav flex-column nav-pills planCheck" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="form-check check-custom">
                            <div class="row">
                                <div class="col-9">
                                    <label class="eForm-label cus-label" for="flexCheckBasic">{{ $feature->name }}</label>
                                </div>
                                <div class="col-3 cus-label text-end">
                                    <p>${{ $feature->discounted_price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mr-25 py-20 d-flex justify-content-between align-items-center flex-wrap g-10">
                <h4 class="fz-18-sb-black">{{ get_phrase('Total') }}</h4>
                <h4 class="fz-18-sb-black" id="selected-package-price"> ${{ $feature->discounted_price }}</h4>
            </div>

            <div class="pb-20 mr-25">
                <div class="content">
                    <div class="cForm-wrap">
                        <button type="submit" class="checkout-order-btn">{{ get_phrase('Complete order') }}</button>
                    </div>
                </div>
            </div>

            <div class="elitem-allFile mb-10">
                <img src="https://creativeitem.com/public/assets/img/icon/lock.svg" alt="">
                <p>{{ get_phrase('Secure Checkout') }}</p>
            </div>
        </div>
    </div>
</form>
