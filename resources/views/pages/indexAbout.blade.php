@extends('layout.landingPageLayout')

@section('title', 'À propos')
@section('meta_description', 'Découvrez qui nous sommes, notre mission et nos valeurs.')
@section('meta_keywords', 'à propos, équipe, mission, kanban')
@section('meta_author', 'KANBOARD')

@section('content')
<section class="indexabout py-5 mt-5">
    <div class="container mt-5">
        {{-- Titre centré --}}
        @include('components.aboutContent')
    </div>
</section>
@endsection
