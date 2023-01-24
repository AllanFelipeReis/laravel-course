<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = [
            [
                "name" => 'Fornecedor 1',
                "status" => "N",
                "document" => "00.000.000/0000-00"
            ],
            [
                "name" => 'Fornecedor 1',
                "status" => "N",
            ]
        ];

        return view('app.provider.index', compact('providers'));
    }
}
