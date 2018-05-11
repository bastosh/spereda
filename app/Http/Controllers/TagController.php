<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

/**
 * Class TagController
 * @package App\Http\Controllers
 */
class TagController extends Controller
{

    public function index(Tag $tag)
    {
        $posts = $tag->posts;
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
