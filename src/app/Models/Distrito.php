<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_distrito'
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class,'id_distrito','id_distrito');
    }
}
