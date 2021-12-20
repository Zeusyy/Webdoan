<?php

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
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
            Comment::create([
                'product_id'    => 1,
                'user_id'    => 2,
                'content' => 'Day la comment so ' .$i,
            ]);
            Comment::create([
                'product_id'    => 3,
                'user_id'    => 2,
                'content' => 'Day la comment so ' .$i,
            ]);
        }
    }
}
