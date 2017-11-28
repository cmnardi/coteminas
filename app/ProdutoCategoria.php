<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoCategoria extends Model
{
    //
    protected $_table = 'produtoCategoria';
    public $timestamps = true;

    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'ultima_atualizacao';

}
