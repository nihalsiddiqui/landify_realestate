<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'guard_name' => 'admin',
            'name' => 'super-admin',
        ]);

        $role = Role::create([
            'guard_name' => 'admin',
            'name' => 'agent',
        ]);

        $permissions = Permission::where(function ($query) {
            $query->where('name', 'like', '%listing%')
                ->orWhere('name', 'like', '%city%')
                ->orWhere('name', 'like', '%town%')
                ->orWhere('name', 'like', '%tag%')
                ->orWhere('name', 'like', '%category%')
                ->orWhere('name', 'like', '%property%')
                ->orWhere('name', 'like', '%facility%')
                ->orWhere('name', 'like', '%feature%')
                ->orWhere('name', 'like', '%appliance%');
        })->pluck('id')->toArray();
        $role->syncPermissions($permissions);
    }
}
