@extends('layouts.master')

@section('content')
    <div class="content-wrap">

        <section class="container-fluid" data-section="home">

            <!-- Personal Flexy Section -->
            <div class="row flex-row">
                <!-- Personal Details 01 -->
                <div id="details" class="col-md-8 flex-column bg-color01 light nopadding"
                     data-animation-origin="left"
                     data-animation-duration="300"
                     data-animation-delay="400"
                     data-animation-distance="200px">
                    <div class="padding-50 flex-panel">
                        <div class="row row-no-padding">
                            <div class="col-md-12 nopadding">
                                <h3 class="font-accident-two-normal uppercase title">Spécialiste de l’imprimé et du numérique</h3>
                                <div class="quote">
                                    <h4 class="font-accident-two-normal uppercase subtitle">Édition, impression, web</h4>
                                    <div class="dividewhite3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="divider-dynamic"></div>
                        <div class="row nopadding">
                            <div class="col-md-4 infoblock nopadding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-1 col-md-3"><i class="flaticon-clocks18 color-blue"></i><div class="dividewhite1"></div></div>
                                    <div class="col-xs-12 col-sm-11 col-md-9">
                                        <h4 class="font-accident-two-medium uppercase">Productif</h4>
                                        <p class="small">
                                            La maîtrise des outils que j’utilise au quotidien associée à une capacité rester longtemps concentré me permet d’avancer vite et bien.
                                        </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>
                            <div class="col-md-4 infoblock nopadding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-1 col-md-3"><i class="flaticon-circle-1 color-blue"></i><div class="dividewhite1"></div></div>
                                    <div class="col-xs-12 col-sm-11 col-md-9">
                                        <h4 class="font-accident-two-medium uppercase">Perfectionniste</h4>
                                        <p class="small">
                                            Je ne laisse rien au hasard et je suis très exigeant envers moi-même. Je n’hésite pas à défaire, refaire, jusqu’à être pleinement satisfait.
                                        </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>
                            <div class="col-md-4 infoblock nopadding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-1 col-md-3"><i class="flaticon-bird97 color-blue"></i><div class="dividewhite1"></div></div>
                                    <div class="col-xs-12 col-sm-11 col-md-9">
                                        <h4 class="font-accident-two-medium uppercase">Curieux</h4>
                                        <p class="small">
                                            Je ne me lasse jamais d’apprendre, de chercher à comprendre, de découvrir. La routine, ce n’est clairement pas pour moi.
                                        </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Personal Details 01 -->

                <!-- Personal Details 02 -->
                <div id="personal" class="col-md-4 flex-column light ui-block-color01 personal"
                     data-animation-origin="right"
                     data-animation-duration="500"
                     data-animation-delay="600"
                     data-animation-distance="100px">
                    <div class="padding-50 flex-panel">
                        <h3 class="font-accident-two-normal uppercase title">Informations personnelles</h3>
                        <div class="dividewhite4"></div>
                        <div>
                            <div class="fullwidth box">
                                <div class="one"><p class="uppercase">Nom</p></div>
                                <div class="two"><p class="small">Sébastien Pereda</p></div>
                            </div>
                            <div class="fullwidth box">
                                <div class="one"><p class="uppercase">Adresse</p></div>
                                <div class="two"><p class="small">8, rue de l’Arlésienne, Saint-Martin-de-Crau</p></div>
                            </div>
                            <div class="fullwidth box">
                                <div class="one"><p class="uppercase">Téléphone</p></div>
                                <div class="two"><p class="small">06 23 68 91 29</p></div>
                            </div>
                            <div class="fullwidth box">
                                <div class="one"><p class="uppercase">E-mail</p></div>
                                <div class="two"><p class="small">sebastien.pereda@gmail.com</p></div>
                            </div>
                        </div>
                        <div class="dividewhite1"></div>
                    </div>
                </div>
                <!-- /Personal Details 02 -->
            </div>
            <!-- /Personal Flexy Section -->

        </section>

        <section id="professional" class="container-fluid" data-section="home">

            <div class="row flex-row">

                <div id="pro-experience" class="col-md-4 flex-column dark nopadding ui-block-color02 flex-col"
                     data-animation-origin="bottom"
                     data-animation-duration="300"
                     data-animation-delay="800"
                     data-animation-distance="200px">
                    <div class="padding-50 flex-panel">
                        <h3 class="font-accident-two-normal uppercase title">Expérience professionnelle</h3>
                        <div class="dividewhite4"></div>
                        <div class="experience">
                            <ul class="">
                                <li class="date">07/2017 - aujourd’hui</li>
                                <li class="company uppercase">
                                    <a>
                                        Centre social Les Oliviers
                                    </a>
                                </li>
                                <li class="position">Chargé de communication</li>
                            </ul>
                            <ul class="">
                                <li class="date">2014 - 2016</li>
                                <li class="company uppercase">
                                    <a>
                                        À domicile
                                    </a>
                                </li>
                                <li class="position">Traducteur</li>
                            </ul>
                            <ul class="">
                                <li class="date">2013 - 2015</li>
                                <li class="company uppercase">
                                    <a>
                                        Plato Magazine
                                    </a>
                                </li>
                                <li class="position">Relecteur-correcteur</li>
                            </ul>
                            <ul class="">
                                <li class="date">09/2010 - 07/2015</li>
                                <li class="company uppercase">
                                    <a>
                                        La Martinière Groupe
                                    </a>
                                </li>
                                <li class="position">Chargé de PLV</li>
                            </ul>
                        </div>
                        <a href="/cv" class="btn btn-wh-trans btn-xs">En savoir plus</a>
                        <div class="dividewhite1"></div>
                    </div>
                </div>
                <div id="circle-skills" class="col-md-8 flex-column dark nopadding ui-block-color03 flex-col" data-section="progress"
                     data-animation-origin="right"
                     data-animation-duration="400"
                     data-animation-delay="1100"
                     data-animation-distance="200px">
                    <div class="padding-50 flex-panel">
                        <h3 class="font-accident-two-normal uppercase title">Compétences</h3>
                        <div class="dividewhite1"></div>
                        <div class="row">

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle1"
                                         data-progressbar="circle"
                                         data-progressbar-color="#fff"
                                         data-progressbar-trailcolor="#fff"
                                         data-progressbar-to='{"color": "#51f2ec", "width": 4}'
                                         data-progressbar-from='{"color": "#3498db", "width": 4}'
                                         data-progressbar-value="0.7">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">Communication</h4>
                                    <p class="font-regular-normal small">
                                        Réalisation de support visuels (brochures, plaquettes, affiches, flyers, marque-pages, cartes de visite), rédaction d’articles, reportages photo ou vidéo.
                                    </p>
                                    <a href="/cv" class="btn btn-wh-trans btn-xs">En savoir plus</a>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle2"
                                         data-progressbar="circle"
                                         data-progressbar-color="#fff"
                                         data-progressbar-trailcolor="#fff"
                                         data-progressbar-to='{"color": "#ffd200", "width": 4}'
                                         data-progressbar-from='{"color": "#3498db", "width": 4}'
                                         data-progressbar-value="0.8">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">Développement web</h4>
                                    <p class="font-regular-normal small">
                                        Réalisation de sites web (sites vitrines, portfolios, blogs). Maîtrise de frameworks front-end (Bootstrap, Foundation) et back-end (Symfony, Laravel).
                                    </p>
                                    <a href="/cv" class="btn btn-wh-trans btn-xs">En savoir plus</a>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle3"
                                         data-progressbar="circle"
                                         data-progressbar-color="#fff"
                                         data-progressbar-trailcolor="#fff"
                                         data-progressbar-to='{"color": "#F09C88", "width": 4}'
                                         data-progressbar-from='{"color": "#3498db", "width": 4}'
                                         data-progressbar-value="0.9">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">Édition</h4>
                                    <p class="font-regular-normal small">
                                        Traduction, relecture, correction, recherches iconographiques, mise en pages, fabrication.
                                    </p>
                                    <a href="/cv" class="btn btn-wh-trans btn-xs">En savoir plus</a>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>

    </div>
@endsection