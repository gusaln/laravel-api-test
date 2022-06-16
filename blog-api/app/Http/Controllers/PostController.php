<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::query()->take(5)->get();
    }

    public function store(StorePostRequest $request)
    {

    }

    public function show(Post $post)
    {
        return $post;
    }

    public function destroy(Post $post)
    {
        //
    }
}
