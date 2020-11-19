<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicao extends Model
{
    use HasFactory;

    //indicar qual a chave primaria da tabela livros
    protected $primaryKey='id_livro,id_editora';
   // protected $primaryKey="id_editora";

    //esta propriedade não é necessária
    //mas vai ajudar-nos em situações futuras
    protected $table="edicoes";

}
