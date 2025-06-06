<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToItemsTable extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('beer_style', 50)->after('name');
            $table->decimal('abv', 4, 2)->after('beer_style');
            $table->unsignedTinyInteger('ibu')->after('abv');
        });
    }
    
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn(['beer_style', 'abv', 'ibu']);
        });
    }
    
}
