<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacinaLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacina_lotes', function (Blueprint $table) {
            $table->bigIncrements('id_vacina_lote')->nullable(false);
            $table->unsignedBigInteger('id_lote')->nullable(false);
            $table->unsignedBigInteger('id_vacina')->nullable(false);

            $table->timestamps();

            $table->foreign('id_vacina')->references('id_vacina')->on('vacinas')->onDelete('cascade');
            $table->foreign('id_lote')->references('id_lote')->on('lotes')->onDelete('cascade');


            $table->index('id_vacina');
            $table->index('id_lote');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacina_lotes');
    }
}
