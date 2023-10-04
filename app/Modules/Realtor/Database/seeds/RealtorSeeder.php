<?php

use App\Modules\Realtor\Models\Realtor;
use Illuminate\Database\Seeder;

class RealtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Realtor::create([
            'first_name' => 'Paula',
            'last_name' => 'George',
            'phone_number' => '123123',
            'real_state_agency_name' => "PP",
            'email' => 'polagorge@gmail.com',
            'password' => bcrypt("123123"),
            'city_of_real_state_agency' => "Alexandria",
            'zip_code' => 123123,
            'state' => 'NewYork',
        ]);

    }
}
