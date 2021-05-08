<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_lote', 'data_fabricacao', 'data_validade', 'data_compra'
    ];

    public function vacina_lotes()
    {
        return $this->hasMany(VacinaLotes::class,'id_vacina_lote','id_vacina_lotes');
    }
}
