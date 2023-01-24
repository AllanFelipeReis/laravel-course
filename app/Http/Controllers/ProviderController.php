<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        // empty values: 0, '0', [], null, '', false

        $providers = [
            [
                "name" => 'Fornecedor 1',
                "status" => "N",
                "document" => "00.000.000/0000-00"
            ],
            [
                "name" => 'Fornecedor 1',
                "status" => "N",
                "document" => null
            ]
        ];

        $msg = empty($providers[1]["document"]) ? "CNPJ inválido" : "CNPJ válido";

        echo $msg;

        return view('app.provider.index', compact('providers'));
    }
}
