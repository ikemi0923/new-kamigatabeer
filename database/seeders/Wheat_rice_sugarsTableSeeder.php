<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Wheat_rice_sugars;

class Wheat_rice_sugarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wheat_rice_sugars::create([
            'id' => '1',
            'name' => '麦',
            'maker' => 'abc',
            'ppg' => '12',
            'color' => '3',
            'wheat_rice_sugar_display_flg' => true,
        ]);
        Wheat_rice_sugars::create([
            'id' => '2',
            'name' => '米',
            'maker' => 'def',
            'ppg' => '45',
            'color' => '6',
            'wheat_rice_sugar_display_flg' => true,
        ]);
        Wheat_rice_sugars::create([
            'id' => '3',
            'name' => '糖',
            'maker' => 'ghi',
            'ppg' => '78',
            'color' => '9',
            'wheat_rice_sugar_display_flg' => true,
        ]);
    }
}
