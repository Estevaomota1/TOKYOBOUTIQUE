<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesejosController extends Controller
{
    public function index()
    {
        return view('desejos');
    }
}
