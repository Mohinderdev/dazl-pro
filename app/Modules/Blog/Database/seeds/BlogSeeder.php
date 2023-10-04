<?php

use App\Modules\Blog\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title' => "test",
            'slug' => "test",
            'category_id' => "1",
            'description' => "test",
            'publish' => "2022-04-20",
            'image' => "test.jpeg",


        ]);


    }
}
