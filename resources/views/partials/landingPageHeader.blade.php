<header class="header">
    <div class="header__container">
        {{-- Logo texte --}}
        <div class="header__logo">
            <a href="{{ url('/') }}">KANBOARD</a>
        </div>

        {{-- Liens nav --}}
        <nav class="header__nav">
            <a href="{{ url('/') }}" class="indexlink {{ request()->is('/') ? 'active' : '' }}">Fonctionnalités</a>
            <a href="{{ url('/prices') }}" class="indexlink {{ request()->is('prices') ? 'active' : '' }}">Nos forfaits</a>
            <a href="{{ url('/about-us') }}" class="indexlink {{ request()->is('about-us') ? 'active' : '' }}">À propos</a>
        </nav>

        {{-- Bouton --}}
        <div class="header__btn">
            <a href="{{ route('login.view') }}" class="indexbutton">Se connecter</a>
        </div>
    </div>
</header>
