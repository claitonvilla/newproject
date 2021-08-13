<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacotes extends Model
{
    protected $table = 'pacotes';
    protected $fillable = [ 'id', 'nome', 'chamada', 'noites', 'pass-aerea', 'endereço', 'descricao', 'mapa', 'contato_nome', 'contato_tel', 'contato_cel', 'email', 'status' ];
    protected $dates = ['created-at', 'updated-at'];
}
