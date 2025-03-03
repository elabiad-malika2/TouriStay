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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('prix', 10, 2);
            $table->string('location');
            $table->date('disponible_du')->nullable();
            $table->date('disponible_jusquau')->nullable();
            $table->integer('chambres')->nullable();
            $table->string('image')->nullable();
            $table->integer('salles_de_bain')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['appartement', 'maison', 'villa', 'studio']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
