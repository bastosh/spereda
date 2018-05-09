@extends('layouts.master')

@section('content')
    <div class="content-wrap">

        <div id="blog-list" class="inner-content">

            <section id="page-title" class="inner-section ui-menu-color06">
                <div class="container-fluid nopadding">
                    <h2 class="font-accident-two-bold color01"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="100"
                        data-animation-distance="50px">Blog</h2>
                    <h4 class="font-accident-two-light color01 uppercase subtitle"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="200"
                        data-animation-distance="50px">« Les paroles s’envolent, les écrits restent. »</h4>
                </div>
            </section>

            <!-- Blog Block -->
            <section class="inner-section">

                <div class="container-fluid nopadding">
                    <div class="row">

                        <article id="01" class="post-block col-md-12 post hentry"
                                 data-animation-origin="top"
                                 data-animation-duration="500"
                                 data-animation-delay="500"
                                 data-animation-distance="30px">
                            <div class="post-detail">
                                <div class="meta-cat">
                                    <a href="#!" rel="category tag">Typographie</a>
                                </div>
                                <div class="dividewhite2"></div>
                                <h3 class="entry-title"><a href="/articles/l-apostrophe-la-vraie">L’apostrophe, la vraie</a></h3>
                                <div class="metas">
                                    Posté le : <a href="#!" class="meta-date">7 mai 2018</a>/&nbsp;
                                    Posté par : <a href="#!" class="meta-author">Sébastien Pereda</a>
                                </div>
                            </div>
                            <div class="img-wrap">
                                <a href="/articles/l-apostrophe-la-vraie">
                                    <img class="img-responsive" src="/assets/img/apostrophe.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-excerpt">
                                <p>L’apostrophe est le signe typographique en forme de virgule qui, en français, sert à marquer
                                    l’élision (car, c’est bien connu, on ne dit point la élision). En forme de virgule, oui. Et
                                    c’est normal, car, comme le rappelle Jean-Pierre Lacroux, à l’origine « l’apostrophe n’est
                                    qu’une virgule libérée de la pesanteur qui la clouait sur la ligne de base ». Dans toute bonne
                                    police de caractères qui se respecte, il y a donc une belle correspondance entre la virgule et
                                    l’apostrophe.</p>
                            </div>
                            <div class="">
                                <a href="/articles/l-apostrophe-la-vraie" class="btn btn-default btn-darker">Continuer la lecture...</a>
                            </div>
                        </article>

                        <article id="02" class="post-block col-md-12 post hentry"
                                 data-animation-origin="top"
                                 data-animation-duration="500"
                                 data-animation-delay="500"
                                 data-animation-distance="30px">
                            <div class="post-detail">
                                <div class="meta-cat">
                                    <a href="#!" rel="category tag">Workflow</a>
                                </div>
                                <div class="dividewhite2"></div>
                                <h3 class="entry-title"><a href="/articles/ameliorer-flux-travail-avec-hub">Améliorer son flux de travail avec Hub</a></h3>
                                <div class="metas">
                                    Posté le : <a href="#!" class="meta-date">6 mai 2018</a>/&nbsp;
                                    Posté par : <a href="#!" class="meta-author">Sébastien Pereda</a>
                                </div>
                            </div>
                            <div class="img-wrap">
                                <a href="/articles/ameliorer-flux-travail-avec-hub">
                                    <img class="img-responsive" src="/assets/img/hub.png" alt="">
                                </a>
                            </div>
                            <div class="post-excerpt">
                                <p>Hub est un outil en ligne de commande qui étend les fonctionnalités de Git pour
                                    intéragir avec GitHub plus facilement.</p>
                            </div>
                            <div class="">
                                <a href="/articles/ameliorer-flux-travail-avec-hub" class="btn btn-default btn-darker">Continuer la lecture...</a>
                            </div>
                        </article>

                    </div>

                </div>

            </section>
            <!-- /Blog Block -->

        </div>

    </div>
@endsection