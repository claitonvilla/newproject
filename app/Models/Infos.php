<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infos extends Model
{
    protected $table = 'infos';
    protected $fillable = [ 'pacotes_id', 'nome', 'descricao' ];
    protected $dates = ['created-at', 'updated-at'];
}
