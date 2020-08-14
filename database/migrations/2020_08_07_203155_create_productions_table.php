<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('users_id')->constrained();
            $table->foreignId('kitchens_id')->constrained();
            $table->foreignId('dishes_id')->constrained();
            $table->foreignId('ingredients_productions_id')->constrained();
            $table->string('description');
            $table->string('weight');
            $table->string('portions');
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
        Schema::dropIfExists('productions');
    }
}
