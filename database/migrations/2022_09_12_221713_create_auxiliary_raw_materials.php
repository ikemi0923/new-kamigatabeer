<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxiliaryRawMaterials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliary_raw_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('maker', 20);
            $table->boolean('auxiliary_raw_material_display_flg')->default(0);
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auxiliary_raw_materials');
    }
}
