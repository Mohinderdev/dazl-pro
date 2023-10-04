<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\Currency\Models::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
