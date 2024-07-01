<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="antialiased w-screen h-screen flex flex-col justify-start items-start overflow-y-hidden">
        <x-banner />

        <main class="h-full w-full flex items-start">
            @yield('content')
        </main>

        @stack('modals')
    </body>

</html>