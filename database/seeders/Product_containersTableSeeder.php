<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product_containers;

class Product_containersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_containers::create([
            'id' => '1',
            'name' => '製品',
            'capacity' => 'abc',
            'product_container_display_flg' => true,
        ]);
        Product_containers::create([
            'id' => '2',
            'name' => '容器',
            'capacity' => 'def',
            'product_container_display_flg' => true,
        ]);
        Product_containers::create([
            'id' => '3',
            'name' => 'テーブル',
            'capacity' => 'ghi',
            'product_container_display_flg' => true,
        ]);
    }
}
