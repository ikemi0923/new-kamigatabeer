<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTableAddUserColumns extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name', 50)->after('id');
            $table->string('first_name', 50)->after('last_name');
            $table->foreignId('store_id')->nullable()->constrained()->after('password');
            $table->boolean('admin_flg')->default(0)->after('store_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['store_id']);
            $table->dropColumn(['last_name', 'first_name', 'store_id', 'admin_flg']);
        });
    }
}
