<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Basic_informations;

class Basic_informationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Basic_informations::create([
            'id' => '1',
            'office_name' => '名称',
            'office_code' => '郵便番号',
            'office_address' => '住所',
            'office_phone_number' => '電話番号',
            'representative_name' => '代表者氏名',
            'factory_name' => '名称',
            'factory_code' => '郵便番号',
            'factory_address' => '住所',
            'factory_phone_number' => '電話番号',
            'tax_office' => '税務署',
            'tax_accountant' => '税理士',
            'tax_phone_number' => '電話番号',
            'thirty_flg' => true,
            'thirty_three_flg' => true,
            'special_adaptation_manufacturer_flg' => true,
        ]);
        Basic_informations::create([
            'id' => '2',
            'office_name' => '名称',
            'office_code' => '郵便番号',
            'office_address' => '住所',
            'office_phone_number' => '電話番号',
            'representative_name' => '代表者氏名',
            'factory_name' => '名称',
            'factory_code' => '郵便番号',
            'factory_address' => '住所',
            'factory_phone_number' => '電話番号',
            'tax_office' => '税務署',
            'tax_accountant' => '税理士',
            'tax_phone_number' => '電話番号',
            'thirty_flg' => true,
            'thirty_three_flg' => true,
            'special_adaptation_manufacturer_flg' => true,
        ]);
        Basic_informations::create([
            'id' => '3',
            'office_name' => '名称',
            'office_code' => '郵便番号',
            'office_address' => '住所',
            'office_phone_number' => '電話番号',
            'representative_name' => '代表者氏名',
            'factory_name' => '名称',
            'factory_code' => '郵便番号',
            'factory_address' => '住所',
            'factory_phone_number' => '電話番号',
            'tax_office' => '税務署',
            'tax_accountant' => '税理士',
            'tax_phone_number' => '電話番号',
            'thirty_flg' => true,
            'thirty_three_flg' => true,
            'special_adaptation_manufacturer_flg' => true,
        ]);
    }
}
