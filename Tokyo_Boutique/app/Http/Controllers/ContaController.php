<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    /**
     * Exibe a página de criação de contas.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        return view('conta');
    }
}
