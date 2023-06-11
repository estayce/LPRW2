<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teste;

class TesteController extends Controller
{
    public function index(){
        $exemplo = Teste::all();
        return view('pastateste.paginateste', ['teste' => $exemplo]);
    }
}
