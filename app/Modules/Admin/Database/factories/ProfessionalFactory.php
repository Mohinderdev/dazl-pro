<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\Professional\Models\Professional::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'zip_code' => $faker->numberBetween(1,55),
        'company_name' => $faker->company,
        'company_city' => $faker->city,
        'company_street_address' => $faker->streetAddress,
        'state' => $faker->state,
    ];
});
