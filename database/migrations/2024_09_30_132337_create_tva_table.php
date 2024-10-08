<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvas', function (Blueprint $table) {
            $table->id(); // clé primaire
            $table->decimal('tva_deductible', 15, 2)->nullable(); // TVA déductible
            $table->decimal('tva_collecte', 15, 2)->nullable(); // TVA collectée
            $table->decimal('tva_nette', 15, 2)->nullable(); 
            $table->foreignId('numero_compte')->constrained('plan_comptes'); // FK vers plan_compte
            $table->foreignId('annee_fiscale_id')->constrained('annee_fiscales'); // FK vers annee_fiscale
            $table->timestamps(); // gestion des timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tva');
    }
}
