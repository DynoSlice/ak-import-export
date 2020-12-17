
    
    <!-- contenu de la page -->
    @yield('content')
    <!-- contenu de la page -->
    <!--FOOTER-->
    @include('layouts.partials.footer')
    <!--FOOTER-->


    <!--====== SCRIPTS JS ======-->
    <script rel="preload"  src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script rel="preload" src="/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    {{-- laisser async --}}
    <script async  src="/js/vendor/jquery.easing.1.3.js"></script>
    <script async  src="/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script async  src="/js/vendor/jquery.appear.js"></script>
    <script async  src="/js/owl.carousel.min.js"></script>
    <script async  src="/js/stellar.js"></script>
    <script async  src="/js/wow.min.js"></script>
    <script async  src="/js/stellarnav.min.js"></script>
    <script async  src="/js/jquery.sticky.js"></script>
    <script async  src="/js/jquery.counterup.min.js"></script>
    <script rel="preload"  src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
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
        
</body>

</html>