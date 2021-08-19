<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacotes extends Model
{
    protected $table = 'pacotes';
    protected $fillable = [ 'id', 'nome', 'chamada', 'noites', 'pass-aerea', 'endereço', 'descricao', 'mapa', 'contato_nome', 'contato_tel', 'contato_cel', 'email', 'status' ];
    protected $dates = ['created-at', 'updated-at'];

    /* função para criar uma coluna falsa dentro de pacotes contendo muitas infos */
    public function infos()
    {
        return $this->hasMany(Infos::class, 'pacotes_id', 'id');
    }

    public function precos()
    {
        return $this->hasMany(Precos::class, 'pacotes_id', 'id');
    }

    public function imagens()
    {
        return $this->hasMany(PacotesImagens::class, 'pacotes_id', 'id');
    }

}
