<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--====== Meta html ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
    <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />

    <!--====== Titre de la page ======-->
    <title>AK</title>

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
    

    
</head>

<body class="home-one">

    
    <!-- contenu de la page -->
    @yield('content')
    <!-- contenu de la page -->
    <!--FOOTER-->
    @include('layouts.partials.footer')
    <!--FOOTER-->


    <!--====== SCRIPTS JS ======-->
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="/js/vendor/jquery.easing.1.3.js"></script>
    <script src="/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/vendor/jquery.appear.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/stellarnav.min.js"></script>
    <script src="/js/contact-form.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!--===== ACTIVE JS=====-->
    <script src="/js/main.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbtRphsSDPc0-N5CasZHsGHwd2yjB_c_k&sensor=false"></script>
    <script src="/js/maps.active.js"></script>

    <script type="text/javascript">
        $( function(){
            $('#exampleModalCenter').modal();
        });
        $( function(){
            $('#modalerror').modal();
        })
    </script>
    <script type="text/javascript">
    
        var map = L.map('mapid', { fadeAnimation: false }).setView([9.541518, -13.675301], 18);
        
        L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org/">OpenStreetMap</a> contributors',
                    maxZoom: 20, minZoom: 0
                }).addTo(map);
        
        
             
        
        L.marker([9.541518, -13.675301]).addTo(map)
            .bindPopup('<a style="color:black" href="">AK Import-Export</a>')
            .openPopup();
        
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169344018-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-169344018-2');
        </script>
</body>

</html>