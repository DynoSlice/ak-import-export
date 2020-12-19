
    
    <!-- contenu de la page -->
    @yield('content')
    <!-- contenu de la page -->
    <!--FOOTER-->
    @include('layouts.partials.footer')
    <!--FOOTER-->


    <!--====== SCRIPTS JS ======-->
    <script  src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script  src="/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    {{-- laisser async --}}
    <script   src="/js/vendor/jquery.easing.1.3.js"></script>
    <script   src="/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script   src="/js/vendor/jquery.appear.js"></script>
    <script   src="/js/owl.carousel.min.js"></script>
    <script   src="/js/stellar.js"></script>
    <script   src="/js/wow.min.js"></script>
    <script   src="/js/stellarnav.min.js"></script>
    <script   src="/js/jquery.sticky.js"></script>
    <script   src="/js/jquery.counterup.min.js"></script>
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!--===== ACTIVE JS=====-->
    <script src="/js/main.js"></script>
    {{-- <script async type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbtRphsSDPc0-N5CasZHsGHwd2yjB_c_k&sensor=false"></script> --}}
    {{-- <script async src="/js/maps.active.js"></script> --}}

    <script  type="text/javascript">
        $( function(){
            $('#exampleModalCenter').modal();
        });
        $( function(){
            $('#modalerror').modal();
        })
    </script>
    
        
</body>

</html>