<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function cadastrar() {

        $pessoa = new Pessoa;
        $pessoa->nome = $request->nome;
        $pessoa->profissao = $request->profissao;
        $pessoa->idade = $request->idade;
        $pessoa->save();
        
        return listar();
    }

    public function listar() {
        $pessoas = Pessoa::all();
        return view('pessoas.listar', ['pessoas' => $pessoas]);
    }

    public function detalhar() {
        return view('pessoas.detalhar')->with('pessoa', $pessoa);
    }
}
