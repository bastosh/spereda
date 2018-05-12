<article id="{{ $post->id }}" class="post-block col-md-12 post hentry"
         data-animation-origin="top"
         data-animation-duration="500"
         data-animation-delay="500"
         data-animation-distance="30px">
    <div class="post-detail">
        @foreach($post->tags as $tag)
            <div class="meta-cat">
                <a href="/posts/tags/{{ $tag->name }}" class="category tag">{{ $tag->name }}</a>
            </div>
        @endforeach
        <div class="dividewhite2"></div>
        <h3 class="entry-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
        <div class="metas">
            <a href="#!" class="meta-date">{{ LocalizedCarbon::instance($post->created_at)->diffForHumans() }}</a>/&nbsp;
            Posté par <a href="#!" class="meta-author">{{ $post->user->name }}</a>
        </div>
    </div>
    <div class="img-wrap">
        <a href="/posts/{{ $post->slug }}">
            <img class="img-responsive" src="{{ $post->img }}" alt="">
        </a>
    </div>
    <div class="post-excerpt">
        <p><?= substr($post->body, 0, 600).'...' ?></p>
    </div>
    <div class="">
        <a href="/posts/{{ $post->slug }}" class="btn btn-default btn-darker">Continuer la lecture...</a>
    </div>
</article>