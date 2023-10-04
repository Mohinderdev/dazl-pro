<?php

use App\Modules\Room\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::insert([[
            'name' => "Room1",
            'images'=>"test.png"
        ],[
            'name' => "Room2",
             'images'=>"test.png"
        ]]);
    }
}
