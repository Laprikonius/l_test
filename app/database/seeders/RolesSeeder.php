<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Roles::create(['name' => 'owner']);
        Roles::create(['name' => 'admin']);
        Roles::create(['name' => 'employee']);
    }
}
