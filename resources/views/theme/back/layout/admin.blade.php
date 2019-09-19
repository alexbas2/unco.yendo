<!DOCTYPE html>
<html lang="en">
<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 4.0
  Author: PIXINVENT
  Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================ -->
<head>
    <title>@yield('title')</title>
    @include('theme.back.layout.includes.head')
</head>
<body>
    <div id="app">
        @include('theme.back.layout.includes.loader')
        <!-- End Page Loading -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START HEADER -->
        @include('theme.back.layout.includes.header')
        <!-- END HEADER -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START MAIN -->
            <div id="main">
                <!-- START WRAPPER -->
                <div class="wrapper">
                    <!-- START LEFT SIDEBAR NAV-->
                @if(auth()->check())
                    @include('theme.back.layout.includes.left-sidebar')

                @endif
                <!-- END LEFT SIDEBAR NAV-->
                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <!-- START CONTENT -->
                    <section id="content">
                        <!--start container-->
                        <div class="container">
                            @yield('content')
                            <div class="card-widgets">
                                <div class="row">
                                    <div class="col s12 m12 l4">
                                        <div id="flight-card" class="card">
                                            <div class="card-header deep-orange accent-2">
                                                <div class="card-title">
                                                    <h4 class="flight-card-title">Viaje</h4>
                                                    <p class="flight-card-date">19 de septiembre, Jue 07:50</p>
                                                </div>
                                            </div>
                                            <div class="card-content-bg white-text">
                                                <div class="card-content">
                                                    <div class="row flight-state-wrapper">
                                                        <div class="col s5 m5 l5 center-align">
                                                            <div class="flight-state">
                                                                <p class="margin">Remigio Bosch 380</p>
                                                                <p class="ultra-small">Neuquén</p>
                                                            </div>
                                                        </div>
                                                        <div class="col s2 m2 l2 center-align">
                                                            <i class="material-icons" style="font-size: 2.5rem">directions_car</i>
                                                        </div>
                                                        <div class="col s5 m5 l5 center-align">
                                                            <div class="flight-state">
                                                                <p class="margin">Unco</p>
                                                                <p class="ultra-small">Neuquén</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s6 m6 l6 center-align">
                                                            <div class="flight-info">
                                                                <p class="small" style="font-size: 0.8rem !important">
                                                                    <span class="grey-text text-lighten-4">Barrio:</span> Bouquet Roldan</p>
                                                                <p class="small"  style="font-size: 0.8rem !important">
                                                                    <span class="grey-text text-lighten-4">Disponibilidad:</span> 3/4</p>
                                                            </div>
                                                        </div>
                                                        <div class="col s6 m6 l6 center-align flight-state-two">
                                                            <div class="flight-info">
                                                                <p class="small">
                                                                    <span class="grey-text text-lighten-4">Llegada:</span> 08.50</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!--end container-->
                    </section>
                    <!-- END CONTENT -->

                </div>
                <!-- END WRAPPER -->
            </div>
            <!-- END MAIN -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START FOOTER -->
        @include('theme.back.layout.includes.footer')
        <!-- END FOOTER -->
            <!-- ================================================
            Scripts
            ================================================ -->
         @include('theme.back.layout.includes.foot')

    </div>

</body>
</html>