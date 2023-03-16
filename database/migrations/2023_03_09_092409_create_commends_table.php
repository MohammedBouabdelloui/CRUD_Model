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
        Schema::create('commends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clients_id')->constrained('clients')->cascadeOnDelete();
            $table->timestamps();
            $table->string('name_produite' , length: 20);
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commends');
    }
};
