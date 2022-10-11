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
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />
        {{-- on import le style.css --}}

        <!-- Fonts -->

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        {{-- Récupération du js uniquement --}}
        @vite(['resources/js/app.js'])

        {{-- importations de selfown theme --}}
        @vite(['ressources/selfown_assets/css/bootstrap.min.css', 'ressources/selfown_assets/style.min.css', 'ressources/selfown_assets/css/colors/default.css'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
