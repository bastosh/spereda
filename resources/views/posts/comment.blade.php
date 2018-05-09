<div id="comments"
     data-animation-origin="top"
     data-animation-duration="400"
     data-animation-delay="200"
     data-animation-distance="25px">
    <h4 class="font-accident-one-light uppercase">{{ count($post->comments) }} commentaire<?= count($post->comments) > 1 ? 's' : '' ?>
    </h4>
    <ul class="media-list">
        @foreach($post->comments as $comment)
            <li class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object"  alt="64x64" src="/assets/img/joe-l-indien.jpg">
                </a>
            </div>
            <div class="media-body">
                <div class="post-data">
                    <div class="post-date">{{ $comment->created_at }}</div>
                    <div class="post-author"><a href="#">{{ $comment->author }}</a></div>
                </div>
                <p>{{ $comment->message }}</p>
            </div>
        </li>
        @endforeach
    </ul>

    <div class="dividewhite6"></div>
    <hr>
    <div class="dividewhite2"></div>
</div>