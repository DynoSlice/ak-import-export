<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--====== Meta html ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ak import-Export, découvrez notre gamme variée de services destinés aux particuliers et professionnels." />
    <meta name="robots" content="index">
    <meta name="author" content="AK import-Export service informatique" />

    <meta name="copyright" content="Ak import-Export" />
    <!--====== Titre de la page ======-->
    <title>AK import-Export - découvrez nos services, du transport de marchandises à la manutention</title>

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

    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--============= Link map =================== -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="crossorigin=""></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169344018-2"></script>
    <script>
        function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-169344018-2");
    </script>
    
</head>

<body class="home-one">
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
                        <h1>NOS SERVICE Europe-Guinée</h1>
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
                    
                    <h2>Une logistique rapide et puissante</h2>
                    <p>En tant que transitaire et organisateur de transports, AK met son <b>savoir faire au service de votre entreprise</b>, nous proposons toute une gamme de services afin de répondre à vos demandes.</p>
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