<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdutoPreco extends Model
{
    //
    use SoftDeletes;

    protected $table = 'produto_preco';
    public $timestamps = true;

    public function produto()
    {
        $this->hasOne('App\Produto');
    }
}
