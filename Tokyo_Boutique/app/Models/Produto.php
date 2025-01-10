<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Defina os campos que podem ser preenchidos via formulário
    protected $fillable = ['nome', 'descricao', 'preco'];
}
