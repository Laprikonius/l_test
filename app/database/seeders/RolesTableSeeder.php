<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles; // Не забудьте использовать свою модель

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::firstOrCreate(['name' => 'owner'], ['description' => 'Owner role']);
        Roles::firstOrCreate(['name' => 'admin'], ['description' => 'Admin role']);
        Roles::firstOrCreate(['name' => 'employee'], ['description' => 'Employee role']);
    }
}
