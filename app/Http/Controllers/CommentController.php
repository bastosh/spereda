<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
           'message' => 'required|min:2',
        ]);

        auth()->user()->comment(
            new Comment(request(['message']))
        );

        return back();
    }
}
