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
        Schema::create('engin_demandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Demande_id')->nullable();
            $table->unsignedBigInteger('Engin_id')->nullable();
            $table->foreign('Demande_id')->references('id')->on('demandes');
            $table->foreign('Engin_id')->references('id')->on('engins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engin_demandes');
    }
};
