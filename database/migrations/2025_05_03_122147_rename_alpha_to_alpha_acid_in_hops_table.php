<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAlphaToAlphaAcidInHopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hops', function (Blueprint $table) {
            $table->renameColumn('alpha', 'alpha_acid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hops', function (Blueprint $table) {
            $table->renameColumn('alpha_acid', 'alpha');
        });
    }
}
