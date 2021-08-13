<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogues extends Model
{
    protected $table = 'blogues';
    protected $fillable = [ 'id', 'nome', 'autor', 'views', 'conteudo' ];
    protected $dates = ['created-at', 'updated-at'];
}
