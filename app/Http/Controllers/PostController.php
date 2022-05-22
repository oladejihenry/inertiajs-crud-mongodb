<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return Inertia::render('Posts/Index', [
            'posts' => Post::all(),
            'create_url' => URL::route('create'),
            // 'edit_url' => URL::route('edit'),
        ]);
    }

    public function create()
    {
        return Inertia::render('Posts/Create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;

        $post->save();

        return Redirect::route('index');
    }

    public function edit(Post $post)
    {
        return Inertia::render('Posts/Edit', [
            'post' => $post,
        ]);
    }
}
