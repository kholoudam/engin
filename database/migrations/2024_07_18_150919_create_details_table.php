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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->unsignedBigInteger('Critere_id')->nullable();
            $table->unsignedBigInteger('Engin_id')->nullable();
            $table->foreign('Critere_id')->references('id')->on('criteres');
            $table->foreign('Engin_id')->references('id')->on('engins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
