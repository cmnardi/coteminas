<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoImagem extends Model
{
    //
    protected $table = 'produto_imagem';
    public $timestamps = true;

    public function produto()
    {
        $this->hasOne('App\Produto');
    }
}
