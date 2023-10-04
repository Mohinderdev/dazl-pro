<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\Admin\Models\Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
    ];
});
