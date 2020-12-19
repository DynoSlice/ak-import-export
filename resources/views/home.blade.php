<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--====== Meta html ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ak import-Export est une entreprise spécialisée dans le transport, vente de marchandises en guinée" />

    

    <!--====== Titre de la page ======-->
    <title>AK import-Export - découvrez notre gamme de services pour particuliers ou professionnels</title>

    <!--====== ICON =======-->
    <link rel="shortcut icon" type="image/png" href="/img/logoAK.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="preload" rel="stylesheet preload" href="{{ asset('css/normalize.css')}}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" rel="stylesheet preload" href="{{ asset('css/animate.css')}}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" rel="stylesheet preload" href="{{ asset('css/stellarnav.min.css')}}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" rel="stylesheet preload" href="{{ asset('css/owl.carousel.css')}}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/bootstrap.min.css')}}" as="style" onload="this.rel='stylesheet'" media="screen">
    <link rel="preload" href="{{ asset('css/font-awesome.min.css')}}" as="style" onload="this.rel='stylesheet'">

    <!--====== MAIN STYLESHEETS ======-->
    <link rel="preload" href="{{ asset('css/style.css')}}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/responsive.css')}}" as="style" onload="this.rel='stylesheet'">

    <script async src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script rel="preload" async src="https://www.googletagmanager.com/gtag/js?id=UA-169344018-2"></script>
    <script async>
        function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-169344018-2");
    </script>
    
</head>

