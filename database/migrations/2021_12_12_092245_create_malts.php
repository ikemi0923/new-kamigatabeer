<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMalts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malts', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('maker',20);
            $table->integer('ppg');
            $table->integer('color');
            $table->boolean('malts_display_flg')->default(0);
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
        Schema::dropIfExists('malts');
    }
}
