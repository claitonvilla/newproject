<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infos extends Model
{
    protected $table = 'infos';
    protected $fillable = [ 'id', 'pacotes_id', 'Check-in', 'Check-out', 'Pets', 'Policies', 'Fees', ];
    protected $dates = ['created-at', 'updated-at'];
}
