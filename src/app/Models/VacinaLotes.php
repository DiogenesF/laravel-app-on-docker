<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacinaLotes extends Model
{
    use HasFactory;
    protected $fillable = [
         'id_vacina_lote', 'id_vacina', 'id_lote'
    ];

    public function vacinas()
    {
        return $this->belongsTo(Vacina::class,'id_vacina');
    }

    public function lotes()
    {
        return $this->belongsTo(Lote::class,'id_lote');
    }

    public function pessoa_vacinas()
    {
        return $this->hasMany(PessoaVacina::class,'id_vacina_lote');
    }

}
