<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaInconformidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inconformidades', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('motivo', 50);
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_inconformidad_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('pqrs_id');
            $table->foreign('pqrs_id', 'fk_inconformidad_pqrs')->references('id')->on('pqrs')->onDelete('restrict')->onUpdate('restrict');
            $table->string('descripcion', 250);
            $table->string('estado',10)->default('Activo');
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
        Schema::dropIfExists('inconformidades');
    }
}
