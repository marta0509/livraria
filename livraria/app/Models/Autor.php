<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    //indicar qual a chave primaria da tabela livros
    protected $primaryKey="id_autor";

    //esta propriedade não é necessária
    //mas vai ajudar-nos em situações futuras
    protected $fillable=[
        'id_autor',
        'nome',
        'nacionalidade',
        'data_nascimento',
        'fotografia'
    ];

    protected $table="autores";

    public function Livros() 
    {
    	return $this->hasMany('App\Models\Livro','id_autor');
    }
}
