<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Yeasts;

class YeastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Yeasts::create([
            'id' => '1',
            'name' => '酵母',
            'maker' => 'abc',
            'yeast_display_flg' => true,
        ]);
        Yeasts::create([
            'id' => '2',
            'name' => 'こうぼ',
            'maker' => 'def',
            'yeast_display_flg' => true,
        ]);
        Yeasts::create([
            'id' => '3',
            'name' => 'コウボ',
            'maker' => 'ghi',
            'yeast_display_flg' => true,
        ]);
    }
}

