<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    //
    public function index()
    {
        return
            Produto::
                with(
                    'precoAtual',
                    'imagens',
                    'categoria'
                )
                ->paginate(10)
            ;
    }
}
