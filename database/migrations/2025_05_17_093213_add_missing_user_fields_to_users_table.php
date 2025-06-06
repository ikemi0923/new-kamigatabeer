<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingUserFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'user_id')) {
                $table->string('user_id', 50)->unique()->after('id');
            }
            if (!Schema::hasColumn('users', 'store_id')) {
                $table->unsignedBigInteger('store_id')->after('first_name');
                $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            }
            if (!Schema::hasColumn('users', 'is_admin')) {
                $table->boolean('is_admin')->default(false)->after('store_id');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'store_id')) {
                $table->dropForeign(['store_id']);
                $table->dropColumn('store_id');
            }
            $table->dropColumn(['user_id', 'is_admin']);
        });
    }
}
