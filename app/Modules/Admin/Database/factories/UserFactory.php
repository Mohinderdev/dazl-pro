
<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\User\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'phone' => $faker->phoneNumber,
    ];
});
