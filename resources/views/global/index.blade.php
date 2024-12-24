<!DOCTYPE html>
<html>

<head>
    @include('global.seo')
    @include('global.external_scripts')
    @include('global.include_top')
</head>

<body>

    @include('global.header')
    @yield('content')
    @include('global.footer')
    @include('global.zendesk_widget')
    @include('modal')
    @include('global.include_bottom')
    @include('global.popup')

</body>

</html>
