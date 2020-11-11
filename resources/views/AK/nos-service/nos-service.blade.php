@extends('layouts.app')

@section('content')
<header class="top-area single-page" id="home">
    <div class="top-area-bg-ns" data-stellar-background-ratio="0.6"></div>
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
                        <h1>NOS SERVICE</h1>
                        <ul class="page-location">
                            <li><a href="#">Service</a></li>
                            <li>/</li>
                            <li><a href="#">guinée conakry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="service-area-two section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h1>NOS SERVICE</h1>
                    <p>Découvrez ci-dessous une liste des catégories de nos service, pour plus d'information contacter-nous</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="service-content wow fadeIn">
                    <h2>UNE LOGISTIQUE RAPIDE ET PUISSANTE</h2>
                    <p>En tant que transitaire et organisateur de transports, AK met son savoir faire au service de votre entreprise, nous proposons toute une gamme de services afin de répondre à vos demandes.</p>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div class="service-two-content wow fadeIn">
                    <div class="row no-margin">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                            <div class="single-service-two border">
                                <div class="service-icon-two"><i class="fa fa-truck"></i></div>
                                <h4>FRET ROUTIER</h4>
                                <p>Transport dans toute la Guinée.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                            <div class="single-service-two border-top border-bottom border-right">
                                <div class="service-icon-two"><i class="fa fa-bicycle"></i></div>
                                <h4>VENTE</h4>
                                <p>Vente sur commande de tout materiel.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                            <div class="single-service-two border-left border-right border-bottom">
                                <div class="service-icon-two"><i class="fa fa-ship"></i></div>
                                <h4>FRET MARITIME</h4>
                                <p>Transport de vos véhicule en Guinée.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                            <div class="single-service-two border-right border-bottom">
                                <div class="service-icon-two"><i class="fa fa-dropbox"></i></div>
                                <h4>ENTREPÔT</h4>
                                <p>Stockage de vos bien.</p>
                            </div>
                        </div>
                        <!-- {{-- <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                            <div class="single-service-two border-left border-right border-bottom">
                                <div class="service-icon-two"><i class="fa fa-cog"></i></div>
                                <h4>CONSULTING</h4>
                                <p>Reporting et Consulting.</p>
                            </div>
                        </div> --}} -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection