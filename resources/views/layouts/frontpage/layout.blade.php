<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{env('APP_NAME')}}</title>

    <link rel="stylesheet" href="{{env('APP_URL')}}/css/cover.css">
</head>

<body class="text-center front-page">
<div class="cover-background">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        @component('layouts.frontpage.elements.navbar')@endcomponent

        @yield('content')

        @component('layouts.frontpage.elements.footer')@endcomponent
    </div>
</div>
<script src="{{env('APP_URL')}}js/app.js"></script>
</body>
</html>
