<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Charm:wght@400;700&family=Oxygen:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-custom dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div>
                <h1 class="text-3xl font-bold font-audiowide">LOGIN</h1>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/30 backdrop-blur-sm p-8 rounded-xl shadow-lg dark:bg-gray-800 overflow-hidden sm:rounded-lg transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
