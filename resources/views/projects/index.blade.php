@extends('layouts.master')

@section('content')
    <main class="content-wrap">
        <div id="portfolio" class="inner-content">

            <!-- Heading Block -->
            <section id="page-title" class="inner-section ui-menu-color03">
                <div class="container-fluid nopadding">
                    <h2 class="font-accident-two-bold color01"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="100"
                        data-animation-distance="50px">Portfolio</h2>
                    <h4 class="font-accident-two-light color01 uppercase subtitle"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="200"
                        data-animation-distance="50px">« Les paroles s’envolent, les écrits restent. »</h4>
                </div>
            </section>
            <!-- /Heading Block -->

            <!-- Portfolio Block -->
            <section id="portfolio-block" class="inner-section" data-section="portfolio">

                <div class="dividewhite6"></div>

                <div id="isotope-filters" class="port-filter port-filter-light text-center"
                     data-animation-origin="top"
                     data-animation-duration="500"
                     data-animation-delay="200"
                     data-animation-distance="25px">
                    <ul>
                        <li><a href="#cat1" data-filter="*">All</a></li>
                        <li><a href="#cat2" data-filter=".web">Web</a></li>
                        <li><a href="#cat3" data-filter=".symfony">Symfony</a></li>
                        <li><a href="#cat4" data-filter=".laravel">Laravel</a></li>
                        <li><a href="#cat5" data-filter=".wordpress">Wordpress</a></li>
                        <li><a href="#cat6" data-filter=".design">Design</a></li>
                    </ul>
                </div>

                <div class="dividewhite6"></div>

                <div class="row masonry-row">

                    <div class="grid container-fluid text-center">

                        <div id="posts" class="row popup-container">

                            <div class="grid-item web site-vitrine col-xs-6 col-sm-8 col-md-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="left"
                                            data-animation-duration="600"
                                            data-animation-delay="400"
                                            data-animation-distance="100px">
                                        <div class="popup-call">
                                            <a href="assets/img/laverie.png" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/laverie.png" class="img-responsive'" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Site vitrine pour une laverie automatique</h3>
                                                <p>#web</p>
                                            </div>
                                            <a href="http://www.laveriemontdemarsan.com/"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item design sketch col-xs-6 col-sm-4 col-md-3">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="left"
                                            data-animation-duration="400"
                                            data-animation-delay="500"
                                            data-animation-distance="50px">
                                        <div class="popup-call">
                                            <a href="assets/img/massage.png" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/massage.png" class="img-responsive" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Logo + maquette</h3>
                                                <p>#design #sketch</p>
                                            </div>
                                            <a href="assets/img/massage.png"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item design sketch col-xs-6 col-sm-4 col-md-3">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="right"
                                            data-animation-duration="400"
                                            data-animation-delay="400"
                                            data-animation-distance="50px">
                                        <div class="popup-call">
                                            <a href="assets/img/arbre.jpg" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/arbre.jpg" class="img-responsive" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Illustration vectorielle</h3>
                                                <p>#design #sketch</p>
                                            </div>
                                            <a href="assets/img/arbre.jpg"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item web col-xs-6 col-sm-4 col-md-3">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="left"
                                            data-animation-duration="400"
                                            data-animation-delay="500"
                                            data-animation-distance="50px">
                                        <div class="popup-call">
                                            <a href="assets/img/tournois.png"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/tournois.png" class="img-responsive" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Site de gestion de tournois</h3>
                                                <p>#web</p>
                                            </div>
                                            <a href="https://tournois-bienveillants.github.io/"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item web symfony col-xs-6 col-sm-4 col-md-3">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="left"
                                            data-animation-duration="400"
                                            data-animation-delay="400"
                                            data-animation-distance="50px">
                                        <div class="popup-call">
                                            <a href="assets/img/nalo.png"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/nalo.png" class="img-responsive" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Site de gestion d’observation naturalistes</h3>
                                                <p>#web #openclassrooms</p>
                                            </div>
                                            <a href="http://nalo-oc-projet6.herokuapp.com"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item web symfony col-xs-6 col-sm-4 col-md-3">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="right"
                                            data-animation-duration="400"
                                            data-animation-delay="500"
                                            data-animation-distance="50px">
                                        <div class="popup-call">
                                            <a href="assets/img/louvre.png" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/louvre.png" class="img-responsive" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Billeterie en ligne</h3>
                                                <p>#web #openclassrooms</p>
                                            </div>
                                            <a href="https://limitless-atoll-74436.herokuapp.com"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item web wordpress col-xs-6 col-sm-8 col-md-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="right"
                                            data-animation-duration="600"
                                            data-animation-delay="400"
                                            data-animation-distance="100px">
                                        <div class="popup-call">
                                            <a href="assets/img/blog-photo.png" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/blog-photo.png" class="img-responsive'" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Blog photo</h3>
                                                <p>#web #wordpress</p>
                                            </div>
                                            <a href="http://photo.bastoche.fr/"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item web portfolio col-xs-6 col-sm-4 col-md-3">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="left"
                                            data-animation-duration="400"
                                            data-animation-delay="400"
                                            data-animation-distance="50px">
                                        <div class="popup-call">
                                            <a href="assets/img/nfa016.png" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/nfa016.png" class="img-responsive" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Site personnel</h3>
                                                <p>#web #cnam</p>
                                            </div>
                                            <a href="https://sebastien-pereda.github.io/"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>


                            <div class="grid-item grid-sizer design affiche col-xs-6 col-sm-4 col-md-3">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="top"
                                            data-animation-duration="400"
                                            data-animation-delay="400"
                                            data-animation-distance="50px">
                                        <div class="popup-call">
                                            <a href="assets/img/bourse.png" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/bourse.png" class="img-responsive" alt="img03"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Affiche</h3>
                                                <p>#design #sketch</p>
                                            </div>
                                            <a href="assets/img/bourse.png"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item css col-xs-6 col-sm-4 col-md-3">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="right"
                                            data-animation-duration="400"
                                            data-animation-delay="400"
                                            data-animation-distance="50px">
                                        <div class="popup-call">
                                            <a href="assets/img/elasticss.png" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/elasticss.png" class="img-responsive" alt="img03"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Framework CSS</h3>
                                                <p>#web #css</p>
                                            </div>
                                            <a href="https://elasticss.github.io/"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="grid-item web laravel col-xs-6 col-sm-8 col-md-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath ui-menu-color02"
                                            data-animation-origin="right"
                                            data-animation-duration="600"
                                            data-animation-delay="400"
                                            data-animation-distance="100px">
                                        <div class="popup-call">
                                            <a href="assets/img/spereda.png" class="gallery-item"><i class="flaticon-tool"></i></a>
                                        </div>
                                        <img src="assets/img/spereda.png" class="img-responsive'" alt="img11"/>
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Site personnel</h3>
                                                <p>#web #laravel</p>
                                            </div>
                                            <a href="/"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="dividewhite8"></div>

            </section>
            <!-- /Portfolio Block -->

        </div>
    </main>
@endsection