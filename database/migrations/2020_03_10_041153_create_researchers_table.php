<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Nombre: obligatorio
            numero de pasaporte (alfanumérico): obligatorio
            Unidad a la que pertenece (ADM-001): no obligatorio
            Estado- Inactivo, Activo: Obligatorio
            País
        */
        Schema::create('researchers', function (Blueprint $table){
            $table->increments('id');
            $table->string('numPasaporte',128);
            $table->enum('estado', ['ACTIVO','INACTIVO'])->default('INACTIVO');
            $table->integer('unit_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('units')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('researchers');
    }
}
