@extends('layouts.master')

@section('content')
    <main class="content-wrap">

        <div id="contacts" class="inner-content">

            <section id="page-title" class="inner-section ui-menu-color04">
                <div class="container-fluid nopadding">
                    <h2 class="font-accident-two-bold color01"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="100"
                        data-animation-distance="50px">Coordonnées</h2>
                    <h4 class="font-accident-two-light color01 uppercase subtitle"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="200"
                        data-animation-distance="50px">« C’est au contact d'autrui que l’homme apprend ce qu’il sait. » – Euripide</h4>
                </div>
            </section>

            <section id="contacts-data" class="inner-block">
                <div class="container-fluid nopadding">
                    <div class="dividewhite8"></div>
                    <div class="row">
                        <div class="col-md-6"
                             data-animation-origin="right"
                             data-animation-duration="500"
                             data-animation-delay="500"
                             data-animation-distance="25px">
                            <div class="row">
                                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Adresse</span></div>
                                <div class="col-sm-10"><p class="small">8, rue de l’Arlésienne, St-Martin-de-Crau, France</p></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Téléphone</span></div>
                                <div class="col-sm-10"><p class="small">06 23 68 91 29</p></div>
                            </div>
                        </div>
                        <div class="col-md-6"
                             data-animation-origin="right"
                             data-animation-duration="500"
                             data-animation-delay="800"
                             data-animation-distance="25px">
                            <div class="row">
                                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Twitter</span></div>
                                <div class="col-sm-10"><p class="small"><a href="https://twitter.com/s_pereda">https://twitter.com/s_pereda</a></p></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Linkedin</span></div>
                                <div class="col-sm-10"><p class="small"><a href="https://www.linkedin.com/in/sébastien-pereda-ab4165a2/">https://www.linkedin.com/in/sébastien-pereda-ab4165a2/</a></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="dividewhite1"></div>

                </div>
            </section>

            <!-- Google Map Block -->
            <section id="contacts-map" class="inner-section" data-section="map"
                     data-animation-origin="top"
                     data-animation-duration="500"
                     data-animation-delay="500"
                     data-animation-distance="25px">
                <div class="container-fluid nopadding">
                    <!-- Google Map -->
                    <div>
                        <div id="gm-panel">
                            <div id="google-map" class="bigmap"></div>
                        </div>
                    </div>
                    <!-- /Google Map -->
                </div>
                <div class="dividewhite8"></div>
            </section>
            <!-- /Google Map Block -->

        </div>

    </main>
@endsection