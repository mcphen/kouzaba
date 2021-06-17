<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->string('file_pdf');
            //$table->integer('type_session_id');
            $table->foreignId('type_session_id')
                ->constrained('type_sessions')
                ->onDelete('cascade');
           // $table->integer('session_id');
            $table->foreignId('session_id')
                ->constrained('sessions')
                ->onDelete('cascade');
           // $table->integer('examen_annee_id');
            $table->integer('count_download');


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
        Schema::dropIfExists('documents');
    }
}
