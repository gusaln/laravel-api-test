<?php

namespace App\Models;


/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait Commentable
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'parent');
    }

    public function createComment(string $content)
    {
        return $this->comments()->create(compact('content'));
    }
}
