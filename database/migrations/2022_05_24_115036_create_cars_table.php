<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->text('title');
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('color')->nullable();
            $table->float('KM')->nullable();
            $table->integer('year')->nullable();
            $table->text('fuel')->nullable();
            $table->text('detail')->nullable();
            $table->float ('price')->nullable();
            $table->integer('tax')->nullable();
            $table->text('status',6)->default('False');
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
        Schema::dropIfExists('cars');
    }
};
