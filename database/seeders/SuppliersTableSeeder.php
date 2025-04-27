<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Suppliers;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suppliers::create([
            'id' => '1',
            'name' => '名前',
            'kinds' => 'abc',
        ]);
        Suppliers::create([
            'id' => '2',
            'name' => 'なまえ',
            'kinds' => 'def',
        ]);
        Suppliers::create([
            'id' => '3',
            'name' => 'ナマエ',
            'kinds' => 'ghi',
        ]);
    }
}
