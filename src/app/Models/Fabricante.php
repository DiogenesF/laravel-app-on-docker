<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_fabricante'
    ];

    public function vacinas()
    {
        return $this->hasMany(Vacina::class,'id_fabricante','id_fabricante');
    }

}
