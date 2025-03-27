<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/css/estilo.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <div class="max-w-2xl mx-auto bg-amber-950 p-16 rounded">
        <nav class="flex justify-between items-center">
            <h1>@yield('title')</h1>
            <ul class="flex space-x-3">                
                <li><a href="{{url('/imc')}}" class="text-white
                        hover:text-blue-500">Calculo IMC</a></li>
                <li><a href="{{url('/sleep_control')}}" class="text-white
                    hover:text-blue-500">Avaliacao de Sono</a></li>
                <li><a href="{{url('/travel_cost')}}" class="text-white">Calculo de gasto viagem</a></li>
            </ul>
        </nav>
        <br>
            @yield('content')
    </div>
</body>
</html>