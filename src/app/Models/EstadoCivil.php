<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_estado_civil','id_estado_civil'
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class,'id_estado_civil','id_estado_civil');
    }
}
