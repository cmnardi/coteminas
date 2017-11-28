<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoPreco extends Model
{
    //
    protected $table = 'produto_preco';
    public $timestamps = true;

    public function produto()
    {
        $this->hasOne('App\Produto');
    }
}
