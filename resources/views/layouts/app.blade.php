<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'BlueHorizon')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
    <body>
        <div id="app">
           <x-header/>

            <main>
            @yield('content')
            </main>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    </body>
</html>