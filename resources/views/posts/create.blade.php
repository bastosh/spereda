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
                        data-animation-distance="50px">Nouvel article</h2>
                </div>
            </section>

            <!-- Blog Block -->
            <section class="inner-section">

                @include('layouts.errors')

                <form method="POST" action="/posts">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Titre de l’article" required>
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input class="form-control" type="text" id="slug" name="slug" placeholder="slug-de-l-article" required>
                    </div>
                    <div class="form-group">
                        <label for="tag">Catégorie</label>
                        <select multiple class="form-control" id="tag" name="tag">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="img">Illustration</label>
                        <input class="form-control" type="text" id="img" name="img" placeholder="image.jpg" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Texte</label>
                        <textarea class="form-control" id="body" name="body" placeholder="Texte de l’article" rows="7" cols="30" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-darker">Poster</button>
                    </div>
                </form>
            </section>
            <!-- /Blog Block -->

        </div>

    </div>
@endsection