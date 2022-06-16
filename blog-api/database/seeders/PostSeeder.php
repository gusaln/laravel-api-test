<?php

namespace Database\Seeders;

use App\Models\Comment;
use Database\Factories\CommentFactory;
use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        PostFactory::times(1)->has(CommentFactory::times(0), 'comments')->create();
    }
}
