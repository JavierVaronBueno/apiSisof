<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisofVehiculoPropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sisof__vehiculo_propietarios', function (Blueprint $table) {
            $table->id();
            $table->integer('propietario');
            $table->integer('vehiculo');
            $table->foreign('propietario')->references('id')->on('sisof__propietarios')->onDelete('set null');
            $table->foreign('vehiculo')->references('id')->on('sisof__vehiculos')->onDelete('set null');
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
        Schema::dropIfExists('sisof__vehiculo_propietarios');
    }
}
