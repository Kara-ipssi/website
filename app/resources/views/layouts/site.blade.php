<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Premium Bootstrap 5 demo" />
        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta
            name="keywords"
            content="bootstrap 5, premium, marketing, multipurpose"/>
        <meta content="Mannatthemes" name="author" />

        {{-- on import le bootstrap.min.css --}}
        <link rel="stylesheet" href="{{ asset('demo/css/bootstrap.min.css') }}" type="text/css" />
        {{-- on import le style.css --}}

        <!-- Fonts -->

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        {{-- Récupération du js uniquement --}}
        @vite(['resources/js/app.js'])

        {{-- importations de selfown theme --}}
        {{-- @vite(['ressources/selfown_assets/css/bootstrap.min.css', 'ressources/selfown_assets/css/style.min.css', 'ressources/selfown_assets/css/colors/default.css']) --}}
        <link rel="stylesheet" href="{{asset('demo/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('demo/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('demo/css/colors/default.css')}}" type="text/css">

        <!-- Styles -->
        @livewireStyles
    </head>
    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="80">
        
        <!-- start navbar -->
        @livewire('navbar')
        <!-- end navbar -->

        {{ $slot }}

        <!-- Scripts -->
        <script src="{{asset('demo/js/bootstrap.bundle.min.js')}}"></script>

        <!-- feather icon -->
        <script src="{{asset('demo/js/feather.js')}}"></script>
        <script src="{{asset('demo/js/shuffle.min.js')}}"></script>
        <script src="{{asset('demo/js/projects.init.js')}}"></script>
        <script src="{{asset('demo/js/typed.js')}}"></script>
        <script src="{{asset('demo/js/app.js')}}"></script>


        {{-- Footer --}}

        @stack('modals')
        <!-- Scripts -->
        @livewireScripts
    </body>
</html>
