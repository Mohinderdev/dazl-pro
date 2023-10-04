
<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\Feature\Models\Feature::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'room_id' => factory(\App\Modules\Room\Models\Room::class)->create()
    ];
});
