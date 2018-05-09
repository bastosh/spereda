<?php

namespace App\Http\Controllers;

use App\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), [
           'author' => 'required|min:2',
           'email' => 'required',
           'message' => 'required|min:2',
        ]);
        $post->addComment(request('author'), request('email'), request('message'));
        return back();
    }
}
