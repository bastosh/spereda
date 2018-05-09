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

    <form action="/posts/{{ $post->id }}/comments" method="post">

        {{ csrf_field() }}
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