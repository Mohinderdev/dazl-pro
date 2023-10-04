<?php

use App\Modules\Customer\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'first_name' => 'Paula',
            'last_name' => 'George',
            'phone_number' => '123123',
            'zip_code' => 123123,
            'email' => 'polagorge@gmail.com',
            'password' => bcrypt("123123")
        ]);



    }
}
