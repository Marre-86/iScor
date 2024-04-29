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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container-iscor-1 min-h-screen flex flex-col">
            <header class="bg-white py-5 border-bottom-gray">
                <div class="container-iscor-2 flex items-center justify-between">
                    <img class="logo cursor-pointer" src="/img/logo.svg" onclick="location='{{ route('home') }}'">
                    <div class="text-[24px] fs-14-768 font-semibold">Автоматизированная система скоринга</div>
                </div>
            </header>
            <div class="my-auto py-10 m-0-768">
                <button class="btn-back ml-5 my-5 hidden block-768" onclick="location='javascript:history.back()'">Назад</button>
                <div class="card-auth">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
