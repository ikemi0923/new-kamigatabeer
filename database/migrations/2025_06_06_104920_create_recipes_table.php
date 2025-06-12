<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name')->nullable();
            $table->string('product_name')->nullable();
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->string('status')->nullable();
            $table->date('brewed_at')->nullable();
            $table->foreignId('recipe_employee_id')->nullable()->constrained('employees')->onDelete('set null');
            $table->foreignId('brewing_employee_id')->nullable()->constrained('employees')->onDelete('set null');
            $table->foreignId('store_id')->constrained()->onDelete('cascade');
            $table->foreignId('tank_id')->constrained()->onDelete('cascade');
            $table->string('batch_number')->nullable();
            $table->foreignId('symbol_id')->constrained()->onDelete('cascade');
            $table->integer('wort_amount')->nullable();
            $table->decimal('malt_ratio', 5, 2)->nullable();
            $table->text('memo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
