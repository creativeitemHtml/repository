@extends('global.index')
@section('content')

<!-- Start Privacy Policy Content -->
<section class="pt-80 pb-110">
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-lg-8 offset-lg-2">
                <div class="career-details">
                    <div class="c_header">
                        <h1 class="fz-24-sb-34-black pb-20">
                            {{ get_phrase('Privacy Policy') }}
                        </h1>
                        <p class="info">
                           {{ get_phrase(' Effective July') }} 18, 2021
                        </p>
                    </div>
                    <div class="c_body">

                        <div class="c_info">
                            <h2 class="cd_title pb-20">{{ get_phrase('Welcome to Privacy Policy') }}</h2>
                            <p class="c_text">
                                {{ get_phrase('Creativeitem is committed to protecting your information and privacy. We will describe how we collect, use, and publish your personal information or data when you visit, subscribe, register, or purchase from Creativeitem in our privacy policy.') }}
                            </p>
                            <p class="c_text">
                                {{ get_phrase('Creativeitem will ensure that your information and data will not share or use with anyone except as described in this Privacy Policy. Before using the product of Creativeitem, ') }}<span class="fw-bolder">{{ get_phrase('please read the Privacy Policy carefully.') }}</span>
                            </p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Your Personal Information that We Collect') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('We automatically collect your info when you visit our website. Like - we collect information about your device, web browser, IP address,  timezone, and some cookies that have been installed on your device of some kind.') }}</p>
                            <ol class="cd_list">
                                <li>{{ get_phrase('Information that you provide.') }}</li>
                                <li>{{ get_phrase('Information that we collect automatically.') }}</li>
                            </ol>
                            <p class="c_text">{{ get_phrase('We also believe that our customer confirms their agreement to all of the terms and conditions described above. All our services and products are made up of the terms and conditions records. It follows a procedure in which the client and the authority reach an agreement. By terminating, Creativeitem will limit the users access to the site for any reason whatsoever for a failure to comply with any of the terms or conditions outlined in this document. If a user refuses to fulfill any of the terms or conditions mentioned in this document, Creativeitem will terminate the users access to the site for any reason.') }}</p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">1. {{ get_phrase('Information That You Provide') }}</h2>
                            <ul class="cd_list_2">
                                <li>
                                    1(A). {{ get_phrase('Name and Email') }}
                                </li>
                            </ul>
                            <p class="c_text">
                                {{ get_phrase('Sometimes, Creativeitem will request your name (first and last name) and email address. When you join up for our newsletter, for example, you have shared this information with us.') }}
                            </p>
                            <p class="c_text pb-2">
                                {{ get_phrase('If you contact us through our website or request any inquiry or any questions you want to ask, we will ask you to provide your name and email address.') }}
                            </p>
                            <ul class="cd_list_2">
                                <li>
                                    1(B). {{ get_phrase('Additional Information') }}
                                </li>
                            </ul>
                            <p class="c_text">
                                {{ get_phrase('If you try to contact us through email, website, or any social media, we will collect additional information from you. Such as a business address, the company on whose behalf you are approaching us, the country in which the company is based, and the content of any messages or attachments you send us, as well as any other information you want to share with us.') }}
                            </p>
                            <p class="c_text pb-2">
                                {{ get_phrase('All personal information must be accurate, complete, and confirmed that you provide to us. If you want to change or edit your personal information, you must inform us.') }}
                            </p>
                            <ul class="cd_list_2">
                                <li>
                                    1(C). {{ get_phrase('Account Data') }}
                                </li>
                            </ul>
                            <p class="c_text pb-2">
                                {{ get_phrase('If you subscribe or make any purchase from Creativeitem, we will use the account data. In this Account Data, you have to provide your name, email, address, password, and other personal information.') }}
                            </p>
                            <ul class="cd_list_2">
                                <li>
                                    1(D).{{ get_phrase(' Service Data') }}
                                </li>
                            </ul>
                            <p class="c_text pb-2">
                                .{{ get_phrase('The service data may contain information about your website, how you used our service, your server settings, your WordPress installation, and your requested questions') }}
                            </p>
                            <ul class="cd_list_2">
                                <li>
                                    1(E). {{ get_phrase('Financial Data') }}
                                </li>
                            </ul>
                            <p class="c_text">
                               {{ get_phrase(' When you purchase Creativeitem, you have to provide your name, email, address, bank account, payment card details, and other financial pieces of information.') }}
                            </p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">2. {{ get_phrase('Information That We Collect Automatically') }}</h2>
                            <p class="c_text">
                                {{ get_phrase('We automatically collect your info when you visit our website. Like - information about your device, web browser(type and version), IP address, operating system, referral source, time of visit, page views, and website navigation paths, timezone, and some cookies that have been installed on your device and other technical information.') }}
                            </p>
                            <p class="c_text">
                                {{ get_phrase('To assist us in measuring traffic and usage trends on the website, we use analytic tools. These tools help us to collect the information from your device. It also includes the web page you visit, add-ons, and other data that allow us to develop the website. We collect and combine these analytics statistics from other users not reasonably to identify a specific individual user.') }}
                            </p>
                            <p class="c_text">
                                {{ get_phrase('We collect and store information and activities about how you use and browse our website. This information may contain user data.') }}
                            </p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('How Do We Use Your Personal Information') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('Creativeitem will only use your personal information with your permission or for another legally permissible cause. We collect and use your data for a particular purpose. We will only use your personal information when we have a valid and reasonable reason to do so. Creativeitem uses your personal information') }}</p>
                            <ol class="cd_list">
                                <li>{{ get_phrase('To notify or communicate with you.') }}</li>
                                <li>{{ get_phrase('To avoid the potential risk and fraud.') }}</li>
                                <li>{{ get_phrase('To use the information for invoice purposes.') }}</li>
                            </ol>
                            <p class="c_text">{{ get_phrase('Collecting information about how our customers browse and interact with the site and assessing the success of our marketing and advertising activities. We also use the information to improve and optimize our site. For example, we gather data on how our consumers browse and interact with the site and assess the efficacy of our marketing and advertising efforts.') }}</p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Sharing Your Personal Information') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('Sometimes we share your personal information with other parties to help us by using your personal information. For example - We use Envato to fuel our online store. You can read more about how Envato uses your data here - www.enato.privacy.com. We also utilize Google Analytics to learn more about how our visitors interact with the site.') }}</p>
                            <p class="c_text">{{ get_phrase('Information audits are used to identify, categorize, and document all personal data processed outside of the firm, guaranteeing that the information, processing activity, processor, and legal justification are all recorded, evaluated, and readily available. Examples of external processing include') }} ({{ get_phrase('but are not limited to') }})</p>
                            <ol class="cd_list">
                                <li>{{ get_phrase('For IT System and Service') }}</li>
                                <li>{{ get_phrase('For juridical Service') }}</li>
                                <li>{{ get_phrase('For Digital Marketing Service') }}</li>
                                <li>{{ get_phrase('For the payment process') }}</li>
                            </ol>
                            <p class="c_text">{{ get_phrase('Creativeitem may be legally required to share certain information and data. Creativeitem will not notify you to share your personal information with public authorities or governmental bodies.') }}</p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Do not track') }}
                            </h2>
                            <p class="c_text">
                                {{ get_phrase('Creativeitem does not alter our customers data and uses or practice when we notify a Do Not Track signal from your browser. Do Not Track is a browser preference that lets websites know that you do not want to be monitored.') }}
                            </p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Your rights') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('You have the following rights on the Creativeitem') }}</p>
                            <ol class="cd_list">
                                <li>{{ get_phrase('You have the right to know when we collect and use your personal information.') }}</li>
                                <li>{{ get_phrase('You have the right to get a confirmation of the personal information we have on you.') }}</li>
                                <li>.{{ get_phrase('You have the right to edit or customize your personal information if any of them is unfinished or inaccurate') }}</li>
                                <li>{{ get_phrase('You have the right to request to dispose of any of your personal information that we have.') }}</li>
                                <li>{{ get_phrase('You have the right to get your data used in a particular way.') }}</li>
                                <li>{{ get_phrase('You have the right to request that your data be used for a specific purpose.') }}</li>
                            </ol>
                            <p class="c_text">{{ get_phrase('If you have provided us any data, personal information, or create an account on this site, agreed to use our cookies, left any comment, you have the right to request a transcript of data we hold about you in an export file. You can also request to delete or edit any personal information we hold. This policy does not include any personal information we are obliged to keep for legal, executive, or security motives.') }}</p>
                            <p class="c_text">{{ get_phrase('If you want to delete all your information from our site, we will no longer provide you with any product-related support or services.') }}</p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Data retention') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('Creativeitem records your information when you make any purchase from our site. We record your data until you request to dispose of or delete this data.') }}</p>
                            <p class="c_text">{{ get_phrase('We will secure your information as long as your account is active to provide you with services. You can dispose of your account by requesting us from our site if you want. After that, we will no longer use the personal information that we have.') }}</p>
                            <p class="c_text">{{ get_phrase('But Creativeitem can use your personal information as necessary to consent with our legal liabilities, enforce our agreements, and solve the altercation.') }}</p>
                        </div>

                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                               {{ get_phrase(' Childrens Privacy') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('Our website is not designed for children. Creativeitem does not knowingly collect information, sell products or provide our services to the children. If your age is under 18, please do not provide any personal information to our site.') }}</p>
                            <p class="c_text">{{ get_phrase('If you think a minor under 18 has given us Personal Data online, please contact us at www.creativeitem.com. But, if we detect that we have collected Personal Information from minors under 18 without parental consent, we will delete the information from our site.') }}</p>
                        </div>


                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Changes') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('Creativeitem has the right to update, change or edit the Privacy Policy from time to time at the authoritys sole discretion. Also, we can update this policy for legal or regulatory reasons.') }}</p>
                            <p class="c_text">{{ get_phrase('You are requested to overview the privacy policy periodically. We will inform you through the email address you have provided us, or we will make a prominent announcement on our website to make any significant change to this Privacy Policy. Any modifications will take effect after we announce them on our website.') }}</p>
                            <p class="c_text">{{ get_phrase('If you do not comply with our Privacy agreement, we request you stop using our products and services immediately.') }}</p>
                        </div>


                        <div class="c_info">
                            <h2 class="cd_title pb-20">
                                {{ get_phrase('Contact Us') }}
                            </h2>
                            <p class="c_text">{{ get_phrase('If you have any doubt or question about our terms and conditions, please try to contract with us, or you can visit our website') }} <a class="text-fast-blue" href="https://www.creativeitem.com/">https://www.creativeitem.com/</a>{{ get_phrase(' You can also email us. Our email ID') }}:  <a class="text-fast-blue" href="support@creativeitem.com">support@creativeitem.com</a></p>
                            <p class="c_text fw-bolder">{{ get_phrase('You can also follow us on social media.') }}</p>
                            <div class="c-ling-text-wrap">
                                <p class="c_text">{{ get_phrase('Facebook') }}:<a class="text-fast-blue" href="https://www.facebook.com/CreativeitemApps">https://www.facebook.com/CreativeitemApps</a></p>
                                <p class="c_text">{{ get_phrase('Instagram') }}:<a class="text-fast-blue" href="https://www.instagram.com/creativeitem.developers/">https://www.instagram.com/creativeitem.developers/</a></p>
                                <p class="c_text">{{ get_phrase('Linkedin') }}:<a class="text-fast-blue" href="https://www.linkedin.com/company/creativeitem">https://www.linkedin.com/company/creativeitem</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Privacy Policy Content -->

@endsection