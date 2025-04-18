<div class="position-relative" data-aos="fade-up">
    {{-- Lien Annuler en haut à gauche --}}
    <a href="{{ url('/') }}" class="auth-cancel">
        <i class="fas fa-arrow-left me-1"></i> Annuler
    </a>

    <h1 class="auth-title">Se connecter</h1>

    <form action="{{ route('login.view') }}" method="POST" class="auth-form">
        @csrf

        {{-- Email --}}
        <input type="email" name="email" placeholder="Adresse mail" required>

        {{-- Mot de passe --}}
        <input type="password" name="password" placeholder="Mot de passe" required>

        {{-- Lien mot de passe oublié --}}
        <a href="#" class="auth-link">Mot de passe oublié ?</a>

        {{-- Bouton se connecter --}}
        <button type="submit" class="indexbutton">Se connecter</button>
    </form>

    {{-- Lien vers inscription --}}
    <p class="mt-4 mb-4 text-center">Pas encore de compte ?</p>
    <a href="{{ route('register.view') }}" class="indexbutton mt-4">S’inscrire</a>
</div>
