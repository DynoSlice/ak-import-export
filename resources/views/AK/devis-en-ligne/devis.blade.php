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
        <div class="top-area-bg-devis"></div>
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="welcome-text text-center">
                        <h2>Devis en ligne</h2>
                        <ul class="page-location">
                            <li><a href="#">Devis</a></li>
                            <li>/</li>
                            <li><a href="#">Client</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="about-details-area section-padding-devis wow fadeIn">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>DEMANDE DE DEVIS</h2>
                    <p>Merci de remplir le formulaire suivant afin de nous permettre de répondre le plus précisément à votre demande. Vous recevrez un devis gratuitement dans les 24h.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-details-area section-padding-devis2 wow fadeIn devisCss">
    <div class="container">
        <div class="row devisCss">
            <div id="report" class="company-anual-reports tab-pane fade in active">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="annual-reports">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nom :</label>
                                        <input type="text" class="form-control" name="nom" id="nom" aria-describedby="nom"  placeholder="Nom.." required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Prenom :</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="prenom"  placeholder="Prenom.." required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group" id="name-field">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Votre email :</label>
                                            <input type="text" class="form-control" name="email" id="email" aria-describedby="email"  placeholder="Email.." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group" id="name-field">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Téléphone :</label>
                                            <input type="text" class="form-control" name="telephone" id="telephone" aria-describedby="telephone"  placeholder="telephone.." required>
                                        </div>
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
    </div>
</section>
@endsection