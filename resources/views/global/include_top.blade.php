    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/global-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/plyr/plyr.css') }}" rel="stylesheet" />

    <!-- lms css -->
    @if (Route::getCurrentRoute() && Route::getCurrentRoute()->getPrefix() == '/growup-lms')
        <link href="{{ asset('assets/css/lms-signup.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/element-header.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/wow-js-new/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/lms-main.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'customer.growup.lms.subscription' || Route::currentRouteName() == 'customer.growup.lms.purchase.history')
        <link rel="stylesheet" href="{{ asset('assets/css/element-user.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />
    @endif

    @if (Route::currentRouteName() == 'home' || Route::currentRouteName() == 'product_academy')
        <link rel="stylesheet" href="{{ asset('assets/vendors/wow-js-new/animate.min.css') }}" />
        <link href="{{ asset('assets/css/home-2-product-details.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'web_applications')
        <link href="{{ asset('assets/css/web-application.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'blog' || Route::currentRouteName() == 'blog_details')
        <link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'docs' || Route::currentRouteName() == 'documentation_details' || Route::currentRouteName() == 'lms.help')
        <link href="{{ asset('assets/css/documentation.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'services' || Route::currentRouteName() == 'hire_us' || Route::currentRouteName() == 'lms.home')
        <link href="{{ asset('assets/css/service.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'terms_and_condition' || Route::currentRouteName() == 'privacy_policy' || Route::currentRouteName() == 'refund_policy' || Route::currentRouteName() == 'support_policy')
        <link href="{{ asset('assets/css/privacy.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'elements' ||
            Route::currentRouteName() == 'elements_package_pricing' ||
            Route::currentRouteName() == 'search_element_products' ||
            Route::currentRouteName() == 'element_product_details' ||
            Route::currentRouteName() == 'element_product_details_modal' ||
            Route::currentRouteName() == 'customer.element_checkout_success' ||
            Route::currentRouteName() == 'customer.dashboard' ||
            Route::currentRouteName() == 'customer.projects' ||
            Route::currentRouteName() == 'customer.project_details' ||
            Route::currentRouteName() == 'customer.project_create' ||
            Route::currentRouteName() == 'lms.home')
        <link href="{{ asset('assets/css/element-header.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'elements' ||
            Route::currentRouteName() == 'elements_package_pricing' ||
            Route::currentRouteName() == 'search_element_products' ||
            Route::currentRouteName() == 'element_product_details' ||
            Route::currentRouteName() == 'element_product_details_modal' ||
            Route::currentRouteName() == 'customer.wishlists')
        <link href="{{ asset('assets/css/element-home.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'services' ||
            Route::currentRouteName() == 'hire_us' ||
            Route::currentRouteName() == 'elements' ||
            Route::currentRouteName() == 'elements_package_pricing' ||
            Route::currentRouteName() == 'element_product_details' ||
            Route::currentRouteName() == 'element_product_details_modal' ||
            Route::currentRouteName() == 'customer.element_checkout_success' ||
            Route::currentRouteName() == 'customer.project_create' ||
            Route::currentRouteName() == 'superadmin.products.updater' ||
            Route::currentRouteName() == 'customer.milestone_invoice' ||
            Route::currentRouteName() == 'customer.subscription_details' ||
            Route::currentRouteName() == 'customer.purchase_history' ||
            Route::currentRouteName() == 'customer.purchase_invoice' ||
            Route::currentRouteName() == 'customer.wishlists' ||
            Route::currentRouteName() == 'customer.downloads' ||
            Route::currentRouteName() == 'customer.profile' ||
            Route::currentRouteName() == 'superadmin.documentation_details' ||
            Route::currentRouteName() == 'superadmin.element_products' ||
            Route::currentRouteName() == 'superadmin.product_create' ||
            Route::currentRouteName() == 'superadmin.product_edit' ||
            Route::currentRouteName() == 'superadmin.blog_create' ||
            Route::currentRouteName() == 'superadmin.edit_blog' ||
            Route::currentRouteName() == 'superadmin.project_create' ||
            Route::currentRouteName() == 'superadmin.project_edit' ||
            Route::currentRouteName() == 'superadmin.user_create' ||
            Route::currentRouteName() == 'superadmin.user_edit')
        <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />
    @endif

    @if (Route::currentRouteName() == 'customer.element_checkout_success' ||
            Route::currentRouteName() == 'elements_package_pricing' ||
            Route::currentRouteName() == 'element_product_details' ||
            Route::currentRouteName() == 'services' ||
            Route::currentRouteName() == 'elements' ||
            Route::currentRouteName() == 'customer.dashboard' ||
            Route::currentRouteName() == 'customer.projects' ||
            Route::currentRouteName() == 'customer.project_details' ||
            Route::currentRouteName() == 'customer.project_create' ||
            Route::currentRouteName() == 'customer.milestone_invoice' ||
            Route::currentRouteName() == 'customer.subscription_details' ||
            Route::currentRouteName() == 'customer.purchase_history' ||
            Route::currentRouteName() == 'customer.purchase_invoice' ||
            Route::currentRouteName() == 'customer.wishlists' ||
            Route::currentRouteName() == 'customer.downloads' ||
            Route::currentRouteName() == 'customer.profile' ||
            Route::currentRouteName() == 'superadmin.dashboard' ||
            Route::currentRouteName() == 'superadmin.products' ||
            Route::currentRouteName() == 'superadmin.products.updater' ||
            Route::currentRouteName() == 'superadmin.product_type' ||
            Route::currentRouteName() == 'superadmin.tags' ||
            Route::currentRouteName() == 'superadmin.documentation' ||
            Route::currentRouteName() == 'superadmin.edit_documentation' ||
            Route::currentRouteName() == 'superadmin.documentation_details' ||
            Route::currentRouteName() == 'superadmin.element_categories' ||
            Route::currentRouteName() == 'superadmin.element_products' ||
            Route::currentRouteName() == 'superadmin.product_create' ||
            Route::currentRouteName() == 'superadmin.product_edit' ||
            Route::currentRouteName() == 'superadmin.package_list' ||
            Route::currentRouteName() == 'superadmin.subscription_list' ||
            Route::currentRouteName() == 'superadmin.blogs' ||
            Route::currentRouteName() == 'superadmin.blog_create' ||
            Route::currentRouteName() == 'superadmin.edit_blog' ||
            Route::currentRouteName() == 'superadmin.service_packages' ||
            Route::currentRouteName() == 'superadmin.services' ||
            Route::currentRouteName() == 'superadmin.projects' ||
            Route::currentRouteName() == 'superadmin.project_create' ||
            Route::currentRouteName() == 'superadmin.project_details' ||
            Route::currentRouteName() == 'superadmin.project_edit' ||
            Route::currentRouteName() == 'superadmin.user_list' ||
            Route::currentRouteName() == 'superadmin.user_create' ||
            Route::currentRouteName() == 'superadmin.user_edit' ||
            Route::currentRouteName() == 'superadmin.system_settings' ||
            Route::currentRouteName() == 'superadmin.sitemap_settings' ||
            Route::currentRouteName() == 'superadmin.seo_settings' ||
            Route::currentRouteName() == 'superadmin.language.manage_language' ||
            Route::currentRouteName() == 'superadmin.payment_request' ||
            Route::currentRouteName() == 'superadmin.milestone_invoice')
        <link href="{{ asset('assets/css/element-user.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'elements' || Route::currentRouteName() == 'elements_package_pricing')
        <link href="{{ asset('assets/css/element-pricing.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'elements' || Route::currentRouteName() == 'element_product_details' || Route::currentRouteName() == 'element_product_details_modal')
        <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/venobox/venobox.min.css') }}" type="text/css" media="screen" />
        <link href="{{ asset('assets/css/element-details.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'services' || Route::currentRouteName() == 'element_product_details' || Route::currentRouteName() == 'element_product_details_modal')
        <link href="{{ asset('assets/vendors/plyr/plyr.css') }}" rel="stylesheet" />
    @endif

    @if (Route::currentRouteName() == 'customer.element_checkout_success')
        <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}" />
    @endif

    @if (Route::currentRouteName() == 'superadmin.product_create' || Route::currentRouteName() == 'superadmin.product_edit')
        <link rel="stylesheet" href="{{ asset('assets/vendors/tagify/tagify.css') }}" />
    @endif
    <link rel="stylesheet" href="{{ asset('assets/vendors/chosen/chosen.min.css') }}" />

    @if (Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register' || Route::currentRouteName() == 'lms.home')
        <link href="{{ asset('assets/css/signup.css') }}" rel="stylesheet" />
    @endif

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css') }}" />

    <title>CREATIVEITEM</title>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- <script src="{{ asset('assets/vendors/recaptcha/api.js') }}" async defer></script> -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
