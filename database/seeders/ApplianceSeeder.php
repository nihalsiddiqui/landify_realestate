<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\Appliance;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ApplianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appliances = [
            'Refrigerator',
            'Microwave',
            'Stove',
            'Washing Machine',
            'TV',
            'CD Player',
            'Hair Dryer',
            'Cleaning Service',
            'Oven',
            'Dishwasher',
            'Dishes',
            'Satellite',
            'Telephone',
            'Towels',
            'Hot Tub',
            'Iron',
            'Internet',
        ];
        foreach ($appliances as $appliance) {
            Appliance::create([
                'admin_id' => admin::role('super-admin')->first()->id,
                'name' => $appliance,
                'slug' => Str::slug($appliance, '-'),
            ]);
        }
    }
}
