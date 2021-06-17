<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->foreignId('examen_annee_id')
                ->constrained('examens_annees')
                ->onDelete('cascade');

        });

        Schema::table('documents', function (Blueprint $table) {
            $table->foreignId('examen_annee_id')
                ->constrained('examens_annees')
                ->onDelete('cascade');

            $table->foreignId('matiere_id')
                ->constrained('matieres')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('foreign_key');
    }
}
