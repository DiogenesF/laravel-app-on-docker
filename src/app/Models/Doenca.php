<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doenca extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_doenca'
    ];

    public function vacinas()
    {
        return $this->hasMany(Vacina::class,'id_doenca','id_doenca');
    }
}
