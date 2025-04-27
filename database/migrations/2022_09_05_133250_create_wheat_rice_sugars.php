<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWheatRiceSugars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheat_rice_sugars', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('maker', 20);
            $table->integer('ppg');
            $table->integer('color');
            $table->boolean('wheat_rice_sugar_display_flg');
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
        Schema::dropIfExists('wheat_rice_sugars');
    }
}
