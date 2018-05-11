<footer class="padding-50 dark ui-bg-color01"
        data-animation-origin="top"
        data-animation-duration="500"
        data-animation-delay="800"
        data-animation-distance="50px">
    <div class="container-fluid nopadding">
        <div class="row">
            <div class="col-sm-3">
                <h5 class="font-accident-two-bold uppercase">Réalisé avec</h5>
                <p class="inline-block">
                    HTML, SASS, Gulp, Bootstrap, JavaScript, jQuery, PHP, Laravel, PhpStorm, Mysql, Sequel Pro, iTerm, Git, Photoshop.
                </p>
                <div class="divider-dynamic"></div>
            </div>
            <div class="col-sm-3 cv-link">
                <h5 class="font-accident-two-bold uppercase">Télécharger le CV</h5>
                <div class="dividewhite1"></div>
                {{--<a href="#!"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>English</a>--}}
                {{--<a href="#!"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Español</a>--}}
                <a href="/files/cv_sebastien-pereda.pdf"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Français</a>
                <p class="inline-block">
                    PDF / 1,2 Mo
                </p>
                <div class="divider-dynamic"></div>
            </div>
            <div class="col-sm-3">
                <h5 class="font-accident-two-bold uppercase">Lettre d’information</h5>
                <div class="dividewhite1"></div>
                <form action="/subscribe" method="post">
                    {{ csrf_field() }}
                    <input class="newsletter-email" type="text" name="email" placeholder="Votre adresse e-mail" required>
                    <button type="submit" class="btn btn-wh-trans btn-xs" disabled>OK</button>
                </form>

                <div class="divider-dynamic"></div>
            </div>
            <div class="col-sm-3">
                <h5 class="font-accident-two-bold uppercase">Réseaux sociaux</h5>
                <div class="follow">
                    <ul class="list-inline social">
                        <li><a target="_blank" href="https://www.linkedin.com/in/s%C3%A9bastien-pereda-ab4165a2/" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="https://plus.google.com/u/0/114803020470713296351" ><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/S_Pereda" class="rst-icon-twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.pinterest.fr/sbastienpereda/" class="rst-icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="divider-dynamic"></div>
            </div>
        </div>
        <div class="dividewhite1"></div>
        <div class="row">
            <div class="col-md-12 copyrights">
                <p>© 2018 || Sébastien Pereda</p>
            </div>
        </div>
    </div>
</footer>