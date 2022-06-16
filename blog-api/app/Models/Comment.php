<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    use Commentable;

    protected $guarded = [];

    public function parent()
    {
        return $this->morphTo('parent');
    }
}
