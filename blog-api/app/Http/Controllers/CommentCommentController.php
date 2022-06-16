<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Post;

class CommentCommentController extends Controller
{
    public function index(Comment $comment)
    {
        return $comment->comments()->get();
    }

    public function store(Comment $comment, StoreCommentRequest $request)
    {
        return $comment->createComment($request->input('content'));
    }
}
