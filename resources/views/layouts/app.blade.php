<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Movies</title>
</head>

<body class="font-sans bg-gray-900 text-white">

    <x-nav />
    
    @yield('content')
</body>

</html>