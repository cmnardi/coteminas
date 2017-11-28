<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdutoCategoria extends Model
{
    //
    use SoftDeletes;

    protected $table = 'produto_categoria';
    public $timestamps = true;

}
