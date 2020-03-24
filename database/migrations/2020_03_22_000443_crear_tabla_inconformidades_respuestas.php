<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaInconformidadesRespuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inconformidades_respuestas', function (Blueprint $table) {
           $table->unsignedInteger('respuesta_id');
           $table->foreign('respuesta_id','fk_inconfor_respuesta_respuesta')->references('id')->on('respuestas')->onDelete('restrict')->onUpdate('restrict');
           $table->unsignedInteger('inconformidad_id');
           $table->foreign('inconformidad_id','fk_inconfor_respuesta_inconformidades')->references('id')->on('inconformidades')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inconformidades_respuestas');
    }
}
