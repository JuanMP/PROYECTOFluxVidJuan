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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();           //por defecto ya es autoincremento
            //si quisieramos ponerlo pero no es necesario, $table->id()->autoIncrement();
            $table->string('title', 50);
            $table->integer('year');
            $table->text('plot');
            $table->decimal('rating', 2, 1);
            $table->boolean('visibility');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};