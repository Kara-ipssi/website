<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Ajouter la balise google analitycs avec l'id : G-Z30TFVW40F --}}
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z30TFVW40F"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-Z30TFVW40F');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{-- <meta name="description" content="Premium Bootstrap 5 demo" /> --}}
        <meta name="description" content="
            Optimisez votre présence en ligne grâce à nos services web tout-en-un. 
            Nous offrons des services de référencement SEO pour améliorer votre positionnement sur les moteurs de recherche, 
            ainsi que la création de sites web et d'applications mobiles sur mesure pour promouvoir votre entreprise. 
            Nous proposons également un service d'hébergement de haute qualité pour garantir la disponibilité de votre site web en tout temps. 
            Contactez-nous pour en savoir plus sur nos services web." 
        />
        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta
            name="keywords"
            {{-- content="bootstrap 5, premium, marketing, multipurpose"/> --}}
            content="developper, website, freelance, french developper, paris, france, back-end, front-end, full-stack"/>
        <meta content="Mannatthemes" name="author" />

        {{-- on import le style.css --}}

        <!-- Fonts -->

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        {{-- Récupération du js uniquement --}}
        {{-- @vite(['resources/js/app.js']) --}}

        {{-- importations de selfown theme --}}
        <link rel="stylesheet" href="{{asset('demo/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('demo/css/style.min.css')}}" type="text/css">
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
        @if(isset($scripts))
            {{ $scripts }}
        @endif

        {{-- Footer --}}

        @stack('modals')
        <!-- Scripts -->
        @livewireScripts
    </body>
</html>
