<article id="{{ $post->id }}" class="post-block col-md-12 post hentry"
         data-animation-origin="top"
         data-animation-duration="500"
         data-animation-delay="500"
         data-animation-distance="30px">
    <div class="post-detail">
        <div class="meta-cat">
            <a href="#!" class="category tag">{{ $post->category->name }}</a>
        </div>
        <div class="dividewhite2"></div>
        <h3 class="entry-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
        <div class="metas">
            <a href="#!" class="meta-date">{{ LocalizedCarbon::instance($post->created_at)->diffForHumans() }}</a>/&nbsp;
            Posté par <a href="#!" class="meta-author">{{ $post->user->name }}</a>
        </div>
    </div>
    <div class="img-wrap">
        <a href="/posts/{{ $post->id }}">
            <img class="img-responsive" src="/assets/img/{{ $post->img }}" alt="">
        </a>
    </div>
    <div class="post-excerpt">
        <p><?= substr($post->body, 0, 500).'...' ?></p>
    </div>
    <div class="">
        <a href="/posts/{{ $post->id }}" class="btn btn-default btn-darker">Continuer la lecture...</a>
    </div>
</article>