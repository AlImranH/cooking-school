<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    @include('frontend.includes.head')
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            @include('frontend.includes.navbar')
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->





        @include('frontend.includes.slider')





        @include('frontend.includes.service')


        @include('frontend.includes.video')


        @include('frontend.includes.about')


        @include('frontend.includes.paper')


        @include('frontend.includes.team')

        @include('frontend.includes.news')


        @include('frontend.includes.gallary')

        @include('frontend.includes.contact')

        <section id="map" class="map">  
            <div class="ourmaps">
                <div class="container">


                </div>
            </div>
        </section>




        @include('frontend.includes.footer_widget')





        @include('frontend.includes.footer')



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        @include('frontend.includes.scripts')

    </body>
</html>