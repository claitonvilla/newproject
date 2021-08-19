<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacotesImagens extends Model
{
    protected $table = 'pacotes_imagens';
    protected $fillable = [ 'pacotes_id', 'imagens_id' ];  
    protected $dates = ['created-at', 'updated-at']; 
    
    public function imagem()
    {
        return $this->belongsTo(Imagens::class, 'imagens_id');
    }
}
