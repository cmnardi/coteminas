<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    //
    protected $table = 'produto';
    public $timestamps = true;

    public function categoria()
    {
        return $this->hasOne('App\ProdutoCategoria', 'id', 'idProdutoCategoria');
    }

    public function imagens()
    {
        return $this->hasMany('App\ProdutoImagem', 'idProduto', 'id');
    }

    public function precos()
    {
        return $this->hasMany('App\ProdutoPreco', 'idProduto', 'id');
    }

    public function precoAtual()
    {
        return $this
                ->precos()
                ->where('inicio', '<', new \DateTime())
                ->where('fim', '>', new \DateTime());
    }
}
