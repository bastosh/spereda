@extends('layouts.master')

@section('content')
    <main class="content-wrap">

        <div id="feedback" class="inner-content">

            <section id="page-title" class="inner-section ui-menu-color05">
                <div class="container-fluid nopadding">
                    <h2 class="font-accident-two-bold color01"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="100"
                        data-animation-distance="50px">Contact</h2>
                    <h4 class="font-accident-two-light color01 uppercase subtitle"
                        data-animation-origin="right"
                        data-animation-duration="400"
                        data-animation-delay="200"
                        data-animation-distance="50px">« Écris-moi. » – Pierre Bachelet</h4>
                </div>
            </section>

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
                            <h3 class="font-accident-two-normal uppercase text-center">Un projet à me confier ? Un chaton à secourir ?</h3>
                            <h5 class="font-accident-two-normal uppercase text-center subtitle">Vous pouvez me contacter en utilisant le formulaire ci-dessous :</h5>
                            <div class="dividewhite1"></div>
                        </div>

                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8 e-centered"
                             data-animation-origin="top"
                             data-animation-duration="500"
                             data-animation-delay="600"
                             data-animation-distance="25px">
                            <div class="dividewhite4"></div>
                            <div id="form-messages"></div>
                            <form id="ajax-contact" method="post" action="/assets/custom/2.2.0/php/form.php" class="wpcf7-form">
                                <div class="field">
                                    <!--<label for="name">Name:</label>-->
                                    <input type="text" id="name" name="name" placeholder="Nom" required>
                                </div>

                                <div class="field">
                                    <!--<label for="email">Email:</label>-->
                                    <input type="email" id="email" name="email" placeholder="E-mail" required>
                                </div>

                                <div class="field">
                                    <!--<label for="message">Message:</label>-->
                                    <textarea id="message" name="message" placeholder="Message" rows="7" cols="30"  required></textarea>
                                </div>

                                <div class="dividewhite2"></div>

                                <div class="field text-center">
                                    <button type="submit" class="btn btn-lg btn-darker">Envoyer</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-12 divider-dynamic"></div>
                    </div>

                </div>

                <div class="dividewhite6"></div>

            </section>
            <!-- /Feedback Block -->

        </div>

    </main>
@endsection