<?php

use App\Modules\Professional\Models\Professional;
use Illuminate\Database\Seeder;

class ProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professional::create([
            'first_name' => 'Paula',
            'last_name' => 'George',
            'phone_number' => '123123',
            'zip_code' => 123123,
            'email' => 'polagorge@gmail.com',
            'password' => bcrypt("123123"),
            'company_name' => "PP",
            'company_street_address' => "street",
            'state' => "NewYork",
            'company_city' => "Alex"
        ]);



    }
}
