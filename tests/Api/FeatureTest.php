<?php

namespace Tests\Api;

use App\Modules\Customer\Models\Customer;
use App\Modules\Feature\Models\Feature;
use App\Modules\Room\Models\Room;
use Illuminate\Http\Response;
use Tests\TestCase;

class FeatureTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */

    public function it_should_features_for_a_room(){
        $room = factory(Room::class)->create();
        $roomTwo = factory(Room::class)->create();
        factory(Feature::class)->create([
            'room_id' => $room->id
        ]);
        $featureTwo = factory(Feature::class)->create([
            'room_id' => $roomTwo->id
        ]);
        $response = $this->json("GET" , 'api/room/features' , [
            'room_id' => $roomTwo->id
        ]);
        $result = $response->json();
        $this->assertEquals($result['data'][0]['id'] , $featureTwo->id);
    }
}
