<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Model Controller</title>
        @vite('resources/js/app.js')
    </head>


    <body>
        @include('partials.header')
            @yield('content')
        </body>
    </html>

    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}