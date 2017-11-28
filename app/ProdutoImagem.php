<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdutoImagem extends Model
{
    //
    use SoftDeletes;

    protected $table = 'produto_imagem';
    public $timestamps = true;

    public function produto()
    {
        $this->hasOne('App\Produto');
    }
}
