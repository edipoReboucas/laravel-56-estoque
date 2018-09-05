<?php
/**
 * Created by PhpStorm.
 * User: edipo
 * Date: 27/08/18
 * Time: 00:47
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra()
    {
        $id = Request::route('id');

        $produtos = DB::select('select * from produtos where id = ?', [$id]);

        return view('produto.detalhes')->with('p', $produtos[0]);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona()
    {
        $nome = Request::input('nome');
        $quantidade = Request::input('quantidade');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');

        DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)', array(
            $nome,
            $quantidade,
            $valor,
            $descricao
        ));

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

}