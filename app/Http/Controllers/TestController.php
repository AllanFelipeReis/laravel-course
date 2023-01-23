<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $x, int $y)
    {
        // compact('x', 'y');
        // ->with('x', $x);
        return view('site.test', [
            "x" => $x,
            "y" => $y,
            "sum" => $x + $y
        ]);
    }
}
