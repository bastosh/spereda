<div class="col-sm-3">
    <div class="archives">
        <h2>Archives</h2>
        <div class="dividewhite2"></div>
        <ol class="list-unstyled">
            @foreach($archives as $archive)
                <li>
                    <a href="/posts?year={{ $archive->year }}&month={{ $archive->month }}">
                        {{ $archive->month }} {{ $archive->year }} ({{ $archive->published }})
                    </a>
                </li>
                <div class="dividewhite1"></div>
            @endforeach
        </ol>
    </div>
</div>