<?php

use App\Modules\Feature\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'name' => "Feature 1",

        ]);
        Feature::create([
            'name' => "Feature 2",

        ]);
        Feature::create([
            'name' => "Feature 3",

        ]);

    }
}
