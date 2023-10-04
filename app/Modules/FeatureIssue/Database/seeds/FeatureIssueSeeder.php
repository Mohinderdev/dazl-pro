<?php

use App\Modules\FeatureIssue\Models\FeatureIssue;
use Illuminate\Database\Seeder;

class FeatureIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeatureIssue::firstOrCreate([
            'name' => 'issue 1 Feature 1',
            'feature_id' => 1,
            'feature_option_id' => 1,
            'service_type_id' => 1
        ]);

        FeatureIssue::firstOrCreate([
            'name' => 'issue 2 Feature 1',
            'feature_id' => 1,
            'feature_option_id' => 1,
            'service_type_id' => 1
        ]);

        FeatureIssue::firstOrCreate([
            'name' => 'issue 3 Feature 2',
            'feature_id' => 2,
            'feature_option_id' => 1,
            'service_type_id' => 1
        ]);

        FeatureIssue::firstOrCreate([
            'name' => 'issue 4 Feature 2',
            'feature_id' => 2,
            'feature_option_id' => 1,
            'service_type_id' => 1
        ]);

    }
}
