<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country_list = [
            'Pakistan' => [
                'Punjab' => [
                    'Lahore',
                    'Faisalabad',
                    'Multan',
                    'Islamabad',
                    'Rawalpindi',
                    'Murree',
                    'Gujranwala',
                    'Sheikhpura',
                    'Sialkot',
                    'Bahawalpur',
                    'Narowal',
                    'Sargodha',
                    'Gujrat',
                    'Jhang',
                    'Kasur',
                    'Okara',
                    'Rahim Yar Khan',
                ],
                'KPK' => [
                    'pashawar',
                    'Mardan',
                    'Kohat',
                    'Abbottabad',
                    'Bannu',
                    'Dera Ismail Khan',
                    'Manshera',
                    'Nowshera',
                    'Swabi',
                    'Chitral',
                    'Swat',
                    'Mingora',
                    'Swabi',
                    'Naran',
                    'Nathiagali',
                    'Balakot',
                ],
                'Kashmir' => [
                    'Muzaffarabad',
                    'Bhimber',
                    'Kotli',
                    'Rawalkot',
                    'Hajira',
                    'Dhirkot',
                    'Sharda',
                    'Leepa',
                ],
                'Sindh' => [
                    'Karachi',
                    'Hyderabad',
                    'Sukkur',
                    'Larkana',
                    'Khairpur',
                    'Thatta',
                    'Mirpurkhas',
                    'Badin',
                    'RCW Rohri',
                    'Ghotki',
                    'Sanghar',
                    'Nawabshah',
                ],
                'Blochistan' => [
                    'Quetta',
                    'Gawadar',
                    'Turbat',
                    'Chaman',
                    'Khuzdar',
                    'Sibi',
                    'Dera Allah Yar',
                    'Loralai',
                    'Hub',
                    'Surab',
                    'Ziarat',
                    'Harnai',
                    'Gaddani',
                    'Awaran',
                    'Kohlu',
                    'Muslim Bagh',
                ],
            ]
        ];

        foreach ($country_list as $cindex => $countries) {

            $country = Country::create([
                'name' => $cindex,
            ]);

            foreach ($countries as $sindex => $states) {

                $state = $country->states()->create([
                    'name' => $sindex,
                ]);

                foreach ($states as $index => $city) {

                    $state->cities()->create([
                        'name' => $city,
                    ]);
                }
            }
        }
    }
}
