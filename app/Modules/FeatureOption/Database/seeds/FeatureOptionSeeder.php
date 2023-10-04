<?php

use App\Modules\FeatureOption\Models\FeatureOption;
use Illuminate\Database\Seeder;

class FeatureOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeatureOption::create([
            'name' => 'FeatureOption1',
            'feature_id' => 1,
        ],
        [
            'name' => 'FeatureOption2',
            'feature_id' => 1,
        ],
        [
            'name' => 'FeatureOption3',
            'feature_id' => 1,
        ],
        [
            'name' => 'FeatureOption4',
            'feature_id' => 2,
        ],
        [
            'name' => 'FeatureOption5',
            'feature_id' => 2,
        ],
        [
            'name' => 'FeatureOption6',
            'feature_id' => 2,
        ]);
    }
}
