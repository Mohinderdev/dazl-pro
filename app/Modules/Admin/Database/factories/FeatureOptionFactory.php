
<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\FeatureOption\Models\FeatureOption::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'feature_id' => factory(\App\Modules\Feature\Models\Feature::class)->create()
    ];
});
