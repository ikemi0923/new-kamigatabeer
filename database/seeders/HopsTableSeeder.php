<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Hops;

class HopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hops::create([
            'id' => '1',
            'name' => 'ホップ',
            'maker' => 'abc',
            'alpha' => '12',
            'hops_display_flg' => true,
        ]);
        Hops::create([
            'id' => '2',
            'name' => 'ほっぷ',
            'maker' => 'def',
            'alpha' => '34',
            'hops_display_flg' => true,
        ]);
        Hops::create([
            'id' => '3',
            'name' => 'hop',
            'maker' => 'ghi',
            'alpha' => '56',
            'hops_display_flg' => true,
        ]);
    }
}
