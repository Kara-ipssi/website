<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-PX3QJM5');
            </script>
        <!-- End Google Tag Manager -->
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
        <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PX3QJM5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
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
