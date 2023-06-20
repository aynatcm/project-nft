<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nft Axies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @stack('styles')
</head>
<body class="bg-[#14141F]">
@include('_partials.header')
@yield('content')
@yield('banner')
@yield('form')
@yield('create')
@yield('show-item')
@yield('author')
@yield('collection')
@yield('explore')
@include('_partials.footer')
@if(Route::current()->getName() === 'create')
    @vite('resources/js/index.js')
@endif
</body>
</html>


