<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quadra extends Model
{
    use HasFactory;
  
    protected $table = 'quadras';
    protected $fillable = ['valor_quadra', 'tipo_quadra'];

}
