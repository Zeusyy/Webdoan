<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category([
            'name' => 'Hotel',
            'description' => Str::random(20),
        ]);

        $category->save();

        $category = new Category([
            'name' => 'Tour',
            'description' => Str::random(20),
        ]);

        $category->save();

        $category = new Category([
            'name' => 'Article',
            'description' => Str::random(20),
        ]);

        $category->save();

        $category = new Category([
            'name' => 'RoomType',
            'description' => Str::random(20),
        ]);

        $category->save();
    }
}
