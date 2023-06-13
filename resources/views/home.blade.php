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
@include('_partials.footer')

<script>
    function getValue() {
        let x = document.getElementById('title')
        let text = document.getElementById("name-change")
        text.innerHTML = x.value.toUpperCase();

        if (x.value.length >= 35) {
            // let h1 =  document.createElement('h1')
            // h1.textContent = 'Llegaste al maximo de caracteres'
            // text.appendChild(h1)

            alert('Maximo de caracteres')
            // text.style.wordBreak = 'break-all'
        }
    }
</script>
</body>
</html>


