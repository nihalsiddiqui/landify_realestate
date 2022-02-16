<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            'Pool',
            'Heating System',
            'Jacuzzi',
            'Cooling System',
            'Elevator',
            'Garden',
            'Balcony',
            'Basement',
            'Fence',
            'View',
            'Pet Policy',
            'Kitchen',
            'Steam',
            'Gymnasium',
            'Fireplace',
            'Security',
            'Patio',
            'Roof Deck',
            'High Ceiling',
            'Storage',
            'Parking',
            'Furnished',
            'Air Conditioning',
            'Lot Irregularities',
            'Water',
            'Exterior',
            'Garage Type',
            'Water Included',
        ];

        foreach ($features as $feature) {
            Feature::create([
                'admin_id' => admin::role('super-admin')->first()->id,
                'name' => $feature,
                'slug' => Str::slug($feature, '-'),
            ]);
        }
    }
}
