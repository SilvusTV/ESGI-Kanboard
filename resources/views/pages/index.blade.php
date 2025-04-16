@extends('layout.landingPageLayout')

@section('title', 'Accueil | Mon Site')
@section('meta_description', 'Page d’accueil du site. Découvrez nos services, nos tarifs et notre équipe.')
@section('meta_keywords', 'landing page, services, entreprise, tarifs')
@section('meta_author', 'Nom du site')

@section('og_title', 'Bienvenue sur notre site')
@section('og_description', 'Découvrez nos offres et nos solutions adaptées à vos besoins.')
@section('og_image', asset('images/og-accueil.jpg'))

@section('twitter_title', 'Bienvenue sur notre site')
@section('twitter_description', 'Découvrez nos offres et nos solutions adaptées à vos besoins.')
@section('twitter_image', asset('images/og-accueil.jpg'))

@section('content')
    {{-- Bannière --}}
    @include('components.indexBanner')

    {{-- Séparateur validation --}}
    @include('components.indexValidationSeparator')

    {{-- Contenu section 1 --}}
    @include('components.indexContent1')

    {{-- Contenu section 2 --}}
    @include('components.indexContent2')

    {{-- Contenu section 3 --}}
    @include('components.indexContent3')

    {{-- Essai / CTA --}}
    @include('components.indexTry')

    {{-- À propos --}}
    @include('components.aboutContent')

    {{-- Tarifs --}}
    @include('components.priceFree')
    @include('components.pricePro')
    @include('components.priceEnterprise')
@endsection
