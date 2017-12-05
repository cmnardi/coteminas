<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    //
    public function index(Request $req)
    {
        $perPage = $req->input('itens_per_page') ?? 2;
        $q = $req->input('q') ?? null;
        $r = Produto::
                with(
                    'precoAtual',
                    'imagens',
                    'categoria'
                )
                ->has('precoAtual')
                ->orderBy('nome')
        ;
        if (!is_null($q)) {
            $r->where('nome', 'like', '%'.$q.'%');
        }
        return $r->paginate($perPage )
        ;
    }
}
