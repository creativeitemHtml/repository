<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

	@include('global.include_top')

</head>
<body>
    
	@include('global.header')

	@yield('content')

	@include('global.zendesk_widget')

	@include('modal')

	@include('global.include_bottom')
</body>
</html>