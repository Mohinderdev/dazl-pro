
<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\ServiceType\Models\ServiceType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
