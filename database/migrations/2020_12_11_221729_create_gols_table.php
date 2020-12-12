<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('momento_gol', 50);
            $table->string('descripcion', 50);
            $table->unsignedbigIncrements('id_partido');
            $table->timestamps();
            $table->foreign ('id_partidos')->refences('id')->on('partidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gols');
    }
}
