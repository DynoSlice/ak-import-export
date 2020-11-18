<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--====== Meta html ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vous pouvez également nous contacter par email en remplissant le formulaire, ou par téléphone, ou vous rendre directement sur place." />
    <meta name="robots" content="index">
    <meta name="author" content="AK import-Export service informatique" />

    <meta name="copyright" content="Ak import-Export" />
    <!--====== Titre de la page ======-->
    <title>Service Client AK import-Export</title>

    <!--====== ICON =======-->
    <link rel="shortcut icon" type="image/png" href="/img/logoAK.png" width="70" height="70" />

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
    <div class="top-area-bg-contact" data-stellar-background-ratio="0.6"></div>
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
                        <h1>Contact</h1>
                        <ul class="page-location">
                            <li><a href="#">Contact</a></li>
                            <li>/</li>
                            <li><a href="#">Ak guinée conakry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="contact-area" id="contact">
    <div class="contact-form-area section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h3>Pour nous contacter</h3>
                        <p>Besoin de renseignement envoyer un message via notre adresse e-mail</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <form method="post" action="{{url('contact')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group" id="name-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom.." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group" id="email-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group" id="name-field">
                                        <div class="form-input">
                                            <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Telephone"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group" id="email-field">
                                        <div class="form-input">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email.." required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="phone-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet.." required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="message-field">
                                        <div class="form-input">
                                            <textarea class="form-control" rows="6" id="formmessage" name="formmessage" placeholder="Votre message ici..." required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button type="submit">envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="contact-image">
                        <div class="contact-address">
                            <h4>Address</h4>
                            <p>Phone: <a href="callto:+661415594">+661 41 55 94</a></p>
                            <p>Email: <a href="mailto:service-clientele@ak-import-export.com">service-clientele@ak-import-export.com</a></p>
                            <address>
                                Bureau  :  Sig Madina Conakry Guinée.
                            </address>
                        </div>
                        <div class="social-bookmark">
                            <h4>SUIVEZ NOUS </h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-area relative" style="height: 400px; " id="mapid">
    
    </div>
</section>
@if(\Session::get('success'))
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-show="true"  style="backgroud-color: #3c763d;">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background-color: #dff0d8;">
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </P>
        </div>
      </div>
    </div>
  </div>
@endif
@if(\Session::get('error'))
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-show="true"  style="backgroud-color: #3c763d;">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background-color: #f2dede;">
        <div class="alert alert-danger">
            <p>{{ \Session::get('error') }}
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </P>
        </div>
      </div>
    </div>
  </div>
@endif
@endsection
