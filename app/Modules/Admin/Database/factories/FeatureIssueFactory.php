
<?php

use Faker\Generator as Faker;

$factory->define(\App\Modules\FeatureIssue\Models\FeatureIssue::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'feature_id' => factory(\App\Modules\Feature\Models\Feature::class)->create(),
        'service_type_id' => factory(\App\Modules\ServiceType\Models\ServiceType::class)->create()
    ];
});
