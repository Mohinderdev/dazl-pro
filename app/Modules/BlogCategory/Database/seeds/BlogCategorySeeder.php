<?php

use App\Modules\BlogCategory\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::Create([
            'id' => 1,
            'name' => 'Kitchen',
            'slug' => 'kitchen',
        ]);

    }
}
