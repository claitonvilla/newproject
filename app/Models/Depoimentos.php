<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depoimentos extends Model
{
    protected $table = 'depoimentos';
    protected $fillable = [ 'id', 'imagens_id', 'name', 'testemonial' ];
    protected $dates = ['created-at', 'updated-at'];
}
