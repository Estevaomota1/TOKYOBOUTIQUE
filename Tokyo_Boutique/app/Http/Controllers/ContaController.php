<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index()
    {
        return view('conta'); // Certifique-se que o arquivo resources/views/conta.blade.php existe
    }
}
