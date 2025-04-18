<div class="position-relative" data-aos="fade-up">
    {{-- Annuler --}}
    <a href="{{ url('/') }}" class="auth-cancel">
        <i class="fas fa-arrow-left me-1"></i> Annuler
    </a>

    <h1 class="auth-title">S’inscrire</h1>

    <form action="{{ route('register.view') }}" method="POST" class="auth-form">
        @csrf

        <div class="d-flex gap-2">
            {{-- Prénom --}}
            <input type="text" name="firstname" placeholder="Prénom" required class="flex-grow-1">
            {{-- Nom --}}
            <input type="text" name="lastname" placeholder="Nom" required class="flex-grow-1">
        </div>

        {{-- Email --}}
        <input type="email" name="email" placeholder="Adresse mail" required>

        {{-- Mot de passe --}}
        <input type="password" name="password" placeholder="Mot de passe" required>

        {{-- Confirmation mot de passe --}}
        <input type="password" name="password_confirmation" placeholder="Confirmation mot de passe" required>

        {{-- Bouton inscription --}}
        <button type="submit" class="indexbutton">S’inscrire</button>
    </form>

    <p class="mb-4 mt-4 text-muted small">Déjà un compte ?</p>
    <a href="{{ route('login.view') }}" class="indexbutton mt-4">Se Connecter</a>

</div>
