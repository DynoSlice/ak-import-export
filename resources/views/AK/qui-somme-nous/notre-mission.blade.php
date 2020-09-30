@extends('layouts.app')

@section('content')
<header class="top-area single-page" id="home">
    <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
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
                        <h2>NOTRE MISSION</h2>
                        <ul class="page-location">
                            <li><a href="#">Mission</a></li>
                            <li>/</li>
                            <li><a href="#">Client</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="about-details-area section-padding wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>Notre mission</h2>
                    <p>Vous êtes une entreprise effectuant du commerce en Guinée. Vous recherchez un partenaire pour expédier vos marchandises. Nous pouvons vous accompagner</p>
                </div>
            </div>
        </div>
        <div class="row">
        <div id="report" class="company-anual-reports tab-pane fade in active">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="annual-reports">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="annual-reports-image">
                                    <img src="img/mission/mission_conseil.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="annual-reports-content">
                                    <h4>CONSEILS</h4>
                                    <p>Nous proposons à nos Clients des conseils et des solutions innovantes qui leur permettent d’être en parfaite adéquation avec les impératifs de leurs marchés</p>
                                    <ul>
                                        <li><i class="fa fa-check"></i> business plan, plans stratégiques, prévisions, schéma directeur.</li>
                                        <li><i class="fa fa-check"></i> reportings & pilotage.</li>
                                        <li><i class="fa fa-check"></i> Conseil en Digitalisation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 pull-right">
                                <div class="annual-reports-image">
                                    <img src="img/mission/mission_transport.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="annual-reports-content">
                                    <h4>TRANSPORTS</h4>
                                    <p>Nous transportons des biens, des véhicules de la France vers toute la Guinée. Besoin de Transporter des marchandises pour vous ou pour votre entreprise? Vous avez frappé à la bonne porte, contactez nous.. </p>
                                    <ul>
                                        <li><i class="fa fa-check"></i>Transport de Véhicule professionnel ou particulier.</li>
                                        <li><i class="fa fa-check"></i>Transport de camion, ou encore d'engins lourd.</li>
                                        <li><i class="fa fa-check"></i>Transport de colis professionnel ou particulier .</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="annual-reports-image">
                                    <img src="img/mission/mission_accompagnement.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="annual-reports-content">
                                    <h4>ACCOMPAGNEMENT</h4>
                                    <p>Est un élément essentiel de l’Economie, sa maîtrise est un facteur important de la performance des entreprises. Nous accompagnons les PME, les commerçants et les particuliers dans leur démarche et leur projets </p>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Etude du marché.</li>
                                        <li><i class="fa fa-check"></i> Stratégie d'entreprise, recommandations stratégiques.</li>
                                        <li><i class="fa fa-check"></i> Plan d’action.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 pull-right">
                                <div class="annual-reports-image">
                                    <img src="img/mission/mission_vente.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="annual-reports-content">
                                    <h4>VENTE ET LOCATION</h4>
                                    <p>Vente et location de tout type de véhicule et de poids lourds. Nous vous recherchons également des partenaires ou des fournisseurs pour les entreprises.</p>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Vente de véhicule particulier ou professionnel d'importation sur commande.</li>
                                        <li><i class="fa fa-check"></i> Location de véhicule ou materiel professionel.</li>
                                        <li><i class="fa fa-check"></i> Vente de pièces pour camion et véhicule.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
    </div>
</section>
@endsection