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
                "document" => "00.000.000/0000-00",
                "ddd" => "11",
                "phone" => "12332-1243"
            ],
            [
                "name" => 'Fornecedor 2',
                "status" => "S",
                "document" => null,
                "ddd" => "19",
                "phone" => "43232-1234"
            ],
            [
                "name" => 'Fornecedor 3',
                "status" => "N",
                "document" => null,
                "ddd" => "32",
                "phone" => "43232-1234"
            ]
        ];

        $msg = empty($providers[1]["document"]) ? "CNPJ inválido" : "CNPJ válido";

        echo $msg;

        return view('app.provider.index', compact('providers'));
    }
}
 