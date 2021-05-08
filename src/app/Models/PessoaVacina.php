<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaVacina extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_vacina_lote', 'numero_sus', 'id_lote', 'data_dose', 'dose'
    ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class,'numero_sus');
    }

    public function vacina_lotes()
    {
        return $this->belongsTo(VacinaLotes::class,'id_vacina_lote');

    }
}
