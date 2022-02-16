<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'commercial',
            'residential',
            'agriculture'
        ];

        foreach ($categories as $category) {
            category::create([
                'name' => $category,
                'slug' => $category,
                'for_property' => 1,
            ]);
        }
    }
}
