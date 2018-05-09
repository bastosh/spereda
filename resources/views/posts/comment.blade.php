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
                    @if($comment->user_id)
                        <img class="media-object custom" src="/{{ $post->user->avatar }}" width="50">
                    @else
                        <img class="media-object" src="/assets/img/avatars/boy.svg">
                    @endif
                </a>
            </div>
            <div class="media-body">
                <div class="post-data">
                    <div class="post-date">{{ $comment->created_at }}</div>
                    @if($comment->user_id)
                        <div class="post-author"><a href="#">{{ $comment->user->name }}</a></div>
                    @else
                        <div class="post-author"><a href="#">{{ $comment->author }}</a></div>
                    @endif
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