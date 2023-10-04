<?php

use App\Modules\Admin\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::where('email', 'admin@admin.com')->first();
        if(!$admin) {
            Admin::firstOrCreate([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
