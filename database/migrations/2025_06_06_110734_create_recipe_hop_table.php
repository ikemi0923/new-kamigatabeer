<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeHopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_hop', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')->constrained()->onDelete('cascade');
            $table->foreignId('hop_id')->constrained()->onDelete('cascade');
            $table->integer('amount')->nullable();             // 使用量（gなど）
            $table->decimal('alpha_acid', 5, 2)->nullable();    // α酸（%）
            $table->decimal('ibu', 5, 2)->nullable();           // IBU
            $table->integer('boil_time')->nullable();          // 煮沸時間（分）
            $table->text('note')->nullable();                  // 備考
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
        Schema::dropIfExists('recipe_hop');
    }
}
