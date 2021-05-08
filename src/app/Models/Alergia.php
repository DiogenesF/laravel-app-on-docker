<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_alergia'
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class,'id_alergia','id_alergia');
    }
}
