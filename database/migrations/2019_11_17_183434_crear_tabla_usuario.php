<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuario extends Migration
{
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('nombre', 50);
            $table->string('identificacion',50)->unique();
            $table->string('telefono', 50);
            $table->strin('email', 50);
            $table->string('password', 100);
            $table->string('nombre', 50);
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
