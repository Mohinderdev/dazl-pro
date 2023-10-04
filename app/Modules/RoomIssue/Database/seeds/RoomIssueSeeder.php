<?php

use App\Modules\RoomIssue\Models\RoomIssue;
use Illuminate\Database\Seeder;

class RoomIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomIssue::create([
            'name' => "Issue1",
            'room_id' => 1,
        ]);
    }
}
