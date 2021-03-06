<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--====== Meta html ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ak import-Export assure un service logistique, fret de marchandises ou transport frigorifique, depuis les grandes villes de Guinée" />
    <meta name="robots" content="index">
    <meta name="author" content="AK import-Export service informatique" />

    <meta name="copyright" content="Ak import-Export" />
    <!--====== Titre de la page ======-->
    <title>Transport routier de marchandises en Guinée - AK import-Export</title>

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
    <script >
        function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-169344018-2");
    </script>
    
</head>

<body class="home-one">
    @extends('layouts.app')
    @section('content')
<header class="top-area single-page" id="home">
    <div class="top-area-bg-tr" data-stellar-background-ratio="0.6"></div>
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
                        <h1>Transport routier Guinée</h1>
                        <ul class="page-location">
                            <li><a href="#">Transport</a></li>
                            <li>/</li>
                            <li><a href="#">guinée conakry</a></li>
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
                    <h3 class="h3left">Transport routier</h3>
                    <p class="pleft">AK est avant tout un transporteur routier à échelle Guinéenne. Nous sommes en mesure de livrer dans toute la Guinée.
                    </p>
                    <br>
                    <ul>
                        <li class="lileft"><i class="fa fa-check checkli"></i> nous regroupons la marchandise depuis notre l’entrepôt situez a Conakry pour la <b>stocker puis la conteneuriser.</b></li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> nous procédons à leur expédition à travers <b>toute la guinée.</b></li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> <b>organiser leur livraison à destination:</b> récupérer les marchandises à leur arrivée à destination, dépoter les conteneur ou dégrouper les palettes, livrer les marchandises.</li>
                        <li class="fa fa-book-open"></li>
                    </ul>
                </div>
                <img src="/img/service/transport_camion.jpg" alt="camion ak import-export">
                @include('layouts.partials.brochure')
            </div>
        </div>
    </div>
</section>
@endsection