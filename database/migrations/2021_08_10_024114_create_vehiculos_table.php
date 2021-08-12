<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('model');
            $table->string('manufacturer');
            $table->char('cost_in_credits');
            $table->char('length');
            $table->char('max_atmosphering_speed');
            $table->char('crew');
            $table->char('passengers');
            $table->char('cargo_capacity');
            $table->string('consumables');
            $table->string('vehicle_class');
            $table->char('url');
            $table->char('created');
            $table->char('edited');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
