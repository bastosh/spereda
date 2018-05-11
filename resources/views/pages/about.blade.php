@extends('layouts.master')

@section('content')
    <main class="content-wrap">
        <div id="feedback" class="inner-content">

            <!-- Heading Block -->
            <section id="page-title" class="inner-section ui-menu-color05">
                <div class="container-fluid nopadding">
                    <h2 class="font-accident-two-bold color01"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="100"
                        data-animation-distance="50px">À propos de ce site</h2>
                </div>
            </section>
            <!-- /Heading Block -->

            <!-- Feedback Block -->
            <section class="inner-section feedback feedback-light" data-section="feedback">

                <div class="container-fluid nopadding">

                    <div class="row">

                        <div class=""
                             data-animation-origin="top"
                             data-animation-duration="500"
                             data-animation-delay="400"
                             data-animation-distance="25px">
                            <div class="dividewhite2"></div>
                            <h3 class="font-accident-two-normal uppercase text-center">Le cahier des charges de ce projet est le suivant :</h3>
                            <div class="dividewhite4"></div>
                            <div class="post-container">
                                <p>Réaliser et mettre en production un CV en ligne avec le framework Laravel 5.6.</p>
                                <p>Proposer une version PDF du CV en téléchargement.</p>
                                <p>Inclure un portfolio.</p>
                                <p>Permettre à un adminisatreur d’enregistrer des utilisateurs qui pourront alimenter un blog.</p>
                                <p>Notifier les utilisateurs par e-mail suite à leur enregistrement.</p>
                                <p>Développer un blog permettant :</p>
                                <ul>
                                    <li>> de poster des articles illustrés d'une image;</li>
                                    <li>> de notifier l’utilisateur suite à l’enregistrement de l’article;</li>
                                    <li>> d’associer une catégorie à chaque article;</li>
                                    <li>> d’afficher tous les articles d’une catégorie;</li>
                                    <li>> d’afficher des archives en regroupant les articles par mois;</li>
                                    <li>> d’afficher tous les articles pour un mois donné;</li>
                                    <li>> à un utisateur non enregistré de commenter un article;</li>
                                    <li>> à un utisateur enregistré de commenter un article.</li>
                                </ul>
                            </div>
                            <div class="dividewhite8"></div>
                            <h3 class="font-accident-two-normal uppercase text-center">Les améliorations envisagées sont les suivantes :</h3>
                            <div class="dividewhite4"></div>
                            <div class="post-container">
                                <p>Mettre en place une newletter pour être notifié à chaque article paru.</p>
                                <p>Mettre en place un formulaire de contact.</p>
                                <p>Gérer l’internationalisation : version anglaise du site et du CV.</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="dividewhite6"></div>

            </section>
            <!-- /Feedback Block -->

        </div>
    </main>
@endsection