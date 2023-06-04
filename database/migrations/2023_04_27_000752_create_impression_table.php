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
        Schema::create('Impression', function (Blueprint $table) {
            $table->id();
            $table->integer('anner');
            $table->integer('numéro');
            $table->string('Nom');
           
            $table->foreignId('candidat_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Impression');
    }
};
