@extends('layouts.app')

@section('content')
<header class="top-area single-page" id="home">
    <div class="top-area-bg-vent" data-stellar-background-ratio="0.6"></div>
    <div class="header-top-area">
        <!--MAINMENU AREA-->
        @include('layouts.partials.menu')
        <!--END MAINMENU AREA END-->
    </div>
    <div class="welcome-area">
        <div class="area-bg"></div>
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="welcome-text text-center">
                        <h2>Vente</h2>
                        <ul class="page-location">
                            <li><a href="#">Vente</a></li>
                            <li>/</li>
                            <li><a href="#">Client</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="service-area-three section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>Nos article</h2>
                    <p>AK vous propose du matériel, véhicule neuf et d'occasion pour particulier ou professionnel.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay=".2s">
                    <div class="service-icon-three"><i class="fa fa-truck"></i></div>
                    <h4>Vente de camion</h4>
                    <p>Spécialiste dans la Vente de Poids lourd selon vos goûts, sur commande ou en stock.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-icon-three"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                    <h4>Matériel De Manutention</h4>
                    <p>matériel de manutention robuste et facile d'utilisation, pour faciliter la manutention et le port d'objets lourds.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-icon-three"><i class="fa fa-car" aria-hidden="true"></i></div>
                    <h4>Voiture</h4>
                    <p>Achetez votre voitures d'occasion ou encore neuf importer depuis la france sur commande ou stock.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-icon-three"><i class="fa fa-dropbox"></i></div>
                    <h4>Autre bessoin</h4>
                    <p>Bessoin d'une importation de gros de materiel, electromenager, telephonie etc.. contacter nous.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-icon-three"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                    <h4>Materiel informatique</h4>
                    <p>Découvrez nos offres informatiques pour les pros ou particulier. Livraison dans toute la Guinée.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-icon-three"><i class="fa fa-bicycle"></i></div>
                    <h4>LIVRAISON RAPIDE</h4>
                    <p>Pour toute vos commande, nous vous garantisons une de nos livraison les plus rapide.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection