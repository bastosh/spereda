<div
        data-animation-origin="top"
        data-animation-duration="400"
        data-animation-delay="200"
        data-animation-distance="25px">

    <div id="post-comment">
        <h4 class="font-accident-one-light uppercase">Laisser un commentaire</h4>
    </div>
    <div class="dividewhite2"></div>

    @include('layouts.errors')

    <form action="/posts/{{ $post->slug }}/guest" method="post">

        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="author">Nom <sup>*</sup></label>
                    <input type="text" id="author" name="author" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Adresse e-mail <sup>*</sup></label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" cols="60" rows="3" class="" required></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-darker">Envoyer</button>
    </form>

</div>