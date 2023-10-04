
<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\Room\Models\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
