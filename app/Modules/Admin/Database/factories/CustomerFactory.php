
<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\Customer\Models\Customer::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'zip_code' => $faker->numberBetween(1,55),
    ];
});
