<?php

namespace Database\Seeders;

use App\Models\ArticleComment;
use Database\Factories\ArticleCommentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleComment::factory(100)->create();
    }
}
