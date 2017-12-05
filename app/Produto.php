<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    //
    use SoftDeletes;

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
                ->hasOne('App\ProdutoPreco', 'idProduto', 'id')
                ->where('inicio', '<', new \DateTime())
                ->where('fim', '>', new \DateTime())
                ->latest()
            ;
    }
}
