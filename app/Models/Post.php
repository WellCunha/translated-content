<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

protected $table = 'posts';

protected $fillable =[
    'title',
    'content',
    'alcunha',
    'image',
    'nome','orcrim',
    'hierarquia',
    'nivel_de_seguranca',
    'colaborador',
    'ccaps',
    'data_nascimento',
    'genero',
    'cpf',
    'rg',
    'uf',
    'nascionalidade',
    'mae',
    'pai',
    'cidade',
    'bairro',
    'endereco',
    'cep',
    'obs',
    'dados_senciveis'
    ];
}
