<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--====== Meta html ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ak import-Export, Une entreprise qui a gagner le coeur des guinéen. découvrer notre histoire et notre parcours professionnel." />
    <meta name="robots" content="index">
    <!--====== Titre de la page ======-->
    <title>AK import-export découvrer notre histoire et notre parcours</title>

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

    <script rel="preload" defer src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script rel="preload" async src="https://www.googletagmanager.com/gtag/js?id=UA-169344018-2"></script>
    <script rel="preload" async>
        function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-169344018-2");
    </script>
    
</head>

<body class="home-one">
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
                    <p>est un transitaire-organisateur de transport international au <b>service des importateurs et exportateurs</b> des flux France-Guinée</p>
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
                            aux <b>services de nos clients.</b> Nous organisons la livraison à <b>bon port</b> de vos biens et effets personnels à 
                            destination de la Guinée. Nos domaines de prédilection sont les suivants : </span></p>
                            <ul>
                                <li style="font-size: medium; list-style: square; margin: 5%;"><b>Transport de véhicules</b> de la France vers la Guinée.</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;"><b>Groupage maritime</b> départ de la France vers la Guinée.</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;"><b>Transport</b> dans toute la guinée.</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;"><b>Conseil</b> en transport et logistique.</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;"><b>Achat vente</b> de materiels.</li>
                                <li style="font-size: medium; list-style: square; margin: 5%;">Autres Services : <b>achat vente et location de véhicules.</b></li>
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
                            <p>En 2006, AK Import-Export s'agrandit avec la creation du groupe AK.</p>
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