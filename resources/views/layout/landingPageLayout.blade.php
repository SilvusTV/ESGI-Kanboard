<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Landing Page')</title>
    <meta name="description" content="@yield('meta_description', 'Description de la page')">
    <meta name="keywords" content="@yield('meta_keywords', 'mots, clés')">
    <meta name="author" content="@yield('meta_author', 'Nom du site')">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('og_title', 'Landing Page')">
    <meta property="og:description" content="@yield('og_description', 'Description de la page')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/default-og-image.jpg'))">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Landing Page')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Description de la page')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/default-og-image.jpg'))">

    {{-- Fonts & Icons --}}
    <link rel="stylesheet" href="{{ asset('fonts/fontAwesome/css/all.css') }}">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

    {{-- CSS principal --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div id="app" class="d-flex flex-column flex-grow-1">
        {{-- Header --}}
        @include('partials.landingPageHeader')

        {{-- Contenu principal --}}
        <main class="flex-grow-1">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.landingPageFooter')
    </div>

    {{-- Scripts Laravel Echo via Reverb --}}
    <script>
        window.Laravel = {
            reverbAppKey: "{{ env('REVERB_APP_KEY') }}",
            reverbHost: "{{ env('REVERB_HOST') }}",
            reverbPort: {{ env('REVERB_PORT') }},
            reverbScheme: "{{ env('REVERB_SCHEME') }}"
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-in-out'
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/7.0.3/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.2/dist/echo.iife.min.js"></script>

    {{-- Initialisation WebSocket --}}
    <script src="{{ asset('js/reverbStatus.js') }}"></script>

    @stack('js')
</body>
</html>
