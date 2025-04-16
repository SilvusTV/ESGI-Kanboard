@extends('layout.landingPageLayout')

@section('title', 'Tarifs')
@section('meta_description', 'Découvrez les tarifs adaptés à vos besoins, pour tous les projets et toutes les équipes.')
@section('meta_keywords', 'tarifs, gratuit, pro, entreprise')
@section('meta_author', 'KANBOARD')

@section('content')
<section class="indexprices py-5">
    <div class="container text-center">
        <h2 class="indexprices__title mt-5 mb-5">
            Des forfaits adaptés à vos besoins, pour tous les projets et toutes les équipes
        </h2>

        <div class="row justify-center">
            <div class="col-4">
                @include('components.priceFree')
            </div>
            <div class="col-4">
                @include('components.pricePro')
            </div>
            <div class="col-4">
                @include('components.priceEnterprise')
            </div>
        </div>
    </div>
</section>
@endsection
