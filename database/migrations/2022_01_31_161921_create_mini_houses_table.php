<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiniHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mini_houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('area');
            $table->integer('number_of_rooms');
            $table->integer('number_of_bath_rooms');
            $table->boolean('has_internet');
            $table->boolean('has_parking');
            $table->decimal('price_per_day');
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
        Schema::dropIfExists('mini_houses');
    }
}
