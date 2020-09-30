@extends('layouts.app')

@section('content')
<header class="top-area single-page" id="home">
    <div class="top-area-bg-c" data-stellar-background-ratio="0.6"></div>
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
                        <h2>Consulting</h2>
                        <ul class="page-location">
                            <li><a href="#">Consulting</a></li>
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
            <div class="col-lg-4 col-md-4">
                <div class="area-title text-center wow fadeIn">
                    <h3 class="h3left">Services</h3>
                    <hr style="color: #337ab7">
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="area-title text-center wow fadeIn">
                    <h3 class="h3left">Consulting</h3>
                    <p class="pleft">AK possède une expérience de direction stratégique unique sur le marché guinéen. Notre mission? Mettre ces compétences au service de votre entreprise pour vous permettre d’atteindre vos objectifs plus rapidement et d’en viser de plus ambitieux.
                    </p>
                    <br>
                    <ul>
                        <li class="lileft"><i class="fa fa-check checkli"></i> Résolution de vos problèmes qu’il est parfois difficile de régler.</li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> Nous proposons des solution d’amélioration de la performance ( business plan, plans stratégiques, prévisions, schéma directeur,reportings et pilotage).</li>
                        <li class="lileft"><i class="fa fa-check checkli"></i> Mener des études ou assurer la direction et votre société.</li>
                        <li class="fa fa-book-open"></li>
                    </ul>
                </div>
                <img src="/img/service/consulting_mark.jpg">
                @include('layouts.partials.brochure')
            </div>
        </div>
    </div>
</section>
@endsection