<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $table = 'pagamentos';
    protected $fillable = ['id_reserva', 'metodo_de_pagamento', 'data_de_pagamento'];

    public function reserva() {
        return $this->belongsTo(Reserva::class);
    }
}