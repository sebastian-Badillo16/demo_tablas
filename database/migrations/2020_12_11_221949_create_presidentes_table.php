<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presidentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->year('fech_nacimiento');
            $table->string('equipo_dirige', 50);
            $table->year('años_presidente');
            $table->unsignedbigIncrements('id_equipo2');
            $table->timestamps();
            $table->foreign ('id_equipos2')->refences('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presidentes');
    }
}
