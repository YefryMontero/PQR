<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaRespuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_respuesta_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('inconformidad_id');
            $table->foreign('inconformidad_id', 'fk_respuesta_inconformidad')->references('id')->on('inconformidades')->onDelete('restrict')->onUpdate('restrict');
            $table->string('descripcion', 250);
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
        Schema::dropIfExists('respuestas');
    }
}
