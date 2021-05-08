<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religiao extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_religiao'
    ];
    public function pessoas()
    {
        return $this->hasMany(Pessoa::class,'id_religiao','id_religiao');
    }

}
