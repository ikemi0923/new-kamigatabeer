<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Items;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Items::create([
            'id' => '1',
            'name' => '小麦',
            'delete_flg' => true,
        ]);
        Items::create([
            'id' => '2',
            'name' => 'こむぎ',
            'delete_flg' => true,
        ]);
        Items::create([
            'id' => '3',
            'name' => 'コムギ',
            'delete_flg' => true,
        ]);
    }
}
