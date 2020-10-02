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
                        <h2>Contact</h2>
                        <ul class="page-location">
                            <li><a href="#">Contact</a></li>
                            <li>/</li>
                            <li><a href="#">Client</a></li>
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
                            <p>Phone: <a href="callto:01744430440">+661 41 55 94</a></p>
                            <p>Email: <a href="mailto:backpiper.com@gmail.com">service-clientele@ak-import-export.com</a></p>
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
