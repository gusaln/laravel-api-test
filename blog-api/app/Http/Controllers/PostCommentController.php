<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Post;

class PostCommentController extends Controller
{
    public function index(Post $post)
    {
        return $post->comments()->get();
    }

    public function store(Post $post, StoreCommentRequest $request)
    {
        return $post->createComment($request->input('content'));
    }
}
