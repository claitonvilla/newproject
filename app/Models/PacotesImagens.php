<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacotesImagens extends Model
{
    protected $table = 'infos';
    protected $fillable = [ 'id', 'pacotes_id', 'imagens-id' ];    
}
