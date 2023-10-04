<?php

use App\Modules\Company\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::firstOrCreate([
            'id' => 1,
            'name' => "Paula LTD",
            'phone' => "+123458489489",
            'email' => "pola@gmail.com",
            'website' => "https://paula-george.guru",
            'address' => "Alexandria",
            'references' => "string",
            'description' => "This is a description",
            'business_licence' => "string",
            'project_portfolio' => "string",
            'years_in_business' => "2001",
            'insurance_certificate' => "A123FEGVF"
        ]);

    }
}
