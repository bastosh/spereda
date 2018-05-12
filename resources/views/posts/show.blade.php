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
                        data-animation-distance="50px">{{ $post->title }}
                    </h2>
                    <div class="dividewhite1"></div>
                    <p class="font-accident-two color01 uppercase subtitle"
                        data-animation-origin="right"
                        data-animation-duration="300"
                        data-animation-delay="200"
                        data-animation-distance="50px">
                        Posté par <a href="">{{ $post->user->name }}</a> {{ LocalizedCarbon::instance($post->created_at)->diffForHumans() }}
                    </p>
                </div>
            </section>

            <!-- Blog Block -->

            <section class="inner-section">

                <div class="container-fluid nopadding">
                    <div class="row">
                        <div class="col-sm-9 article">
                            <?= ($post->body) ?>

                            <div class="dividewhite5"></div>

                            @include('posts.comment')

                            @auth
                                @include('posts.form')
                            @endauth

                            @guest
                                @include('posts.form-guest')
                            @endguest

                            <div class="dividewhite8"></div>
                        </div>
                        @include('posts.tags')
                        @include('posts.archives')
                    </div>
                </div>

            </section>

        </div>
        <!-- /Blog Block -->
    </div>
    </div>
@endsection

