<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Symbols;

class SymbolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symbols::create([
            'id' => '1',
            'name' => 'abc',
            'brand' => 'あいう',
            'item_id' => 'アイウ',
            'delete' => true,
        ]);
        Symbols::create([
            'id' => '2',
            'name' => 'bcd',
            'brand' => 'いうえ',
            'item_id' => 'イウエ',
            'delete' => true,
        ]);
    }
}
