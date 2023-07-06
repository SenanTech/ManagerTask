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
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();;
            $table->text('description')->nullable();;
            $table->date('dateCreation')->nullable();;
            $table->date('dateEcheance')->nullable();;
            $table->integer('projet_id');
            $table->unsignedBigInteger('statut_id');
            $table->unsignedBigInteger('responsable_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
