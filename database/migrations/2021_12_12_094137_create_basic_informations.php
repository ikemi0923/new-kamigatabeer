<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_informations', function (Blueprint $table) {
            $table->id();
            $table->string('office_name',20);
            $table->char('office_code',8);
            $table->string('office_address',20);
            $table->string('office_phone_number',16);
            $table->string('representative_name',20);
            $table->string('factory_name',20);
            $table->char('factory_code',8);
            $table->string('factory_address',20);
            $table->string('factory_phone_number',16);
            $table->string('tax_office',20);
            $table->string('tax_accountant',20);
            $table->string('tax_phone_number',16);
            $table->boolean('thirty_flg');
            $table->boolean('thirty_three_flg');
            $table->boolean('special_adaptation_manufacturer_flg');
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
        Schema::dropIfExists('basic_informations');
    }
}
