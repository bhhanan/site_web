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
        Schema::create('déciders', function (Blueprint $table) {
            $table->id();
            $table->integer('anner');
            $table->integer('numéro');
            $table->string('Nom');
            $table->string('Prénom');
            $table->string('gender');
            $table->date('dateNaissance');
            $table->string('lieuDécider');
            $table->date('dateDécider');
            $table->string('NomPére');
            $table->string('NomMére');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('déciders');
    }
};
