<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_comptes', function (Blueprint $table) {
            $table->id(); 
            $table->string('numero_compte')->unique(); // numéro de compte unique
            $table->string('intitule_compte'); // nom du compte
            $table->enum('type_compte', ['debit', 'credit']); // type du compte
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
        Schema::dropIfExists('plan_comptes');
    }
}
