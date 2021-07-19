<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreDeStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_de_stages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->date('debut');
            $table->date('fin');
            $table->string('description');
            $table->integer('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')->references('id')->on('entreprises')
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
        Schema::dropIfExists('offre_de_stages');
    }
}
