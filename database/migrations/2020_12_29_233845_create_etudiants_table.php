<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numEtudiant');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('numTel');
            $table->string('adresse');
            $table->integer('CP');
            $table->string('ville');
            $table->string('niveau');
            $table->string('formation');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('restrict')->onUpdate('restrict');
            $table->integer('tuteur_id')->unsigned();
            $table->foreign('tuteur_id')->references('id')->on('tuteurs')
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
        Schema::dropIfExists('etudiants');
    }
}
