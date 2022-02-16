<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'subcategory-list',
            'subcategory-create',
            'subcategory-edit',
            'subcategory-delete',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'tag-list',
            'tag-create',
            'tag-edit',
            'tag-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'country-list',
            'country-create',
            'country-edit',
            'country-delete',
            'state-list',
            'state-create',
            'state-edit',
            'state-delete',
            'city-list',
            'city-create',
            'city-edit',
            'city-delete',
            'town-list',
            'town-create',
            'town-edit',
            'town-delete',
            'company-role-list',
            'company-role-create',
            'company-role-edit',
            'company-role-delete',
            'company-list',
            'company-create',
            'company-edit',
            'company-delete',
            'project-list',
            'project-create',
            'project-edit',
            'project-delete',
            'project-type-list',
            'project-type-create',
            'project-type-edit',
            'project-type-delete',
            'property-list',
            'property-create',
            'property-edit',
            'property-delete',
            'listing-list',
            'listing-create',
            'listing-edit',
            'listing-delete',
            'facility-list',
            'facility-create',
            'facility-edit',
            'facility-delete',
            'feature-list',
            'feature-create',
            'feature-edit',
            'feature-delete',
            'appliance-list',
            'appliance-create',
            'appliance-edit',
            'appliance-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'guard_name' => 'admin',
                'name' => $permission,
            ]);
        }
    }
}
