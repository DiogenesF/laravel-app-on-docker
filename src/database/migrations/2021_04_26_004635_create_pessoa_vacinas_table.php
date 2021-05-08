<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_vacinas', function (Blueprint $table) {
            $table->string('numero_sus',15)->nullable(false);
            $table->unsignedBigInteger('id_vacina_lote')->nullable(false);
            $table->date('data_dose')->nullable(false)->primary();
            $table->bigInteger('dose')->nullable(false);


            $table->foreign('numero_sus')->references('numero_sus')->on('pessoas')->onDelete('cascade');
            $table->foreign('id_vacina_lote')->references('id_vacina_lote')->on('vacina_lotes')->onDelete('cascade');

            $table->index('id_vacina_lote');


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
        Schema::dropIfExists('pessoa_vacinas');
    }
}
