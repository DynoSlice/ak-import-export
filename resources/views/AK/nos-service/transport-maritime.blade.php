<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--====== Meta html ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ak import-Export, Service de transport rapide de marchandises vers la Guinée Conakry. Envoyez aussi vos colis et effets personnels avec AK Import-Export." />
    <meta name="robots" content="index">
    <meta name="author" content="AK import-Export service informatique" />

    <meta name="copyright" content="Ak import-Export" />
    <!--====== Titre de la page ======-->
    <title>Transport maritime Guinée | Fret Guinée - AK import-Export</title>

    <!--====== ICON =======-->
    <link rel="shortcut icon" type="image/png" href="/img/logoAK.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/stellarnav.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">

    <script rel="preload" src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169344018-2"></script>
    <script rel="preload">
        function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-169344018-2");
    </script>
    
</head>

<body class="home-one">
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
                        <h1>Transport maritime EUROPE-Guinée</h1>
                        <ul class="page-location">
                            <li><a>Transport</a></li>
                            <li>/</li>
                            <li><a>guinée conakry</a></li>
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
                        Grâce à notre expérience et à notre plateforme de consolidation, <b> AK collecte pour vous vos commandes </b> 
                        faites auprès des différents fournisseurs et les rassemble dans un conteneur sécurisé. Vous souhaitez optimiser vos 
                        chargements afin de réduire vos coûts de transports, faites appel à nos services.
                    </p>
                    <br>
                    <ul>
                        <li class="lileft"><i class="fa fa-check checkli"></i> <b>nous regroupons la marchandise</b> depuis l’entrepôt d’un fournisseur pour la stocker puis la conteneuriser.</li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> <b>nous procédons à leur expédition</b> (réserver auprès des transporteurs, transporter jusqu’aux ports, dédouaner et établir les documents d’exportation).</li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> <b>organiser leur livraison à destination</b>: récupérer les marchandises à leur arrivée à destination, dépoter les conteneur ou dégrouper les palettes, livrer les marchandises.</li>
                        <li class="fa fa-book-open"></li>
                    </ul>
                </div>
                <img src="/img/service/maritime_port.png" alt="bateau ak import-export">
                @include('layouts.partials.brochure')
            </div>
        </div>
    </div>
</section>

@endsection