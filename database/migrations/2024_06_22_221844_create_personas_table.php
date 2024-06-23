<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('direccion'); // Verificar que esta línea esté presente
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->decimal('sueldo', 8, 2);
            $table->string('estado');
            $table->string('sexo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
