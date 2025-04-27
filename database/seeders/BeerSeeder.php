<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Malts;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Malts::create([
            'id' => '1',
            'name' => '小麦',
            'maker' => 'abc',
            'ppg' => '12',
            'color' => '1',
            'malts_display_flg' => true,
        ]);
        Malts::create([
            'id' => '2',
            'name' => 'こむぎ',
            'maker' => 'def',
            'ppg' => '34',
            'color' => '2',
            'malts_display_flg' => true,
        ]);
        Malts::create([
            'id' => '3',
            'name' => 'コムギ',
            'maker' => 'ghi',
            'ppg' => '56',
            'color' => '3',
            'malts_display_flg' => true,
        ]);
    }
}
