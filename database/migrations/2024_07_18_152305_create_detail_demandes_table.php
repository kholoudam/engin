<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('detail_demandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Demande_id')->nullable();
            $table->string('FamilleEngin');
            $table->string('TypeEngin');
            $table->integer('Quantite');
            $table->string('RaisonDemande');
            $table->foreign('Demande_id')->references('id')->on('demandes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_demandes');
    }
};
