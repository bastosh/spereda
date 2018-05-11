<?php

namespace App\Http\Controllers;

use App\Events\PostPublished;
use App\Post;
use App\Post_Tag;
use App\Tag;
use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest();

        if ($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')) {
            $posts->whereYear('created_at', Carbon::parse($year)->year);
        }

        $posts = $posts->limit(4)->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('posts.create', compact('tags'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|min:2|max:100',
            'body' => 'required|min:2',
            'slug' => 'required'
        ]);

        auth()->user()->publish(
           $post = new Post(request(['title', 'body', 'img', 'slug']))
        );

        $post->tags()->attach(Tag::where('id', request('tag'))->get());

        //event(new PostPublished($post));

        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
