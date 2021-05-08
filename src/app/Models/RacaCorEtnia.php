<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RacaCorEtnia extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_raca_cor_etnia'
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class,'id_raca_cor_etnia','id_raca_cor_etnia');
    }
}
