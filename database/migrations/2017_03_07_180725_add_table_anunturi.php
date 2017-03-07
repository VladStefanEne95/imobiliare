<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableAnunturi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anunturi', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titlu');
            $table->decimal('pret');
            $table->string('structura_de_rezistenta');
            $table->tinyInteger('nr_camere');
            $table->float('suprafata_utila');
            $table->float('suprafata_utila_totala');
            $table->float('suprafata_construita');
            $table->string('regim_inaltime');
            $table->string('confort');
            $table->tinyInteger('etaje');
            $table->string('tip_imobil');
            $table->tinyInteger('locuri_parcare');
            $table->tinyInteger('nr_garaje');
            $table->tinyInteger('nr_bai');
            $table->tinyInteger('nr_balcoane');
            $table->tinyInteger('nr_bucatarii');
            $table->string('compartimentare');
            $table->integer('an_constructie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anunturi');
    }
}
