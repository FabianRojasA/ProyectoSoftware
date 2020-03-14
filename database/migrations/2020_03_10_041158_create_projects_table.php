<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table){
            $table->increments('id');
            $table->integer('group_id')->unsigned();

            $table->string('nombre',128);
            $table->string('codigo',128)->nullable();
            $table->enum('estado', ['POSTULADO','EN EJECUCION','FINALIZADO','CANCELADO'])->default('POSTULADO');
            //Listado de académicos participantes
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            $table->foreign('group_id')->references('id')->on('groups')
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
        Schema::dropIfExists('projects');
    }
}
