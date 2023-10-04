<?php

use Illuminate\Database\Seeder;
use App\FeatureStatus;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProfessionalSeeder::class);
        $this->call(ServiceTypeSeeder::class);
        $this->call(RealtorSeeder::class);
        $this->call(ProjectTypeSeeder::class);
        $this->call(HouseSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(RoomIssueSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(FeatureOptionSeeder::class);
//        $this->call(ProjectOpportunitySeeder::class);
//        $this->call(HomeDiagnosticReportSeeder::class);
        $this->call(FeatureIssueSeeder::class);
//        $this->call(ProjectSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(BlogSeeder::class);



        $this->call(FlooringTypeSeeder::class);
        $this->call(CounterTopTypeSeeder::class);
        $this->call(AdditinalValueSeeder::class);
        $this->call(AdditionalValueSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(SubTypeSeeder::class);
        // add new module      
        FeatureStatus::firstOrCreate([
            'status' => 'Need Dazl'
        ]);FeatureStatus::firstOrCreate([
            'status' => 'Market Ready'
        ]);FeatureStatus::firstOrCreate([
            'status' => 'Dazzling'
        ]);
    }
}
