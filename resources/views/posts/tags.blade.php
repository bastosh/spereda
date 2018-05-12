<div class="archives hidden-xs">
    <h2>Thèmes</h2>
    <div class="dividewhite2"></div>
    <ol class="list-unstyled">
        @foreach($tags as $tag)
            <li>
                <a href="/posts/tags/{{ $tag->name }}">
                    {{ $tag->name }}
                </a>
            </li>
            <div class="dividewhite1"></div>
        @endforeach
    </ol>
</div>
