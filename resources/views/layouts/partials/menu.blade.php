       
   <!--- PRELOADER -->
<div class="preeloader">
    <div class="preloader-spinner"></div>
</div>

<!--SCROLL TO TOP-->
<a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>
<div class="mainmenu-area" id="mainmenu-area" style="width: 1519px; position: fixed; top: 0px; z-index: auto;">
    <div class="mainmenu-area-bg"></div>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="{{url('')}}" class="navbar-brand"><img src="/img/logoAK.png" alt="logo"></a>
            </div>
            <div class="search-and-language-bar pull-right">
                <ul>
                    {{-- <li><a href="{{ __('login') }}"><i class="fa fa-user"></i></a></li> --}}
                    {{-- <li class="search-box"><i class="fa fa-search"></i></li> --}}
                    {{-- <li class="select-language">
                        <select name="#" id="#">
                        <option selected value="Fr">Fr</option>
                        <option selected value="End">ENG</option>
                        <option value="CHI">CHI</option>
                    </select>
                    </li> --}}
                </ul>
                {{-- <form action="#" class="search-form">
                    <input type="search" name="search" id="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form> --}}
            </div>
            <div id="main-nav" class="stellarnav">
                <ul id="nav" class="nav navbar-nav">
                    <li><a href="{{url('')}}">Acceuil</a>
                    </li>
                    <li><a href="{{url('qui-somme-nous-ak')}}">QUI SOMMES-NOUS</a>
                        {{-- <ul>
                            <li><a href="{{url('notre-mission')}}">Notre Mission</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{url('nos-service-guinee')}}">Nos Service</a>
                        <ul>
                            <li><a href="{{url('transport-maritime-Europe-Guinee')}}">Transport maritime</a></li>
                            {{-- <li><a href="{{url('transport-aerien')}}">Transport aérien</a></li> --}}
                            <li><a href="{{url('transport-routier-Guinee')}}">Transport routier</a></li>
                            <li><a href="{{url('vente-materiel-Guinee')}}">Vente</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog Version 1</a></li>
                            <li><a href="blog-2.html">Blog Version 2</a></li>
                            <li><a href="single-blog.html">Single Blog</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a href="">Vente</a> --}}
                    {{-- <li><a href="{{url('devis')}}">Devis en ligne</a> --}}
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>