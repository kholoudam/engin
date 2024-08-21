<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreEnginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entre_engin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('engin_id');
            $table->unsignedBigInteger('critere_id');
            $table->text('description')->nullable();
            $table->string('matricule');
            $table->string('societe');
            $table->string('nom_conducteur');
            $table->string('prenom_conducteur');
            $table->text('observation')->nullable();
            $table->integer('compteur_valeur');
            $table->timestamps();

            $table->foreign('engin_id')->references('id')->on('engins');
            $table->foreign('critere_id')->references('id')->on('criteres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entre_engin');
    }
}
