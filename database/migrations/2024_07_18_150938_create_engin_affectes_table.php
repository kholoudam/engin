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
        Schema::create('engin_affectes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Engin_id')->nullable();
            $table->unsignedBigInteger('Affectation_id')->nullable();
            $table->foreign('Engin_id')->references('id')->on('engins');
            $table->foreign('Affectation_id')->references('id')->on('affectations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engin_affectes');
    }
};
