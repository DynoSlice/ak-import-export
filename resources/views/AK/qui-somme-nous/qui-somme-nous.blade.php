@extends('layouts.app')

@section('content')
<header class="top-area single-page" id="home">
    <div class="top-area-bg-qsn" data-stellar-background-ratio="0.6"></div>
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
                        <h1>QUI SOMMES-NOUS</h1>
                        <ul class="page-location">
                            <li><a href="#">AK</a></li>
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
                    <h2>AK Import-Export</h2>
                    <p>est un transitaire-organisateur de transport international au service des importateurs et exportateurs des flux France-Guinée</p>
                </div>
            </div>
        </div>
        <div id="history" class="company-history tab-pane fade in active">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-history-content">
                        <p><span style="font-size: medium;"><strong> <em> AK Import-Export </em> </strong> 
                            est une société spécialisée dans le transport de marchandise (tout type de biens) par conteneurs 
                            à destination de la Guinée. Notre expérience et notre professionnalisme sont avant tout 
                            aux services de nos clients. Nous organisons la livraison à bon port de vos biens et effets personnels à 
                            destination de la Guinée. Nos domaines de prédilection sont les suivants : </span></p>
                            <ul>
                                <li style="font-size: medium; list-style: square; margin: 5%;">Transport de véhicules de la France vers la Guinée</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;">Groupage maritime départ de la France vers la Guinée</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;">Conseil en transport et logistique</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;">Achat vente de materiels de manutention</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;">Autres Services : achat vente et location de véhicules</li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-history-content">
                        <img src="img/qsn/qsn_cargo.png" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="about-history-content history-list">
                        <div class="single-history">
                            <div class="history-year">
                                <p>1998</p>
                            </div>
                            <h4>NOUS COMMENCONS NOTRE ENTREPRISE</h4>
                            <p>AK Import-Export se crée à Télimélé. La compagnie implante sa direction à Conakry en 2000.</p>
                        </div>
                        <div class="single-history">
                            <div class="history-year">
                                <p>2006</p>
                            </div>
                            <h4>CREATION DU SERVICE DE TRANSPORT</h4>
                            <p>En 2006, AK Import-Export s'agrandit avec la creation du groupe AKph.</p>
                        </div>
                        <div class="single-history">
                            <div class="history-year">
                                <p>2010</p>
                            </div>
                            <h4>NOUS AGRANDISSONS NOTRE RÉSEAU </h4>
                            <p>Nous avons du nous agrandir et investir pour travailler avec de nombreuses entreprises dans toute la Guinée.</p>
                        </div>
                        <div class="single-history">
                            <div class="history-year">
                                <p>2018</p>
                            </div>
                            <h4>NOUS SOMMES AU SERVICE DU MONDE ENTIER </h4>
                            <p>Au cour de 2018 nous avons importer de nombreuses marchandise pour nos clients.</p>
                        </div>
                        <div class="single-history">
                            <div class="history-year">
                                <p>2020</p>
                            </div>
                            <h4>DIVERSIFICATION DU GROUPE </h4>
                            <p>Pour répondre a des bessoin en interne et pour nos clients, nous développons aussi des projets informatique(BI, Site web, application, etc....).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection