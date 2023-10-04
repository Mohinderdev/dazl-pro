<?php

use App\Modules\Project\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::insert([
            'name' => 'Project 1' ,
            'description' => 'This is project description',
            'start_date' => \Carbon\Carbon::now()->format("Y-m-d"),
            'status' => \App\Enums\ProjectStatusEnum::NOT_PUBLISHED,
            'customer_id' => 1,
            'room_id' => 1,
        ]);

    }
}
