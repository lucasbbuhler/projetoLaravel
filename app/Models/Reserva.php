<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    
    protected $table = 'reservas';
    protected $fillable = ['id_quadra', 'responsavel', 'data_da_reserva', 'valor_da_reserva'];
    

    public function quadra() {
        return $this->belongsTo(Quadra::class);
    }

}
