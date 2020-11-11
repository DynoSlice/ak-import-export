@extends('layouts.app')

   @section('content')
   <meta name="description" content="Le contrat de confiance avant tout. Ak import-export vous propose une gamme de service pour le transport de vos bien de l'étranger vers la guinée" />

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
                                    <a href="{{url('nos-service')}}">Notre service</a>
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
                                    <a href="{{url('transport-routier')}}">Notre service</a>
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
                                <h2 style="font-size: 60px;">TRANSPORT MARITIME</h2>
                                <p>Envoyer un colis en Guinée. Nous organisons le transport de vos colis par groupage maritime.</p>
                                <div class="home-button">
                                    <a href="{{url('transport-maritime')}}">Notre service</a>
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
                            <img src="/img/acceuil/card/card_bateau.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                            <h3><a href="single-blog.html">Fret Maritimes</a></h3>
                            <p>Nous assurons le transport de tous vos biens neufs ou d’occasion en groupage ou complet et vos véhicules (voiture, camion, autocars, engin travaux publics …) vers la Guinée <br> <br></p>
                            <a href="{{url('transport-maritime')}}" class="bouton_blue">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="/img/acceuil/card/card_plane.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-tags"></i></a></div>
                            <h3><a href="single-blog.html">Vente</a></h3>
                            <p>AK vous propose du matériel, véhicule neuf et d'occasion pour particulier ou professionnel.</p>
                            <a href="{{url('transport-aerien')}}" class="bouton_blue">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="/img/acceuil/card/card_camion.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a href="single-blog.html">Fret Routier</a></h3>
                            <p>Spécialiste du transport routier national en messagerie et affrètement, nous vous proposons des départs journaliers au départ du sud de la France vers toute la Guinée. <br> <br></p>
                            <a href="{{url('transport-routier')}}" class="bouton_blue">Lire la suite</a>
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
                    <img src="/img/acceuil/camion.jpg">
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
                            <a href="{{url('qui-somme-nous')}}">Lire la suite <i class="fa fa-angle-right"></i></a>
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
                            <p>AK c’est surtout un service sur mesure et adapté à n’importe quelle problématique client, le service de livraison de grosse marchandise la plus rapide de Guinée.</p>
                            <a href="{{url('nos-service')}}">Lire la suite <i class="fa fa-angle-right"></i></a>
                           
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
                                    <a href="#">Lire la suite</a>
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
                                    <a href="{{url('transport-routier')}}">Lire la suite</a>
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
                                    <a href="{{url('transport-maritime')}}">Lire la suite</a>
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
                                    <a href="{{url('vente')}}">Lire la suite</a>
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