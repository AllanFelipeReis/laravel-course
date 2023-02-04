<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function view() 
    {
        var_dump($_POST);

        return view('site.contact', [
            "title" => "Contato"
        ]);
    }
}
