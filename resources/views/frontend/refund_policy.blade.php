@extends('global.index')
@section('content')

<!-- Start Refund Policy Content -->
<section class="pt-80 pb-110">
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-lg-8 offset-lg-2">
                <div class="career-details">
                    <div class="c_header">
                        <h1 class="fz-24-sb-34-black pb-20">
                            {{ get_phrase('Refund Policy') }}
                        </h1>
                        <p class="info">
                            {{ get_phrase('Effective date: 1 January 2021') }}
                        </p>
                    </div>
                    <div class="c_body">
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Refund Policy') }}</h2>
                            <p class="c_text">
                                {{ get_phrase('Creativeitem provides a money-back policy only for sales on ') }}<a class="text-fast-blue" href="https://www.creativeitem.com/">https://www.creativeitem.com/</a> . {{ get_phrase('The Refund policy will be accepted when the product has a bug and which cant be resolved.') }}
                            </p>
                        </div>
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Before You Request a Refund') }}</h2>
                            <p class="c_text">
                                {{ get_phrase('You can request a refund if you desire one. But before you ask, you have to know') }}
                            </p>
                            <ol class="cd_list">
                                <li>{{ get_phrase('Read the products or services installation and documentation attentively.') }}</li>
                                <li>{{ get_phrase('By overviewing the comments page, you may find the solution to your issue.') }}</li>
                                <li>{{ get_phrase('Communicate with the author via the support tab on the item page ') }}({{ get_phrase('If available') }}).</li>
                                <li>{{ get_phrase('Make sure that the item or service is used for its designed function.') }}</li>
                                <li>{{ get_phrase('Search our website for the issue you are undergoing.') }}</li>
                            </ol>
                        </div>
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Refund Request Might Decline') }}</h2>
                            <ol class="cd_list">
                                <li>{{ get_phrase('The feature of the item or service doesnt exist.') }}</li>
                                <li>{{ get_phrase('After youve activated the thing, you dont want it.') }}</li>
                                <li>{{ get_phrase('After activating the item or service, it didnt meet your expectations.') }}</li>
                                <li>{{ get_phrase('Lack the knowledge to use the item.') }}</li>
                                <li>{{ get_phrase('You have changed your mind after purchases.') }}</li>
                            </ol>
                        </div>
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Links to Third-Party Website') }}</h2>
                            <p class="c_text">{{ get_phrase('Our services may connect with other websites or services through the links. We do not monitor others or third-party websites. So, to access the third-party website, you have to take your own risk. So be careful that Creativeitem shall not be responsible for any damage or cause by using the privacy practices, information, goods, data, options, and services made available on Third-Party Websites.') }}</p>
                            <p class="c_text">{{ get_phrase('We strongly suggest you read all terms and conditions, the privacy policies of other websites you visited.') }}</p>
                        </div>
                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Warranty') }}</h2>
                            <p class="c_text">{{ get_phrase('You have to agree that Creativeitem will not guarantee that our service or product will work on every browsing platform or support every version of WordPress. We also do not guarantee the activities of any other websites or third-party plugins, scripts, or applications. ') }}</p>
                            <p class="c_text">{{ get_phrase('If you disagree with any of the warrantys terms, then please terminate our services. However, if you want, you can constantly check our demo server to be sure about the issue of our products before purchasing. Our contact form is available at all times to assist you.') }}</p>
                        </div>

                        <!-- Changes and Closure of the Website -->
                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Account Termination and Suspension') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('Creativeitem has the right to terminate or delay your account or service instantly without providing any notice or liability. It might be because of any or all of the following issues') }}.</p>
                            <ol class="cd_list">
                                <li>{{ get_phrase('Your behavior is aggressive /abusive /exceeding negativity towards Creativeitems employees or other customers.') }}</li>
                                <li>{{ get_phrase('If you have made repeated libelous statements/ malicious statements or if you proclaim any false information against Creativeitem, or if your attempts to persuade potential consumers not to buy items from Creativeitem.') }}</li>
                                <li>{{ get_phrase('You try to promote other products and services on our site.') }}</li>
                                <li>{{ get_phrase('You are trying to contribute to any software piracy, hacking, spamming, or illegal work activity') }}.</li>
                                <li>{{ get_phrase('We believe that our customers accounts have been compromised, shared with others, or otherwise vulnerable. All decisions are final, and performances that have been canceled or suspended will not be reinstated.') }}</li>
                            </ol>
                            <p class="c_text">{{ get_phrase('We also believe that our customer confirms their agreement to all of the terms and conditions described above. All our services and products are made up of the terms and conditions records. It follows a procedure in which the client and the authority reach an agreement. By terminating, Creativeitem will limit the users access to the site for any reason whatsoever for a failure to comply with any of the terms or conditions outlined in this document. If a user refuses to fulfill any of the terms or conditions mentioned in this document, Creativeitem will terminate the users access to the site for any reason.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Refund Policy Content -->

@endsection