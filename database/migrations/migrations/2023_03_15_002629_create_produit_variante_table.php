<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produit_variante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produit');
            $table->unsignedBigInteger('id_variante');
            $table->string('valeur');
            $table->decimal('prix', 10, 2);

            $table->foreign('id_produit')->references('id')->on('produit')->onDelete('cascade');
            $table->foreign('id_variante')->references('id')->on('variante')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit_variante');
    }
};
