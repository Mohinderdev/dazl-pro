<?php

use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceType::insert([[
            'name' => 'P1'
        ],[
            'name' => 'P2'
        ]]);

    }
}
