<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{env('APP_NAME')}}</title>

    <link rel="stylesheet" href="{{env('APP_URL')}}/css/main_theme.css">

</head>

<body class="text-center" id="app-body">
    @component('layouts.app.elements.navbar')@endcomponent
    @yield('content')
    @component('layouts.app.elements.footer')@endcomponent
<script src="{{env('APP_URL')}}/js/app.js"></script>
</body>
</html>
