@extends('layouts.app')

@section('content')
<header class="top-area single-page" id="home">
    <div class="top-area-bg-tm" data-stellar-background-ratio="0.6"></div>
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
                        <h2>Transport maritime</h2>
                        <ul class="page-location">
                            <li><a>Transport</a></li>
                            <li>/</li>
                            <li><a>Client</a></li>
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
            <div class="col-lg-4 col-md-4">
                <div class="area-title text-center wow fadeIn">
                    <h3 class="h3left">Services</h3>
                    <hr style="color: #337ab7">
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="area-title text-center wow fadeIn">
                    <h3 class="h3left">Transport maritime</h3>
                    <p class="pleft">Le transport maritime fait partie intégrante du processus de transit surtout quand l’aspect conteneurisation est important. 
                        Grâce à notre expérience et à notre plateforme de consolidation, AK collecte pour vous vos commandes 
                        faites auprès des différents fournisseurs et les rassemble dans un conteneur sécurisé. Vous souhaitez optimiser vos 
                        chargements afin de réduire vos coûts de transports, faites appel à nos services.
                    </p>
                    <br>
                    <ul>
                        <li class="lileft"><i class="fa fa-check checkli"></i> nous regroupons la marchandise depuis l’entrepôt d’un fournisseur pour la stocker puis la conteneuriser.</li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> nous procédons à leur expédition (réserver auprès des transporteurs, transporter jusqu’aux ports, dédouaner et établir les documents d’exportation).</li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> organiser leur livraison à destination: récupérer les marchandises à leur arrivée à destination, dépoter les conteneur ou dégrouper les palettes, livrer les marchandises.</li>
                        <li class="fa fa-book-open"></li>
                    </ul>
                </div>
                <img src="/img/service/maritime_port.png">
                @include('layouts.partials.brochure')
            </div>
        </div>
    </div>
</section>

@endsection