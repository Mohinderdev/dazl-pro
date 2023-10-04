<?php

namespace Tests\Api;

use App\Modules\Feature\Models\Feature;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\Room\Models\Room;
use Tests\TestCase;

class RoomTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */

    public function it_should_get_all_rooms(){
        //Todo : danger need to be fixed
        $roomsCount = 5 ;
        $rooms = factory(Room::class,$roomsCount)->create();
//        $feature = factory(Feature::class)->create(['room_id' => $rooms[0]->id]);
//        factory(FeatureIssue::class)->create(['feature_id' => $feature->id]);
        $response = $this->json("GET" , "/api/rooms");
        $result = $response->json();
        $this->assertCount(9,$result['data']);
    }
}
