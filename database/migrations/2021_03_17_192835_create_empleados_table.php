<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->unsignedBigInteger('id_legajo')->primary();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('localidad');
            $table->unsignedBigInteger('id_tipo_documento');
            $table->integer('nro_documento');
            $table->string('codigo_postal');
            $table->unsignedBigInteger('id_provincia');
            $table->timestamps();

            $table->foreign('id_tipo_documento')->references('id_tipo_documento')->on('tipo_documentos');
            $table->foreign('id_provincia')->references('id_provincia')->on('provincias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
