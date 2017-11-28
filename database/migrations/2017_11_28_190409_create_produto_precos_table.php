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
            $table->decimal('valorDe',10, 2);
            $table->decimal('valorPor', 10, 2);
            $table->timestamp('inicio')->nullable(true);
            $table->timestamp('fim')->nullable(true);
            $table->integer('idProduto')->unsigned();
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
