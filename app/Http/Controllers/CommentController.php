<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), [
           'message' => 'required|min:2',
        ]);

       /* auth()->user()->comment(
            new Comment(request(['message']))
        );*/

       $post->addComment(request('message'));

        return back();
    }

    public function guest(Post $post)
    {
        $this->validate(request(), [
            'author' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:2',
        ]);

        Comment::create([
            'author' => request('author'),
            'email' => request('email'),
            'message' => request('message'),
            'post_id' => $post->id
        ]);

        return back();
    }
}
