<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="{{ asset('js/materialize.min.js') }}" defer></script>
        <link rel="stylesheet" href="{{asset('css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="{{asset('css/ideas.css') }}">
        
         <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/dobleinput.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        
        
            @include('layouts.nonavigation')

            @yield('informacion')
            
       
    </body>
</html>
