<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacaCorEtniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raca_cor_etnias', function (Blueprint $table) {
            $table->bigIncrements('id_raca_cor_etnia');
            $table->string('descricao_raca_cor_etnia',45)->nullable(false);
            $table->timestamps();

            $table->index('descricao_raca_cor_etnia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raca_cor_etnias');
    }
}
