<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precos extends Model
{
    protected $table = 'precos';
    protected $fillable = [ 'pacotes_id', 'from', 'to', 'price', ];
    protected $dates = ['created-at', 'updated-at', 'from', 'to'];
}
