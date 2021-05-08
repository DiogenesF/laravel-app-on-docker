<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_sus', 'cpf', 'nome', 'idade', 'data_nascimento', 'nome_mae', 'sexo_genetico',
        'rua','numero','bairro','cep', 'id_estado_civil', 'id_escolaridade', 'id_religiao',
        'id_raca_cor_etnia', 'id_plano_saude', 'id_alergia','id_distrito'
    ];


    public function escolaridades()
    {

        return $this->belongsTo(Escolaridade::class,'id_escolaridade');

    }

    public function estadocivils()
    {

        return $this->belongsTo(EstadoCivil::class, 'id_estado_civil');

    }

    public function religaos()
    {
        return $this->belongsTo(Religiao::class,'id_religiao');
    }


    public function raca_cor_etnias()
    {

        return $this->belongsTo(RacaCorEtnia::class, 'id_raca_cor_etnia');

    }

    public function plano_saudes()
    {

        return $this->belongsTo(PlanoSaude::class, 'id_plano_saude');

    }

    public function alergias()
    {

        return $this->belongsTo(Alergia::class, 'id_alergia');

    }

    public function distritos()
    {

        return $this->belongsTo(Distrito::class, 'id_distrito');

    }


    }
