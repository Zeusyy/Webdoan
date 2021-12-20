<?php

use App\Models\ArticleComment;
use Illuminate\Database\Seeder;

class ArticleCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i < 10; $i++) {
            ArticleComment::create([
                'article_id'    => 1,
                'user_id'    => 2,
                'content' => 'Day la comment so ' .$i,
            ]);
        }
        for ($i=1; $i < 9; $i++) {
            ArticleComment::create([
                'article_id'    => 2,
                'user_id'    => 2,
                'content' => 'Day la comment so ' .$i,
            ]);
        }
        for ($i=1; $i < 8; $i++) {
            ArticleComment::create([
                'article_id'    => 3,
                'user_id'    => 2,
                'content' => 'Day la comment so ' .$i,
            ]);
        }
        for ($i=1; $i < 7; $i++) {
            ArticleComment::create([
                'article_id'    => 4,
                'user_id'    => 2,
                'content' => 'Day la comment so ' .$i,
            ]);
        }
    }
}

// vay thi dong seeder comment van hoat dong dc ma
// m dang dinh lam gi
// bug gi ? k co thi thoi giu cmt dichay thu xem co loi j kchua sav