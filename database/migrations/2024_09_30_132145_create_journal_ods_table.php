<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalOdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_ods', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // date de la transaction
            $table->foreignId('numero_compte')->constrained('plan_comptes'); // FK vers plan_compte
            $table->string('libelle'); // description
            $table->decimal('debit', 15, 2); // montant débité
            $table->decimal('credit', 15, 2); // montant crédité
            $table->foreignId('annee_fiscale_id')->constrained('annee_fiscales'); // FK vers annee_fiscale
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
        Schema::dropIfExists('journal_ods');
    }
}
