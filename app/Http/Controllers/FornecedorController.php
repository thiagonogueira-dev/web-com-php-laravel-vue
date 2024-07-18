<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '00', 'ddd' => '11', 'telefone' => '123' ],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'ddd' => '85', 'telefone' => '321'],
            2 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'ddd' => '32', 'telefone' => '222']
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
