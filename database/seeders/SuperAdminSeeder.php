<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = admin::create([
            'name' => 'Talha Maqsood',
            'phone' => '03164331952',
            'email' => 'talha@admin.com',
            'status' => true,
            'password' => Hash::make('password'),
        ])->assignRole('super-admin');
    }
}
