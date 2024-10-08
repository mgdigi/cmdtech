<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneeFiscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('annee_fiscales', function (Blueprint $table) {
        $table->id();
        $table->date('date_debut');  // Date de début de l'année fiscale
        $table->date('date_fin');    // Date de fin de l'année fiscale
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
        Schema::dropIfExists('annee_fiscales');
    }
}
