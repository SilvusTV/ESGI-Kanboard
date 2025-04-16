<footer class="landingfooter py-5 bg-C1">
    <div class="container d-flex flex-column align-center text-center">
        {{-- Logo texte --}}
        <div class="landingfooter__logo mb-3">
            <a href="{{ url('/') }}">KANBOARD</a>
        </div>

        {{-- Noms des créateurs --}}
        <p class="landingfooter__creators mb-2">
            Créé par Nom 1, Nom 2, Nom 3
        </p>

        {{-- Politique de confidentialité --}}
        <a href="{{ url('/politique-de-confidentialite') }}" class="landingfooter__link">
            Politique de confidentialité
        </a>
    </div>
</footer>
