<script src="{{ asset('frontend/js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ asset('frontend/js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('frontend/css/skills/inview.min.js') }}"></script>
        <script src="{{ asset('frontend/css/skills/progressbar.js') }}"></script>
        <script src="{{ asset('frontend/css/skills/main.js') }}"></script>
        
        <!--This is link only for gmaps-->
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="{{ asset('frontend/js/gmaps.min.js') }}"></script>
        <script>
            var map = new GMaps({
                el: '.ourmaps',
                scrollwheel: false,
                lat: -12.043333,
                lng: -77.028333
            });
        </script>


        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>