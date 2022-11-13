<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (Request $request) {
        $input = $request-> all(); #parâmetros recebidos via get/post
        return view('index');
    }
}
