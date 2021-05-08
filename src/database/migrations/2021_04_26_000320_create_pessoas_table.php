<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->string('numero_sus',15)->unique()->primary();
            $table->string('cpf',11)->unique();
            $table->string('nome',45)->nullable(false);
            $table->integer('idade')->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('nome_mae',45)->nullable(false);
            $table->string('sexo_genetico',1)->nullable(false);
            $table->string('rua',45)->nullable(false);
            $table->bigInteger('numero')->nullable(false);
            $table->string('bairro',45)->nullable(false);
            $table->string('cep',8)->nullable(false);




            $table->unsignedBigInteger('id_estado_civil')->nullable(false);
            $table->unsignedBigInteger('id_escolaridade')->nullable(false);
            $table->unsignedBigInteger('id_religiao')->nullable(false);
            $table->unsignedBigInteger('id_raca_cor_etnia')->nullable(false);
            $table->unsignedBigInteger('id_plano_saude')->nullable(false);
            $table->unsignedBigInteger('id_alergia')->nullable(false);
            $table->unsignedBigInteger('id_distrito')->nullable(false);


            $table->foreign('id_estado_civil')->references('id_estado_civil')->on('estado_civils')->onDelete('cascade');
            $table->foreign('id_escolaridade')->references('id_escolaridade')->on('escolaridades')->onDelete('cascade');
            $table->foreign('id_religiao')->references('id_religiao')->on('religiaos')->onDelete('cascade');
            $table->foreign('id_raca_cor_etnia')->references('id_raca_cor_etnia')->on('raca_cor_etnias')->onDelete('cascade');
            $table->foreign('id_plano_saude')->references('id_plano_saude')->on('plano_saudes')->onDelete('cascade');
            $table->foreign('id_alergia')->references('id_alergia')->on('alergias')->onDelete('cascade');
            $table->foreign('id_distrito')->references('id_distrito')->on('distritos')->onDelete('cascade');


            $table->unique('cpf','cpf_UNIQUE');



            $table->index('id_escolaridade');
            $table->index('id_estado_civil');
            $table->index('id_religiao');
            $table->index('id_raca_cor_etnia');
            $table->index('id_plano_saude');
            $table->index('id_alergia');
            $table->index('id_distrito');

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
        Schema::dropIfExists('pessoas');
    }
}
