<?php

namespace Database\Seeders;

use App\Models\SubCategories;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [
            'Any',
            'Residential',
            'Apartment/Condo',
            'House',
            'Farmhouse',
            'Parking',
            'Plot/Vacant Land',
            'Plot file/Form',
            'Other',

            'All commercial',
            'Business',
            'Retail/Shop',
            'Office',
            'Agriculture',
            'Hospitality',
            'Institutional',
            'All Residential',
            'Upper Unit',
            'Lower Unit',
            'Room',
            'Recreational',
            'Agricultural',

            'Industrial',
            'Recrational',

        ];
        foreach ($subCategories as $Subcategory) {
            SubCategories::create([
                'name' => $Subcategory,
                'slug' => $Subcategory,
                'category_id' => 1,
            ]);
        }
    }
}
