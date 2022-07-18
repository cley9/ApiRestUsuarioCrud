<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('primerNombre',80);
            $table->string('segundoNombre',80);
            $table->string('apellidoPaterno',90);
            $table->string('apellidoMaterno',90);
            $table->integer('dni');
            $table->string('residencia',80);
            $table->string('fechaNacimiento');
            $table->integer('edad');
            $table->string('sexo',60);
            $table->string('correo',80);
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
        Schema::dropIfExists('usuarios');
    }
};
