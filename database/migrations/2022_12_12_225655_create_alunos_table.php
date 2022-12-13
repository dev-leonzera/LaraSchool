<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->foreignId('id_turma')->constrained('turmas');
            $table->string('nome');
            $table->date('data_nasc');
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('endereco');
            $table->string('telefone');
            $table->string('data_matricula');
            $table->string('status_matricula');
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
        Schema::dropIfExists('alunos');
    }
};
