<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <title>MoviesApp - @yield('title', 'Home')</title>
</head>

<body class="font-sans bg-gray-900 text-white">

    <x-nav />

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>