<?php

use App\Modules\House\Models\House;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        House::create([
            'name' => 'House',
            'bathrooms' => 1,
            'bedrooms' => 1,
            'basement' => 1,
            'gross_size' => 1,
            'spaces' => 1,
            'parking_features' => 1,
            'property_stories' => 1,
            'structure_type' => 1,
            'lot_size' => 1,
            'location' => "Kansas City",
            'foundation_type' => 1,
            'tax_accessed_value' => 1,
            'annual_tax_amount' => 1,
            'sale_date' => 1,
            'sale_amount' => 1,
            'year_built' => '2021',
            'type' => 1,
            'realtor_id' => 1,
            'address'=>'720 oak',
            'customer_id' => 1,
        ]);

    }
}
