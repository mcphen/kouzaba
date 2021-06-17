<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensAnneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens_annees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('annee_id')
                ->constrained('annees')
                ->onDelete('cascade');

            $table->foreignId('examen_id')
                ->constrained('examens')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examens_annees');
    }
}
