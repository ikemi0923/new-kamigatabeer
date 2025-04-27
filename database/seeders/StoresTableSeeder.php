<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Stores;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stores::create(['id' => '1',
            'store_name' => '1',
            'delete_flg' => true,
            'factory_address_flg' => true,
            'store_code' => true,
            'store_address' => '1',
            'store_phone_number' => '1',
            'tax_office' => '1',
            'symbol_choice_flg' => true,
        ]);
        Stores::create([
            'id' => '2',
            'store_name' => '2',
            'delete_flg' => true,
            'factory_address_flg' => true,
            'store_code' => true,
            'store_address' => '2',
            'store_phone_number' => '2',
            'tax_office' => '2',
            'symbol_choice_flg' => true,
        ]);
        Stores::create([
            'id' => '3',
            'store_name' => '3',
            'delete_flg' => true,
            'factory_address_flg' => true,
            'store_code' => true,
            'store_address' => '3',
            'store_phone_number' => '3',
            'tax_office' => '3',
            'symbol_choice_flg' => true,
        ]);
    }
}