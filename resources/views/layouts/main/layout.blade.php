<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

@component('layouts.main.elements.navbar') @endcomponent

@component('layouts.main.elements.footer') @endcomponent

<script src="js/app.js"></script>
</body>
</html>