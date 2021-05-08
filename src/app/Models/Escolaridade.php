<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_escolaridade'
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class,'id_escolaridade','id_escolaridade');
    }
}
