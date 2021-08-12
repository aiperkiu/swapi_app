<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naves', function (Blueprint $table) {
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
            $table->string('hyperdrive_rating');
            $table->string('MGLT');
            $table->string('starship_class');
            $table->char('url');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naves');
    }
}
