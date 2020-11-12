<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--====== Meta html ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ak import-Export, Service de vente ou location Matériels et équipements en Guinée pour particuliers et professionnels" />
    <meta name="robots" content="index">
    <meta name="author" content="AK import-Export service informatique" />

    <meta name="copyright" content="Ak import-Export" />
    <!--====== Titre de la page ======-->
    <title>Matériels et équipements Guinée particuliers et professionnels | AK import-Export</title>

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
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-169344018-2');
        </script>
    
</head>

<body class="home-one">
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
                        <h1>Vente materiel Guinée</h1>
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
                    <p>AK vous propose du matériel, <b>véhicule neuf et d'occasion pour particulier ou professionnel.</b></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay=".2s">
                    <div class="service-icon-three"><i class="fa fa-truck"></i></div>
                    <h4>Vente de camion</h4>
                    <p>Spécialiste dans la <b>Vente de Poids lourd</b> selon vos goûts, sur commande ou en stock.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-icon-three"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                    <h4>Matériel De Manutention</h4>
                    <p>matériel de manutention robuste et facile d'utilisation, pour <b>faciliter la manutention</b> et le port d'objets lourds.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-icon-three"><i class="fa fa-car" aria-hidden="true"></i></div>
                    <h4>Voiture</h4>
                    <p>Achetez votre voitures d'occasion ou encore neuf <b>importer depuis la france</b> sur commande ou stock.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-icon-three"><i class="fa fa-dropbox"></i></div>
                    <h4>Autre bessoin</h4>
                    <p><b>Bessoin d'une importation de gros de materiel</b>, electromenager, telephonie etc.. contacter nous.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-icon-three"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                    <h4>Materiel informatique</h4>
                    <p>Découvrez nos <b>offres informatiques pour les pros ou particulier</b>. Livraison dans toute la Guinée.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-icon-three"><i class="fa fa-bicycle"></i></div>
                    <h4>LIVRAISON RAPIDE</h4>
                    <p>Pour toute vos commande, nous vous garantisons une de nos <b>livraison les plus rapide.</b></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection