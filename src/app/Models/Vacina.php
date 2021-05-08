<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_vacina', 'id_fabricante','nome_vacina','quantidade_doses_necessarias','id_doenca',
    ];

    public function doencas()
    {
        return $this->belongsTo(Doenca::class,'id_doenca');
    }

    public function fabricantes()
    {
        return $this->belongsTo(Fabricante::class,'id_fabricante');
    }

    public function vacina_lotes()
    {
        return $this->hasMany(VacinaLotes::class,'id_vacina');
    }
}
