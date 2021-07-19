<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etudiant_id')->unsigned();
            $table->integer('stage_id')->unsigned();

            $table->foreign('etudiant_id')->references('id')->on('etudiants')
            ->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('stage_id')->references('id')->on('offre_de_stages')
            ->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('postules');
    }
}
