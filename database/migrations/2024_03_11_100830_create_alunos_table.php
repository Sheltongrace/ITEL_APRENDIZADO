<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50);
            $table->double('n_processo',5);
            $table->year('ano_lectivo')-> default('2024');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     *   $table->id();
           
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
