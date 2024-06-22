<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->string('cPerApellido', 50)->nullable();
            $table->string('cPerNombre', 50)->nullable();
            $table->string('cPerDireccion', 100)->nullable();
            $table->date('dPerFecNac')->nullable();
            $table->integer('nPerEdad')->nullable();
            $table->decimal('nPerSueldo', 6, 2)->nullable();
            $table->string('cPerRnd', 50)->nullable();
            $table->char('nPerEstado', 1)->default('1');
            $table->string('remember_token', 100)->nullable();
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
        Schema::dropIfExists('persona');
    }
}
