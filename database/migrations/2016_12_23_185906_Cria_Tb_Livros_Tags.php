<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTbLivrosTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // criando os campos
        Schema::create('livros_tags', function (Blueprint $table) {
            $table->integer('livros_id')->unsigned();
            $table->integer('tags_id')->unsigned();
        });

        //criando a integridade referencial
        Schema::table('livros_tags', function (Blueprint $table) {
            $table->foreign('livros_id')->references('id')->on('livros');// livros, é a tabela livros
            $table->foreign('tags_id')->references('id')->on('tags');// tags, é a tabela tags
        });     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros_tags');
    }
}
