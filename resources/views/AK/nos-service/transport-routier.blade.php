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
                        <h1>Transport routier</h1>
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
                        <li class="lileft"><i class="fa fa-check checkli"></i> nous regroupons la marchandise depuis notre l’entrepôt situez a Conakry pour la stocker puis la conteneuriser.</li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> nous procédons à leur expédition à travers toute la guinée.</li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> organiser leur livraison à destination: récupérer les marchandises à leur arrivée à destination, dépoter les conteneur ou dégrouper les palettes, livrer les marchandises.</li>
                        <li class="fa fa-book-open"></li>
                    </ul>
                </div>
                <img src="/img/service/transport_camion.jpg">
                @include('layouts.partials.brochure')
            </div>
        </div>
    </div>
</section>
@endsection