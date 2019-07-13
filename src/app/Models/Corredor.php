<?php

namespace ApiRacer\Models;

use Illuminate\Database\Eloquent\Model;
use ApiRacer\Models\Traits\Corredor\CorredorRelationship;

class Corredor extends Model
{
    use CorredorRelationship;

    /**
     * A tabela associada ao modelo.
     *
     * @var string
     */
    protected $table = 'corredores';

    /**
     * Os atributos que são atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento'
    ];

    /**
     * Os atributos que devem ser transformados em datas.
     *
     * @var array
     */
    protected $dates = [
        'data_nascimento',
    ];
}
