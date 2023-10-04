<?php

use App\Modules\ProjectType\Models\ProjectType;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectType::insert([[
            'name' => "PT1"
        ],[
            'name' => "PT2"
        ]]);
    }
}
