<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jury_id')->unsigned();
            $table->integer('dossier_id')->unsigned();

            $table->foreign('jury_id')->references('id')->on('jurys')
            ->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('dossier_id')->references('id')->on('dossiers')
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
        Schema::dropIfExists('juges');
    }
}
