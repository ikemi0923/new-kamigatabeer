<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Auxiliary_raw_materials;

class Auxiliary_raw_materialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auxiliary_raw_materials::create([
            'id' => '1',
            'name' => '副',
            'maker' => 'abc',
            'auxiliary_raw_material_display_flg' => true,
        ]);
        Auxiliary_raw_materials::create([
            'id' => '2',
            'name' => '原',
            'maker' => 'def',
            'auxiliary_raw_material_display_flg' => true,
        ]);
        Auxiliary_raw_materials::create([
            'id' => '3',
            'name' => '料',
            'maker' => 'ghi',
            'auxiliary_raw_material_display_flg' => true,
        ]);
    }
}
