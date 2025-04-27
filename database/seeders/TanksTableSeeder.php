<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Tanks;

class TanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tanks::create([
            'id' => '1',
            'name' => 'タンク',
        ]);
        Tanks::create([
            'id' => '2',
            'name' => 'たんく',
        ]);
    }
}
