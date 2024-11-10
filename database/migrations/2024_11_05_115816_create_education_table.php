<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('title');            // Title of the education entry
            $table->year('start_year');         // Start year
            $table->year('end_year')->nullable(); // End year (nullable for ongoing)
            $table->integer('duration');        // Duration in years
            $table->text('description');        // Description of the education
            $table->timestamps();               // Laravel's created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
