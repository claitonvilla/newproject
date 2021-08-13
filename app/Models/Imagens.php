<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    protected $table = 'imagens';
    protected $fillable = [ 'id', 'name', 'size', 'real-name', 'extension', 'mime' ];
    protected $dates = ['created-at', 'updated-at'];
}
