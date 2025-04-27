<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name',20);
            $table->boolean('delete_flg');
            $table->boolean('factory_address_flg');
            $table->char('store_code',8);
            $table->string('store_address',20);
            $table->string('store_phone_number',16);
            $table->string('tax_office',20);
            $table->boolean('symbol_choice_flg');
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
        Schema::dropIfExists('stores');
    }
}
