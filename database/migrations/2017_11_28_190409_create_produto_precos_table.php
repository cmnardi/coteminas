<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoPrecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_preco', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor_de',10, 2);
            $table->decimal('valor_por', 10, 2);
            $table->timestamp('inicio');
            $table->timestamp('fim');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idProduto')->references('id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_preco');
    }
}