<body class="home-one">
    @extends('layouts.app')
    @section('content')

    <header class="top-area" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
            <!--START MENU-->
            @include('layouts.partials.menu')
            <!--END MENU-->
        </div>
        <!--HOME SLIDER AREA-->
        <div class="welcome-slider-area">
            <div class="welcome-single-slide slider-bg-one">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h1>AK Import-Export</h1>
                                <p>Transit – Groupage – Transports maritimes de la France vers la Guinée</p>
                                <div class="home-button">
                                    <a href="{{url('nos-service-guinee')}}">Notre service</a>
                                    {{-- <a href="#">Obtenez un devis</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide slider-bg-two">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h2 style="font-size: 60px;">Transport dans toute la Guinée</h2>
                                <p>De 1 gramme à 24 tonnes, la solution pour le transport, routier de vos marchandises
                                </p>
                                <div class="home-button">
                                    <a href="{{url('transport-routier-Guinee')}}">Notre service</a>
                                    {{-- <a href="#">Obtenez un devis</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- {{-- <div class="welcome-single-slide slider-bg-three">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h2>TRANSPORT AERIEN</h2>
                                <p>Pour vos envois urgents, nous vous proposons des tarifs très compétitifs négociés auprès des Compagnies Aériennes.</p>
                                <div class="home-button">
                                    <a href="{{url('transport-aerien')}}">Notre service</a>
                                    <a href="#">Obtenez un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}} -->
            <div class="welcome-single-slide slider-bg-four">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h2 style="font-size: 60px;">TRANSPORT MARITIME EUROPE-GUINEE</h2>
                                <p>Envoyer un colis en Guinée. Nous organisons le transport de vos colis par groupage maritime.</p>
                                <div class="home-button">
                                    <a href="{{url('transport-maritime-Europe-Guinee')}}">Notre service</a>
                                    {{-- <a href="#">Obtenez un devis</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END HOME SLIDER AREA-->
    </header>

    <!--BLOG AREA-->
    <section class="blog-area gray-bg padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="/img/acceuil/card/card_bateau.jpg"  width="560" height="380" alt="bateau ak import-export">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                            <h3><a href="{{url('transport-maritime-Europe-Guinee')}}">Fret Maritimes</a></h3>
                            <p>Nous assurons le transport de tous vos biens neufs ou d’occasion en groupage ou complet et vos véhicules (voiture, camion, autocars, engin travaux publics …) vers la Guinée <br> <br></p>
                            <a href="{{url('transport-maritime-Europe-Guinee')}}" class="bouton_blue">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="/img/acceuil/card/card_plane.webp" loading="lazy" width="560" height="380" alt="matériel ak import-export">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-tags"></i></a></div>
                            <h3><a href="{{url('vente-materiel-Guinee')}}">Vente</a></h3>
                            <p>AK vous propose du matériel, véhicule neuf et d'occasion pour particulier ou professionnel.</p>
                            <a href="{{url('vente-materiel-Guinee')}}" class="bouton_blue">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="/img/acceuil/card/card_camion.webp" loading="lazy"  width="560" height="380" alt="camion ak import-export">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a href="{{url('transport-routier-Guinee')}}">Fret Routier</a></h3>
                            <p>Spécialiste du transport routier national en messagerie et affrètement, nous vous proposons des départs journaliers au départ du sud de la France vers toute la Guinée. <br> <br></p>
                            <a href="{{url('transport-routier-Guinee')}}" class="bouton_blue">Lire la suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding-home" id="facts-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <img src="/img/acceuil/camion.webp" width="360" height="480">
                    {{-- <div class="quote-form-area wow fadeIn">
                        <h3>Contacter nous</h3>
                        <form class="quote-form" action="#">
                            <p class="width-full">
                                <input type="text" name="name" id="name" placeholder="Nom et prénom">
                            </p>
                            <p class="width-half">
                                <input type="email" name="email" id="email" placeholder="Email">
                                <input class="pull-right" type="phone" name="phone" id="phone" placeholder="Téléphone">
                            </p>
                            <p class="width-half">
                                <input type="text" name="type" id="type" placeholder="Type">
                                <input class="pull-right" type="text" name="quantity" id="quantity" placeholder="Quantité">
                            </p>
                            <p class="width-full">
                                <input type="text" name="destination" id="destination" placeholder="Destination">
                            </p>
                            <p>
                                <textarea name="quote-message" id="quote-message" cols="30" rows="4" placeholder="Votre Message..."></textarea>
                            </p>
                            <button type="submit">Envoyer</button>
                        </form>
                    </div> --}}
                </div>
                <div class="col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>NOUS AVONS 20 ANS D'EXPÉRIENCE DANS CETTE PASSION</h2>
                            <p>AK est un transitaire-organisateur de transport international au service des importateurs et exportateurs des flux France-Guinée. Aujourd’hui, le succès des échanges commerciaux est lié aux bonnes opérations d’acheminement, caractérisées par la maîtrise des délais, des coûts, des réglementations et des risques.</p>
                            <a href="{{url('qui-somme-nous-ak')}}">Lire la suite <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="about-count">
                            <div class="single-about-count single-fact">
                                <h4><i class="fa fa-suitcase"></i><span class="counter">53</span></h4>
                                <p>Colis Envoyer</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-thumbs-o-up"></i><span class="counter">122</span></h4>
                                <p>Like</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-users"></i><span class="counter">30</span></h4>
                                <p>Collaborateur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--SERVICE AREA-->
    <section class="service-area">
        <div class="service-top-area padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Notre Service</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="service-content wow fadeIn">
                            <h2>Nous proposons une solution logistique rapide et puissante</h2>
                            <p>AK c’est surtout <b> un service sur mesure </b> et adapté à n’importe quelle problématique client, le service de livraison de grosse marchandise la plus rapide de Guinée.</p>
                            <a href="{{url('nos-service-guinee')}}">Lire la suite <i class="fa fa-angle-right"></i></a>
                           
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="service-catalouge-content-area wow fadeIn">
                            <div class="service-catalouge-bg"></div>
                            <div class="row">
                                <div class="col-md-7 col-lg-7 col-md-offset-5 col-lg-offset-5 col-sm-12 col-xs-12">
                                    <div class="catalouge-content">
                                        <h3>POURQUOI NOUS CHOISIR ?</h3>
                                        <p>Notre philosophie, nos valeurs et nos expertises dans le domaine du transport vous offrent notre compréhension en même temps que notre capacité à imaginer les meilleurs moyens pour développer votre productivité</p>
                                        <ul>
                                            <li><i class="fa fa-check"></i> Transport de véhicules de la France vers la Guinée.</li>
                                            <li><i class="fa fa-check"></i> Conseil en transport et logistique.</li>
                                            <li><i class="fa fa-check"></i> Envoie rapide de colis important.</li>
                                            <li><i class="fa fa-check"></i> Autres Services : achat vente et location de véhicules.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-bottom-area section-padding">
            <div class="service-bottom-area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-6 col-lg-offset-6 col-sm-12 col-xs-12">
                        <div class="service-list wow fadeIn">
                            <div class="single-service">
                                <div class="service-icon-hexagon">
                                    <div class="hex">
                                        <div class="service-icon">
                                            <i class="fa fa-dropbox"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <h4>Entrepôt</h4>
                                    <p>Bessoin de stcoker votre matériel ou véhicule en France ou en Guinée, faite appel a nous !!.</p>
                                </div>
                            </div>
                            <div class="single-service">
                                <div class="service-icon-hexagon">
                                    <div class="hex">
                                        <div class="service-icon"><i class="fa fa-truck"></i></div>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <h4>Fret routier</h4>
                                    <p>Spécialiste du transport routier national, nous pouvons livrer votre marchandise partout dans le pays.</p>
                                </div>
                            </div>
                            <div class="single-service">
                                <div class="service-icon-hexagon">
                                    <div class="hex">
                                        <div class="service-icon"><i class="fa fa-ship"></i></div>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <h4>Fret maritime</h4>
                                    <p>Nous assurons le transport de tous vos biens neufs ou d’occasion en groupage ou complet et vos véhicules en Guinée.</p>
                                </div>
                            </div>
                            <div class="single-service">
                                <div class="service-icon-hexagon">
                                    <div class="hex">
                                        <div class="service-icon"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <h4>Vente</h4>
                                    <p>AK vous propose du matériel, véhicule neuf et d'occasion pour particulier ou professionnel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICE AREA END-->

    <!--PROMO AREA-->
    <section class="promo-area">
        <div class="promo-top-area section-padding wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-anchor"></i></div>
                            <div class="promo-details">
                                <h3>NOTRE EMPLACEMENT</h3>
                                <p>AK est situez en Guinée Conakry.</p>
                            </div>
                        </div>
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-newspaper-o"></i></div>
                            <div class="promo-details">
                                <h3>DERNIÈRES NEWS</h3>
                                <p>Suivez les toute derniére news.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-umbrella"></i></div>
                            <div class="promo-details">
                                <h3>24/7 Support</h3>
                                <p>un suivie 24/7 sur vos arrivage.</p>
                            </div>
                        </div>
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-bicycle"></i></div>
                            <div class="promo-details">
                                <h3>LIVRAISON RAPIDE</h3>
                                <p>Une livraison rapide grâce à notre logistique de pointe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!--PROMO AREA END-->

    <!--TESTMONIAL AREA -->
    
    <!--TESTMONIAL AREA END -->

@endsection