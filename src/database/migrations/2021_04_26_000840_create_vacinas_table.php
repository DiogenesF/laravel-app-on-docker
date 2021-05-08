<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacinas', function (Blueprint $table) {
            $table->bigIncrements('id_vacina')->nullable(false);
            $table->unsignedBigInteger('id_fabricante')->nullable(false);
            $table->string('nome_vacina',45)->nullable(false)->unique();
            $table->integer('quantidade_doses_necessarias')->nullable(false);
            $table->unsignedBigInteger('id_doenca')->nullable(false);


            $table->foreign('id_doenca')->references('id_doenca')->on('doencas');
            $table->foreign('id_fabricante')->references('id_fabricante')->on('fabricantes');

            $table->unique('nome_vacina','tipo_vacina_UNIQUE');

            $table->index('id_doenca');
            $table->index('id_fabricante');
            $table->index('nome_vacina');




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
        Schema::dropIfExists('vacinas');
    }
}
