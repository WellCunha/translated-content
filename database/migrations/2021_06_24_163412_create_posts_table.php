<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title', 160)->nullable()->default(NULL);
            $table->string('nome', 160);
            $table->string('alcunha', 160)->nullable()->default(NULL);
            $table->string('orcrim', 160)->nullable()->default(NULL);
            $table->string('hierarquia', 160)->nullable()->default(NULL);
            $table->string('nivel_de_seguranca' )->nullable()->default(NULL);
            $table->integer('qty')->nullable()->default(NULL);
            $table->boolean('colaborador')->nullable()->default(NULL);
            $table->string('ccaps', 3)->nullable()->default(NULL);
            $table->dateTime('data_nascimento')->nullable()->default(NULL);
            $table->string('genero', 10 )->unique()->nullable()->default(NULL);
            $table->string('cpf',11 )->unique()->nullable()->default(NULL);
            $table->string('rg',12 )->nullable()->default(NULL);
            $table->string('uf',2 )->nullable()->default(NULL);
            $table->string('nascionalidade', 160 )->nullable()->default(NULL);
            $table->string('mae',160 )->nullable()->default(NULL);
            $table->string('pai',160 )->nullable()->default(NULL);
            $table->string('cidade' ,160)->nullable()->default(NULL);
            $table->string('bairro' ,160)->nullable()->default(NULL);
            $table->string('endereco' ,160)->nullable()->default(NULL);
            $table->json('itens')->nullable()->default(NULL);
            $table->string('cep',8 )->nullable()->default(NULL);
            $table->text('obs', 10000)->nullable()->default(NULL);
            $table->text('dados_sensiveis', 10000 )->nullable()->default(NULL);
            $table->text('content', 10000)->nullable()->default(NULL);

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
        Schema::dropIfExists('posts');
    }
}
