<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    //indicar qual a chave primaria da tabela livros
    protected $primarykey="idg";

    //esta propriedade não é necessária
    //mas vai ajudar-nos em situações futuras
    protected $table="generos";
}
