<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Authentification')</title>

    {{-- Fonts & Icons --}}
    <link rel="stylesheet" href="{{ asset('fonts/fontAwesome/css/all.css') }}">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

    {{-- CSS principal --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="auth">

    {{-- Contenu principal --}}
    <main class="auth-container">
        @yield('content')
    </main>

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
    <script src="{{ asset('js/chat.js') }}"></script>

    @stack('js')
</body>
</html>
