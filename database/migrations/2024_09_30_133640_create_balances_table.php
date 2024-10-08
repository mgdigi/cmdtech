<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id(); // clé primaire
            $table->foreignId('numero_compte')->constrained('plan_comptes'); // FK vers plan_compte
            $table->decimal('si_debit', 15, 2)->nullable(); // solde initial débit
            $table->decimal('si_credit', 15, 2)->nullable(); // solde initial crédit
            $table->decimal('mvt_debit', 15, 2)->nullable(); // mouvement débit
            $table->decimal('mvt_credit', 15, 2)->nullable(); // mouvement crédit
            $table->decimal('sf_debit', 15, 2)->nullable(); // solde final débit
            $table->decimal('sf_credit', 15, 2)->nullable(); // solde final crédit
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
        Schema::dropIfExists('balance');
    }
}
