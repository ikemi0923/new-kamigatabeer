<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDeleteColumnInSymbolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('symbols', function (Blueprint $table) {
            $table->boolean('delete')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('symbols', function (Blueprint $table) {
            $table->boolean('delete')->change();
        });
    }
    
}
