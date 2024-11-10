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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // e.g., Developer
            $table->string('company');         // e.g., Company Name
            $table->date('start_date');        // Start date of the experience
            $table->date('end_date')->nullable(); // End date (null if current)
            $table->integer('years_experience')->nullable(); // Number of years experience
            $table->text('description');       // Description of the experience
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
