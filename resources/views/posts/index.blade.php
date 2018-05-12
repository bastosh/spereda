@extends('layouts.master')

@section('content')
<div class="content-wrap">
    <div id="blog-list" class="inner-content">
        <section id="page-title" class="inner-section ui-menu-color06">
            <div class="container-fluid nopadding">
                <h2 class="font-accident-two-bold color01"
                    data-animation-origin="right"
                    data-animation-duration="300"
                    data-animation-delay="100"
                    data-animation-distance="50px">Blog</h2>
                <h4 class="font-accident-two-light color01 uppercase subtitle"
                    data-animation-origin="right"
                    data-animation-duration="300"
                    data-animation-delay="200"
                    data-animation-distance="50px">« Les paroles s’envolent, les écrits restent. »</h4>
            </div>
        </section>

        <!-- Blog Block -->

        <section class="inner-section">

            <div class="container-fluid nopadding">
                <div class="row">
                    <div class="col-sm-9">
                        @foreach($posts as $post)
                            @include('posts.preview')
                        @endforeach
                    </div>
                    <div class="col-sm-3">
                        @include('posts.tags')
                        @include('posts.archives')
                    </div>
                </div>
            </div>

        </section>

        </div>
        <!-- /Blog Block -->
    </div>
</div>
@endsection